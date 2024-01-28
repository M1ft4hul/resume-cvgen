<?php

namespace App\Controllers;


class Super extends BaseController
{

    public function index()
    {

        $jml = $this->Muser->kandidat();
        $cvp = $this->Muser->cvp();
        $cvg = $this->Muser->cvg();
        $cvgshb = $this->Muser->cvgshb();
        $cvdsip = $this->Muser->cvdsip();

        $kandidat = $this->Muser->semua_user()->getResult();
        $tampil_preview_cvp = $this->Muser->tampil_preview_cvp()->getRow();

        $data = [
            'validation' =>  \Config\Services::validation(),
            'jml' =>  $jml,
            'kandidat' =>  $kandidat,
            'tampil_preview_cvp' =>  $tampil_preview_cvp,
            'deckengine' =>  $cvp,
            'cruiseship' =>  $cvg,
            'lebenslauf' =>  $cvgshb,
            'publickuse' =>  $cvdsip,
        ];

        return view('super/index', $data);
    }
    public function lowongan()
    {

        $lowongan = $this->Mlowongan->orderBy('updated_at', 'desc')->findAll();

        $data = [
            // 'validation' =>  \Config\Services::validation(),
            'lowongan' =>  $lowongan,
        ];

        return view('super/lowongan', $data);
    }
    public function tambah_lowongan()
    {
        $negara = $this->Mnegara->findAll();
        $data = [
            'validation' =>  \Config\Services::validation(),
            'negara' =>  $negara,
        ];

        return view('super/tambah_lowongan', $data);
    }
    public function edit_lowongan($id)
    {
        $negara = $this->Mnegara->findAll();
        $lowongan = $this->Mlowongan->where('id', $id)->get()->getRow();
        $data = [
            'validation' =>  \Config\Services::validation(),
            'negara' =>  $negara,
            'lowongan' =>  $lowongan,
        ];

        return view('super/edit_lowongan', $data);
    }

