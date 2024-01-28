<?php

namespace App\Controllers;


class Login extends BaseController
{

    public function index()
    {
        $data = [
            'validation' => $this->validation,
        ];
        return view('login', $data);
    }

    public function daftar()
    {
        $data = [
            'validation' => $this->validation,
        ];
        return view('daftar', $data);
    }
    public function lupa()
    {
        $data = [
            'validation' => $this->validation,
        ];
        return view('lupa', $data);
    }

    public function sendemail()
    {
        if (!$this->validate([
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email',
            ],

        ])) {

            return redirect()->to('/lupa')->withInput();
        }

        $email = $this->request->getVar('email', FILTER_SANITIZE_EMAIL);
        $data = $this->Muser->perifikasiemail($email);
        if (!empty($data)) {
            if ($this->Muser->updatetoken($data['tokenreset'])) {
                $subject = 'Password Reset CV-GEN';
                $token = $data['tokenreset'];
                $message = 'Hi, ' . $data['nama'] . '<br><br>'
                    . 'Your request reset password has been received. Please click '
                    . 'the link below to reset your password.<br><br>'
                    . 'Username: ' . $data['username'] . '<br><br>'
                    . '<a href="' . base_url() . '/reset/' . $token . '">Reset Password</a><br><br>'
                    . 'Thank you.';

                $this->email->setTo($email);
                $this->email->setFrom('no-replay@cv-gen.com', 'Password Reset CV-GEN');
                $this->email->setSubject($subject);
                $this->email->setMessage($message);

                if ($this->email->send()) {
                    $this->session->setFlashdata('pesan', 'Reset password link send to your email. Please verify with in 15 Mins');
                    return redirect()->to('/login');
                } else {
                    $this->session->setFlashdata('pesan', 'Sorry, Enable to send token. Please try again.');
                    return redirect()->to('/lupa');
                }
            } else {
                $this->session->setFlashdata('pesan', 'Sorry, Enable to reset your password. Please try again.');
                return redirect()->to('/lupa');
            }
        } else {
            $this->session->setFlashdata('pesan', 'Ups, Email does not Exist.');
            return redirect()->to('/lupa');
        }
    }

    public function reset($token)
    {
        if (!empty($token)) {
            $userdata = $this->Muser->verifyToken($token);
            if (!empty($userdata)) {
                if ($this->checkExpiryDate($userdata['updated_at'])) {
                    $data = [
                        'validation' => \Config\Services::validation(),
                        'token' => $token
                    ];

                    return view('reset', $data);
                } else {
                    $this->session->setFlashdata('pesan', 'Reset password link was expired. Please try again.');
                    return redirect()->to('/lupa');
                }
            } else {
                $this->session->setFlashdata('pesan', 'Token reset password link already used. Please login.');
                return redirect()->to('/login');
            }
        } else {
            $this->session->setFlashdata('pesan', 'Sorry! Unauthourized access');
            return redirect()->to('/login');
        }
    }

    public function reset_password($token = null)
    {

        if (!$this->validate([
            'pwd' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]|max_length[100]',
            ],
            'cpwd' => [
                'label' => 'Confirm Password',
                'rules' => 'required|matches[pwd]'
            ],

        ])) {

            return redirect()->to('/reset/' . $token)->withInput();
        }

        if (!empty($token)) {
            $userdata = $this->Muser->verifyToken($token);
            if (!empty($userdata)) {

                if ($this->checkExpiryDate($userdata['updated_at'])) {
                    $pwd = password_hash($this->request->getVar('pwd'), PASSWORD_DEFAULT);
                    $gantitoken = md5(str_shuffle('abcsefghijklmonpqrtuvwxyz' . time()));
                    if ($this->Muser->updatePassword($token, $pwd)) {

                        $this->Muser->save([
                            'id' => $userdata['id'],
                            'tokenreset' => $gantitoken
                        ]);
                        $this->session->setFlashdata('pesan', 'Password updated successfully, Login now');
                        return redirect()->to('/login');
                    } else {
                        $this->session->setFlashdata('pesan', 'Sorry! Unable to update Password. try again');
                        return redirect()->to(current_url());
                    }
                } else {
                    $this->session->setFlashdata('pesan', 'Reset password link was expired. Please try again.');
                    return redirect()->to('/lupa');
                }
            } else {
                $this->session->setFlashdata('pesan', 'Unable to find token account.');
                return redirect()->to('/reset/' . $token);
            }
        } else {
            $this->session->setFlashdata('pesan', 'Sorry! Unauthourized access');
            return redirect()->to('/login');
        }
    }

    public function checkExpiryDate($time)
    {
        $timeDiff = strtotime(date("Y-m-d h:i:s")) - strtotime($time);
        if ($timeDiff < 900) {
            return true;
        } else {
            return false;
        }
    }

    public function simpan_daftar()
    {
        if (!$this->validate([
            'nama' => [
                'label' => 'Full Name',
                'rules' => 'required|min_length[3]',
            ],
            'username' => [
                'label' => 'Username',
                'rules' => 'required|is_unique[tb_user.username]',
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|is_unique[tb_user.email]|valid_email',
                'errors' => [
                    'is_unique' => 'Email is already in use.',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
            ],
            'upassword' => [
                'label' => 'Password',
                'rules' => 'required|matches[password]',
            ],
            'setuju' => [
                'label' => 'Agreement',
                'rules' => 'required',
            ],

        ])) {

            return redirect()->to('/daftar')->withInput();
        }

        $nama = htmlspecialchars(ucwords($this->request->getVar('nama')));
        $username = $this->request->getVar('username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = $this->request->getVar('email');
        $token = md5(str_shuffle('abcsefghijklmonpqrtuvwxyz' . time()));

        $this->Muser->save([
            'nama' => $nama,
            'username' => $username,
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'email' => $email,
            'level' => '1',
            'tokenreset' => $token
        ]);


        // $data = $this->Muser->getUser($username)->getResult();


        // foreach ($data as $r) {
        //     $this->Mdata->insert([
        //         'id_user' => $r->id,
        //         'nama' => $r->nama,
        //     ]);
        // }



        $this->session->setFlashdata('pesan', 'Congrats, Registration success.');
        return redirect()->to('/login');
    }

    public function cek_login()
    {
        if (!$this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
            ]
        ])) {

            return redirect()->to('/login')->withInput();
        }
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $this->Muser->where('username', $username)->first();

        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'                => $data['id'],
                    'level'             => $data['level'],
                    'username'          => $data['username'],
                    'nama'              => $data['nama'],
                    'email'             => $data['email'],
                    'aktif'             => $data['aktif'],
                    'tokenreset'        => $data['tokenreset'],
                    'logged_in'         => TRUE
                ];
                $this->session->set($ses_data);
                switch (session()->get('level')) {
                    case '9':
                        return redirect()->to('/super');
                        break;
                    case '1':
                        return redirect()->to('/pilihan');
                        break;
                    case '2':
                        return redirect()->to('/client');
                        break;
                }
            } else {
                session()->setFlashdata('pesan', 'Wrong Username & Password');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('pesan', 'You are not registered');
            return redirect()->back();
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