    public function simpan_lowongan()
    {
        if (!$this->validate([
            'nama_lowongan' => [
                'rules' => 'required|min_length[5]|max_length[50]|alpha_numeric_space',
                'errors' => [
                    'required' => 'Nama Lowongan 5-50 Karakter tanpa simbol',
                    'min_length' => 'Nama Lowongan 5-50 Karakter tanpa simbol',
                    'max_length' => 'Nama Lowongan Maksimal 50 Karakter tanpa simbol',
                    'alpha_numeric_space' => 'Nama Lowongan 5-50 Karakter tanpa simbol',
                ]
            ],
            'perusahaan' => [
                'rules' => 'required|min_length[5]|max_length[50]',
                'errors' => [
                    'required' => 'Nama perusahaan 5-50 Karakter tanpa simbol',
                    'min_length' => 'Nama perusahaan 5-50 Karakter tanpa simbol',
                    'max_length' => 'Nama perusahaan Maksimal 50 Karakter tanpa simbol',
                    // 'alpha_numeric_space' => 'Nama perusahaan 5-50 Karakter tanpa simbol',
                ]
            ],
            'lowongan' => [
                'rules' => 'uploaded[lowongan]|max_size[lowongan,5000]|mime_in[lowongan,image/jpg,image/jpeg,image/png,image/webp]|ext_in[lowongan,png,jpg,jpeg,webp]',
                'errors' => [
                    'uploaded' => 'Banner Lowongan harus ada.',
                    'max_size' => 'Ukuran gambar terlalu besar (max: 5Mb)',
                    'mime_in' => 'Type gambar salah, harus (*.jpg, *.png, *.jpeg, *.webp)',
                ]
            ],
            'kuota' => [
                'rules' => 'required|numeric|min_length[2]|max_length[5]',
                'errors' => [
                    'required' => 'Kuota Karyawan harus angka 2-5 digit',
                    'min_length' => 'Kuota Karyawan harus angka 2-5 digit',
                    'max_length' => 'Kuota Karyawan harus angka 2-5 digit',
                    'numeric' => 'Kuota Karyawan harus angka 2-5 digit',
                ]
            ],
            'dibuka' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal dibuka penerimaan harus ada',
                ]
            ],
            'ditutup' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Berakhir penerimaan harus ada',
                ]
            ],
            'negara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Negara penerima wajib diisi',
                ]
            ],
            'waadmin' => [
                'rules' => 'required|numeric|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => 'WA Admin harus angka 10-13 digit',
                    'min_length' => 'WA Admin harus angka 10-13 digit',
                    'max_length' => 'WA Admin harus angka 10-13 digit',
                    'numeric' => 'WA Admin harus angka 10-13 digit',
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Lowongan wajib diisi',
                ]
            ],
        ])) {
            return redirect()->to(base_url('/tambah_lowongan'))->withInput();
        }

        $file = $this->request->getFile('lowongan');
        $nama_file = $file->getRandomName();
        $namalowongan = ucwords($this->request->getVar('nama_lowongan'));
        $perusahaan = ucwords($this->request->getVar('perusahaan'));
        $kuota = $this->request->getVar('kuota');
        $dibuka = $this->request->getVar('dibuka');
        $ditutup = $this->request->getVar('ditutup');
        $negara = ucwords($this->request->getVar('negara'));
        $waadmin = $this->request->getVar('waadmin');
        $deskripsi = ucwords($this->request->getVar('deskripsi'));

        if ($file->isValid() && !$file->hasMoved()) {
            $this->gambarku
                ->withFile($file)
                // ->resize(600, 450, true, 'height')
                // ->resize(400, 200, true, 'height')
                ->fit(400, 280, 'center')
                ->convert(IMAGETYPE_WEBP)
                ->save(FCPATH . 'lowongan/' . $nama_file);
            // }
            // banner_lowongan	nama_lowongan	deskripsi_lowongan	kuota_lowongan	negara_lowongan	perusahaan_lowongan	dibuka_lowongan	ditutup_lowongan	kontak_admin

            $this->Mlowongan->save([
                'nama_lowongan' => $namalowongan,
                'perusahaan_lowongan' => $perusahaan,
                'dibuka_lowongan' => $dibuka,
                'ditutup_lowongan' => $ditutup,
                'kontak_admin' => $waadmin,
                'negara_lowongan' => $negara,
                'kuota_lowongan' => $kuota,
                'banner_lowongan' => $nama_file,
                'deskripsi_lowongan' => $deskripsi,

            ]);
            return redirect()->to('/cari_lowongan');
        }
    }

    public function simpanedit_lowongan()
    {
        $id = $this->request->getVar('id_lowongan');
        $file = $this->request->getFile('lowongan');

        if (!$this->validate([
            'nama_lowongan' => [
                'rules' => 'required|min_length[5]|max_length[50]|alpha_numeric_space',
                'errors' => [
                    'required' => 'Nama Lowongan 5-50 Karakter tanpa simbol',
                    'min_length' => 'Nama Lowongan 5-50 Karakter tanpa simbol',
                    'max_length' => 'Nama Lowongan Maksimal 50 Karakter tanpa simbol',
                    'alpha_numeric_space' => 'Nama Lowongan 5-50 Karakter tanpa simbol',
                ]
            ],
            'perusahaan' => [
                'rules' => 'required|min_length[5]|max_length[50]',
                'errors' => [
                    'required' => 'Nama perusahaan 5-50 Karakter tanpa simbol',
                    'min_length' => 'Nama perusahaan 5-50 Karakter tanpa simbol',
                    'max_length' => 'Nama perusahaan Maksimal 50 Karakter tanpa simbol',
                    // 'alpha_numeric_space' => 'Nama perusahaan 5-50 Karakter tanpa simbol',
                ]
            ],

            'kuota' => [
                'rules' => 'required|numeric|min_length[2]|max_length[5]',
                'errors' => [
                    'required' => 'Kuota Karyawan harus angka 2-5 digit',
                    'min_length' => 'Kuota Karyawan harus angka 2-5 digit',
                    'max_length' => 'Kuota Karyawan harus angka 2-5 digit',
                    'numeric' => 'Kuota Karyawan harus angka 2-5 digit',
                ]
            ],
            'dibuka' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal dibuka penerimaan harus ada',
                ]
            ],
            'ditutup' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Berakhir penerimaan harus ada',
                ]
            ],
            'negara' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Negara penerima wajib diisi',
                ]
            ],
            'waadmin' => [
                'rules' => 'required|numeric|min_length[10]|max_length[13]',
                'errors' => [
                    'required' => 'WA Admin harus angka 10-13 digit',
                    'min_length' => 'WA Admin harus angka 10-13 digit',
                    'max_length' => 'WA Admin harus angka 10-13 digit',
                    'numeric' => 'WA Admin harus angka 10-13 digit',
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi Lowongan wajib diisi',
                ]
            ],
        ])) {
            return redirect()->to(base_url('/edit_lowongan/' . $id))->withInput();
        }

        $namalowongan = ucwords($this->request->getVar('nama_lowongan'));
        $perusahaan = ucwords($this->request->getVar('perusahaan'));
        $kuota = $this->request->getVar('kuota');
        $dibuka = $this->request->getVar('dibuka');
        $ditutup = $this->request->getVar('ditutup');
        $negara = ucwords($this->request->getVar('negara'));
        $waadmin = $this->request->getVar('waadmin');
        $deskripsi = ucwords($this->request->getVar('deskripsi'));
        // dd($this->request->getVar());
        $data = $this->Mlowongan->select('id,banner_lowongan')->where('id', $id)->get()->getRow();

        if (!$file == "") {

            $nama_file = $file->getRandomName();
            if ($file->isValid() && !$file->hasMoved()) {
                unlink('lowongan/' . $data->banner_lowongan);

                $this->gambarku
                    ->withFile($file)
                    // ->resize(600, 450, true, 'height')
                    // ->resize(400, 200, true, 'height')
                    ->fit(400, 280, 'center')
                    ->convert(IMAGETYPE_WEBP)
                    ->save(FCPATH . 'lowongan/' . $nama_file);

                $this->Mlowongan->save([
                    'id' => $id,
                    'nama_lowongan' => $namalowongan,
                    'perusahaan_lowongan' => $perusahaan,
                    'dibuka_lowongan' => $dibuka,
                    'ditutup_lowongan' => $ditutup,
                    'kontak_admin' => $waadmin,
                    'negara_lowongan' => $negara,
                    'kuota_lowongan' => $kuota,
                    'banner_lowongan' => $nama_file,
                    'deskripsi_lowongan' => $deskripsi,

                ]);
            } else {
                $this->Mlowongan->save([
                    'id' => $id,
                    'nama_lowongan' => $namalowongan,
                    'perusahaan_lowongan' => $perusahaan,
                    'dibuka_lowongan' => $dibuka,
                    'ditutup_lowongan' => $ditutup,
                    'kontak_admin' => $waadmin,
                    'negara_lowongan' => $negara,
                    'kuota_lowongan' => $kuota,
                    'deskripsi_lowongan' => $deskripsi,
                ]);
            }

            return redirect()->to('/cari_lowongan');
        }
    }
    public function hapus_lowongan($id)
    {

        $data = $this->Mlowongan->select('id,banner_lowongan')->where('id', $id)->get()->getRow();

        unlink('lowongan/' . $data->banner_lowongan);

        $this->Mlowongan->where('id', $data->id)->delete();

        return redirect()->to('/cari_lowongan');
    }
    public function profil_super()
    {
        $data = [
            'validation' =>  \Config\Services::validation(),
        ];
        return view('super/profil_admin', $data);
    }
    public function simpan_super()
    {
        if (!$this->validate([
            'password' => [
                'rules' => 'required|min_length[6]',
                'errors' => [
                    'required' => 'Password tidak boleh kosong',
                    'min_length' => 'Password minimal 6 karakter',
                ]
            ],

        ])) {
            return redirect()->to(base_url('/profil_super'))->withInput();
        }

        $username = $this->request->getFile('username');
        $data = $this->Muser->where(['username' => $username, 'id' => session()->get('id')])->get()->getRow();

        if (!$data) {
            session()->destroy();
            return redirect()->to('/');
        }

        $this->Muser->save([
            'id' => session()->get('id'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),

        ]);
        return redirect()->to('super');
    }
}
