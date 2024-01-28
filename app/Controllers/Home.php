<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    
    public function privacy()
    {
        return view('privacy');
    }

    public function imprint()
    {
        return view('imprint');
    }

    public function pilihan()
    {
        $biodata['biodata'] = $this->Muser->find(session()->get('id'));
        return view('kandidat/index', $biodata);
    }

    public function cv_generator()
    {
        return view('cv_generator');
    }
    // PROFIL
    public function profil()
    {

        $cekdata = $this->Mdata->where('id_user', session()->get('id'))->first();

        if (!$cekdata) {
            $this->Mdata->insert([
                'id_user' => session()->get('id'),
            ]);
        }


        $biodata = $this->Muser->profil_user(session()->get('id'))->getRow();
        $pendidikan = $this->Muser->pendidikan_user(session()->get('id'))->getRow();
        $pengalaman = $this->Muser->pengalaman_user(session()->get('id'))->getRow();
        $bahasa = $this->Muser->bahasa_user(session()->get('id'))->getRow();
        $keahlian = $this->Muser->keahlian_user(session()->get('id'))->getRow();

        $doctravel = $this->Muser->doctravel_user(session()->get('id'))->getRow();
        $sertifikat = $this->Muser->sertifikat_user(session()->get('id'))->getRow();
        $searecord = $this->Muser->searecord_user(session()->get('id'))->getRow();

        $data = [
            'validation' => $this->validation,
            'biodata' => $biodata,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'bahasa' => $bahasa,
            'keahlian' => $keahlian,
            'doctravel' => $doctravel,
            'sertifikat' => $sertifikat,
            'searecord' => $searecord,

        ];
        return view('kandidat/profil', $data);
    }
    public function edit_profil()
    {
        $biodata = $this->Muser->profil_user(session()->get('id'))->getRow();
        $negara = $this->Mnegara->findAll();
        $data = [
            'biodata' => $biodata,
            'validation' => $this->validation,
            'negara' => $negara,
        ];
        return view('kandidat/edit_profil', $data);
    }
    public function simpan_profil($id)
    {
        if (!$this->validate([
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
            ],
            'nama' => [
                'label' => 'Name',
                'rules' => 'required',

            ],
            'tempatlahir' => [
                'label' => 'Place of Birth',
                'rules' => 'required',

            ],
            'tgllahir' => [
                'label' => 'date of Birth',
                'rules' => 'required',
            ],
            'alamat' => [
                'label' => 'Address',
                'rules' => 'required',
            ],
            'hp' => [
                'label' => 'Phone Number',
                'rules' => 'required',
            ],
            'wa' => [
                'label' => 'Whatsapp Number',
                'rules' => 'required',
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
            ],
            'npwp' => [
                'label' => 'Tax ID',
                'rules' => 'required',
            ],
            'bandara' => [
                'label' => 'Nearest Airport',
                'rules' => 'required',
            ],
            'berat' => [
                'label' => 'Weight',
                'rules' => 'required',
            ],
            'tinggi' => [
                'label' => 'Height',
                'rules' => 'required',
            ],
            'baju' => [
                'label' => 'Coverall size',
                'rules' => 'required',
            ],
            'sepatu' => [
                'label' => 'Shoe size',
                'rules' => 'required',
            ],
            'negara' => [
                'label' => 'Nationality',
                'rules' => 'required',
            ],
            'jk' => [
                'label' => 'Gender',
                'rules' => 'required',
            ],

        ])) {

            return redirect()->to('/edit_profil')->withInput();
        }


        $cari_wa = $this->Mdata->where(['id_user !=' => $id, 'wa' => $this->request->getVar('wa')])->find();
        $cari_telp = $this->Mdata->where(['id_user !=' => $id, 'telepon' => $this->request->getVar('hp')])->find();
        $cari_email = $this->Muser->where(['id !=' => $id, 'email' => $this->request->getVar('email')])->find();
        if ($cari_wa) {
            $this->session->setFlashdata('pesan', 'The Whatsapp number is already in use, please change it.');
            return redirect()->to('/edit_profil');
        }
        if ($cari_telp) {
            $this->session->setFlashdata('pesan', 'The phone number is already in use, please change it');
            return redirect()->to('/edit_profil');
        }
        if ($cari_email) {
            $this->session->setFlashdata('pesan', 'The Email is already in use, please change it');
            return redirect()->to('/edit_profil');
        }


        $id_data = $this->Mdata->where('id_user', $id)->first();


        $this->Mdata->save([
            'id' => $id_data['id'],
            'tempat_lahir' => ucwords(htmlspecialchars($this->request->getvar('tempatlahir'))),
            'tgl_lahir' => $this->request->getvar('tgllahir'),
            'jk' => $this->request->getvar('jk'),
            'alamat' => ucwords($this->request->getvar('alamat')),
            'telepon' => $this->request->getvar('hp'),
            'wa' => $this->request->getvar('wa'),
            'menikah' => $this->request->getvar('menikah'),
            'npwp' => htmlspecialchars($this->request->getvar('npwp')),
            'bandara' => ucwords(htmlspecialchars($this->request->getvar('bandara'))),
            'berat' => $this->request->getvar('berat'),
            'tinggi' => $this->request->getvar('tinggi'),
            'negara' => $this->request->getvar('negara'),
            'ukuran_pakaian' => $this->request->getvar('baju'),
            'ukuran_sepatu' => $this->request->getvar('sepatu'),
        ]);

        $this->Muser->save([
            'id' => $id,
            'nama' => ucwords(htmlspecialchars($this->request->getvar('nama'))),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'email' => $this->request->getvar('email', FILTER_SANITIZE_EMAIL),
        ]);

        $this->session->setFlashdata('pesan', 'Update Profil, success.');
        return redirect()->to('/profil');
    }
    public function simpan_photo()
    {
        $id = session()->get('id');
        $cek_pemilik = $this->Mdata->where('id_user', $id)->get()->getRow();
        $id_data = $this->Mdata->where('id_user', $id)->first();

        $data = $this->request->getVar('image');

        if ($cek_pemilik->photo != "images.jpg") {

            $image_array_1 = explode(";", $data);
            $image_array_2 = explode(",", $image_array_1[1]);

            $data = base64_decode($image_array_2[1]);

            $image_name = $id . '.jpg';
            $dir = 'photos/' . $image_name;

            file_put_contents($dir, $data);




            $this->Mdata->save([
                'id' => $id_data['id'],
                'photo' => $image_name,
            ]);
        } else {
            // $data = $_POST['image'];
            $image_array_1 = explode(";", $data);
            $image_array_2 = explode(",", $image_array_1[1]);

            $data = base64_decode($image_array_2[1]);

            $image_name = $id . '.jpg';
            $dir = 'photos/' . $image_name;

            file_put_contents($dir, $data);

            $this->Mdata->save([
                'id' => $id_data['id'],
                'photo' => $image_name,
            ]);
        }
    }

    // PENDIDIKAN
    public function add_pendidikan()
    {
        $pendidikan = $this->Mpendidikan->where('id_user', session()->get('id'))->get()->getResult();

        $data = [
            'validation' => $this->validation,
            'pendidikan' => $pendidikan,
        ];
        return view('kandidat/add_pendidikan', $data);
    }
    public function edit_pendidikan($id)
    {
        $pendidikan = $this->Mpendidikan->where('id', $id)->get()->getRow();

        $data = [
            'pendidikan' => $pendidikan,
            'validation' => $this->validation,
        ];
        return view('kandidat/edit_pendidikan', $data);
    }
    public function simpan_pendidikan()
    {
        if (!$this->validate([
            'nama_sekolah' => [
                'label' => 'Name of school',
                'rules' => 'required',
            ],
            'grade' => [
                'label' => 'Grade',
                'rules' => 'required',

            ],
            'fromyear' => [
                'label' => 'From (year)',
                'rules' => 'required',

            ],
            'toyear' => [
                'label' => 'To (year)',
                'rules' => 'required',
            ],

        ])) {

            return redirect()->to('/add_pendidikan')->withInput();
        }

        $this->Mpendidikan->insert([
            'id_user' => session()->get('id'),
            'nama_sekolah' => ucwords(htmlspecialchars($this->request->getvar('nama_sekolah'))),
            'jenjang' => $this->request->getvar('grade'),
            'tahun_masuk' => $this->request->getvar('fromyear'),
            'tahun_lulus' => $this->request->getvar('toyear'),
        ]);

        $this->session->setFlashdata('pesan', 'Insert Education, success.');
        return redirect()->to('/add_pendidikan');
    }
    public function simpanedit_pendidikan($id)
    {
        if (!$this->validate([
            'nama_sekolah' => [
                'label' => 'Name of school',
                'rules' => 'required',
            ],
            'grade' => [
                'label' => 'Grade',
                'rules' => 'required',

            ],
            'fromyear' => [
                'label' => 'From (year)',
                'rules' => 'required',

            ],
            'toyear' => [
                'label' => 'To (year)',
                'rules' => 'required',
            ],

        ])) {

            return redirect()->to('/edit_pendidikan/' . $id)->withInput();
        }

        $this->Mpendidikan->save([
            'id' => $id,
            'nama_sekolah' => ucwords(htmlspecialchars($this->request->getvar('nama_sekolah'))),
            'jenjang' => $this->request->getvar('grade'),
            'tahun_masuk' => $this->request->getvar('fromyear'),
            'tahun_lulus' => $this->request->getvar('toyear'),
        ]);

        $this->session->setFlashdata('pesan', 'Update Education, success.');
        return redirect()->to('/add_pendidikan');
    }
    public function hapus_pendidikan($id)
    {


        $this->Mpendidikan->delete([
            'id' => $id,
        ]);

        $this->session->setFlashdata('pesan', 'Delete Education, success.');
        return redirect()->to('/add_pendidikan');
    }

    // PENGALAMAN
    public function add_pengalaman()
    {
        $pengalaman = $this->Mpengalaman->where('id_user', session()->get('id'))->get()->getResult();

        $data = [
            'validation' => $this->validation,
            'pengalaman' => $pengalaman,
        ];
        return view('kandidat/add_pengalaman', $data);
    }
    public function edit_pengalaman($id)
    {
        $pengalaman = $this->Mpengalaman->where('id', $id)->get()->getRow();

        $data = [
            'pengalaman' => $pengalaman,
            'validation' => $this->validation,
        ];
        return view('kandidat/edit_pengalaman', $data);
    }
    public function simpan_pengalaman()
    {
        if (!$this->validate([
            'perusahaan' => [
                'label' => 'Company name',
                'rules' => 'required',
            ],
            'posisi' => [
                'label' => 'Position',
                'rules' => 'required',

            ],
            'fromyear' => [
                'label' => 'From (year)',
                'rules' => 'required',

            ],
            'toyear' => [
                'label' => 'To (year)',
                'rules' => 'required',
            ],

        ])) {

            return redirect()->to('/add_pengalaman')->withInput();
        }

        $this->Mpengalaman->insert([
            'id_user' => session()->get('id'),
            'perusahaan' => ucwords(htmlspecialchars($this->request->getvar('perusahaan'))),
            'posisi' => $this->request->getvar('posisi'),
            'tahun_masuk' => $this->request->getvar('fromyear'),
            'tahun_lulus' => $this->request->getvar('toyear'),
        ]);

        $this->session->setFlashdata('pesan', 'Insert Experience, success.');
        return redirect()->to('/add_pengalaman');
    }
    public function simpanedit_pengalaman($id)
    {
        if (!$this->validate([
            'perusahaan' => [
                'label' => 'Company name',
                'rules' => 'required',
            ],
            'posisi' => [
                'label' => 'Position',
                'rules' => 'required',

            ],
            'fromyear' => [
                'label' => 'From (year)',
                'rules' => 'required',

            ],
            'toyear' => [
                'label' => 'To (year)',
                'rules' => 'required',
            ],

        ])) {

            return redirect()->to('/edit_pengalaman/' . $id)->withInput();
        }

        $this->Mpengalaman->save([
            'id' => $id,
            'perusahaan' => ucwords(htmlspecialchars($this->request->getvar('perusahaan'))),
            'posisi' => $this->request->getvar('posisi'),
            'tahun_masuk' => $this->request->getvar('fromyear'),
            'tahun_lulus' => $this->request->getvar('toyear'),
        ]);

        $this->session->setFlashdata('pesan', 'Update Experience, success.');
        return redirect()->to('/add_pengalaman');
    }
    public function hapus_pengalaman($id)
    {


        $this->Mpengalaman->delete([
            'id' => $id,
        ]);

        $this->session->setFlashdata('pesan', 'Delete Experience, success.');
        return redirect()->to('/add_pengalaman');
    }

    // BAHASA
    public function add_bahasa()
    {
        $bahasa = $this->Mbahasa->where('id_user', session()->get('id'))->get()->getResult();
        $semuabahasa = $this->Msemuabahasa->findAll();

        $data = [
            'validation' => $this->validation,
            'bahasa' => $bahasa,
            'semuabahasa' => $semuabahasa,
        ];
        return view('kandidat/add_bahasa', $data);
    }
    public function edit_bahasa($id)
    {
        $bahasa = $this->Mbahasa->where('id', $id)->get()->getRow();

        $data = [
            'bahasa' => $bahasa,
            'validation' => $this->validation,
        ];
        return view('kandidat/edit_bahasa', $data);
    }
    public function simpan_bahasa()
    {
        if (!$this->validate([
            'bahasa' => [
                'label' => 'Language',
                'rules' => 'required',
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',

            ],
        ])) {

            return redirect()->to('/add_bahasa')->withInput();
        }

        $this->Mbahasa->insert([
            'id_user' => session()->get('id'),
            'bahasa' => $this->request->getvar('bahasa'),
            'level' => $this->request->getvar('level'),
        ]);

        $this->session->setFlashdata('pesan', 'Insert Language, success.');
        return redirect()->to('/add_bahasa');
    }
    public function simpanedit_bahasa($id)
    {
        if (!$this->validate([
            'bahasa' => [
                'label' => 'Language',
                'rules' => 'required',
            ],
            'level' => [
                'label' => 'Level',
                'rules' => 'required',

            ],
        ])) {

            return redirect()->to('/edit_bahasa/' . $id)->withInput();
        }

        $this->Mbahasa->save([
            'id' => $id,
            'bahasa' => $this->request->getvar('bahasa'),
            'level' => $this->request->getvar('level'),
        ]);

        $this->session->setFlashdata('pesan', 'Update Language, success.');
        return redirect()->to('/add_bahasa');
    }
    public function hapus_bahasa($id)
    {

        $this->Mbahasa->delete([
            'id' => $id,
        ]);

        $this->session->setFlashdata('pesan', 'Delete Language, success.');
        return redirect()->to('/add_bahasa');
    }

    // KEAHLIAN
    public function add_keahlian()
    {
        $keahlian = $this->Mkeahlian->where('id_user', session()->get('id'))->get()->getResult();

        $data = [
            'validation' => $this->validation,
            'keahlian' => $keahlian,
        ];
        return view('kandidat/add_keahlian', $data);
    }
    public function edit_keahlian($id)
    {
        $keahlian = $this->Mkeahlian->where('id', $id)->get()->getRow();

        $data = [
            'keahlian' => $keahlian,
            'validation' => $this->validation,
        ];
        return view('kandidat/edit_keahlian', $data);
    }
    public function simpan_keahlian()
    {
        if (!$this->validate([
            'keahlian' => [
                'label' => 'Qualification',
                'rules' => 'required',
            ],
        ])) {

            return redirect()->to('/add_keahlian')->withInput();
        }

        $this->Mkeahlian->insert([
            'id_user' => session()->get('id'),
            'keahlian' => $this->request->getvar('keahlian'),
        ]);

        $this->session->setFlashdata('pesan', 'Insert Qualification, success.');
        return redirect()->to('/add_keahlian');
    }
    public function simpanedit_keahlian($id)
    {
        if (!$this->validate([
            'keahlian' => [
                'label' => 'Qualification',
                'rules' => 'required',
            ],
        ])) {

            return redirect()->to('/edit_keahlian/' . $id)->withInput();
        }

        $this->Mkeahlian->save([
            'id' => $id,
            'keahlian' => $this->request->getvar('keahlian'),
        ]);

        $this->session->setFlashdata('pesan', 'Update Qualification, success.');
        return redirect()->to('/add_keahlian');
    }
    public function hapus_keahlian($id)
    {

        $this->Mkeahlian->delete([
            'id' => $id,
        ]);

        $this->session->setFlashdata('pesan', 'Delete Qualification, success.');
        return redirect()->to('/add_keahlian');
    }

    // DOKUMEN TRAVEL 
    public function add_doctravel()
    {
        $doctravel = $this->Mdoctravel->where('id_user', session()->get('id'))->get()->getResult();

        $data = [
            'validation' => $this->validation,
            'doctravel' => $doctravel,
        ];
        return view('kandidat/add_doctravel', $data);
    }
    public function edit_doctravel($id)
    {
        $doctravel = $this->Mdoctravel->where('id', $id)->get()->getRow();

        $data = [
            'doctravel' => $doctravel,
            'validation' => $this->validation,
        ];
        return view('kandidat/edit_doctravel', $data);
    }
    public function simpan_doctravel()
    {
        if (!$this->validate([
            'dok_nama' => [
                'label' => 'Doc. Name',
                'rules' => 'required',
            ],
            'dok_nomor' => [
                'label' => 'Doc. Number',
                'rules' => 'required',
            ],
            'dok_dibuat' => [
                'label' => 'Date of Issue',
                'rules' => 'required',
            ],
            'dok_akhir' => [
                'label' => 'Date of Expire',
                'rules' => 'required',
            ],
            'dok_kota' => [
                'label' => 'Place of Issue',
                'rules' => 'required',
            ],
        ])) {

            return redirect()->to('/add_doctravel')->withInput();
        }

        $this->Mdoctravel->insert([
            'id_user' => session()->get('id'),
            'nama_dokumen' => $this->request->getvar('dok_nama'),
            'nomor_dokumen' => $this->request->getvar('dok_nomor'),
            'tgl_terbit_dok' => $this->request->getvar('dok_dibuat'),
            'tgl_berakhir_dok' => $this->request->getvar('dok_akhir'),
            'dok_dikeluarkan_oleh' => $this->request->getvar('dok_kota'),
        ]);

        $this->session->setFlashdata('pesan', 'Insert Doc. Travel, success.');
        return redirect()->to('/add_doctravel');
    }
    public function simpanedit_doctravel($id)
    {
        if (!$this->validate([
            'dok_nama' => [
                'label' => 'Doc. Name',
                'rules' => 'required',
            ],
            'dok_nomor' => [
                'label' => 'Doc. Number',
                'rules' => 'required',
            ],
            'dok_dibuat' => [
                'label' => 'Date of Issue',
                'rules' => 'required',
            ],
            'dok_akhir' => [
                'label' => 'Date of Expire',
                'rules' => 'required',
            ],
            'dok_kota' => [
                'label' => 'Place of Issue',
                'rules' => 'required',
            ],
        ])) {

            return redirect()->to('/edit_doctravel/' . $id)->withInput();
        }

        $this->Mdoctravel->insert([
            'id' => $id,
            'nama_dokumen' => $this->request->getvar('dok_nama'),
            'nomor_dokumen' => $this->request->getvar('dok_nomor'),
            'tgl_terbit_dok' => $this->request->getvar('dok_dibuat'),
            'tgl_berakhir_dok' => $this->request->getvar('dok_akhir'),
            'dok_dikeluarkan_oleh' => $this->request->getvar('dok_kota'),
        ]);

        $this->session->setFlashdata('pesan', 'Update Doc. Travel, success.');
        return redirect()->to('/add_doctravel');
    }
    public function hapus_doctravel($id)
    {

        $this->Mdoctravel->delete([
            'id' => $id,
        ]);

        $this->session->setFlashdata('pesan', 'Delete Doc. Travel, success.');
        return redirect()->to('/add_doctravel');
    }

    // SERTIFIKAT 
    public function add_sertifikat()
    {
        $sertifikat = $this->Msertifikat->where('id_user', session()->get('id'))->get()->getResult();

        $data = [
            'validation' => $this->validation,
            'sertifikat' => $sertifikat,
        ];
        return view('kandidat/add_sertifikat', $data);
    }
    public function edit_sertifikat($id)
    {
        $sertifikat = $this->Msertifikat->where('id', $id)->get()->getRow();

        $data = [
            'sertifikat' => $sertifikat,
            'validation' => $this->validation,
        ];
        return view('kandidat/edit_sertifikat', $data);
    }
    public function simpan_sertifikat()
    {
        if (!$this->validate([
            'tipe_sertifikat' => [
                'label' => 'Certificate Type',
                'rules' => 'required',
            ],
            'no_sertifikat' => [
                'label' => 'Certificate No.',
                'rules' => 'required',
            ],
            'ser_dibuat' => [
                'label' => 'Date of Issue',
                'rules' => 'required',
            ],
            'ser_berakhir' => [
                'label' => 'Date of Expire',
                'rules' => 'required',
            ],
            'ser_negara' => [
                'label' => 'Place/Country',
                'rules' => 'required',
            ],
            'ser_status' => [
                'label' => 'Status',
                'rules' => 'required',
            ],
        ])) {

            return redirect()->to('/add_sertifikat')->withInput();
        }

        $this->Msertifikat->insert([
            'id_user' => session()->get('id'),
            'tipe_sertifikat' => $this->request->getvar('tipe_sertifikat'),
            'no_sertifikat' => $this->request->getvar('no_sertifikat'),
            'ser_dibuat' => $this->request->getvar('ser_dibuat'),
            'ser_berakhir' => $this->request->getvar('ser_berakhir'),
            'ser_negara' => $this->request->getvar('ser_negara'),
            'ser_status' => $this->request->getvar('ser_status'),
        ]);

        $this->session->setFlashdata('pesan', 'Insert Certificate, success.');
        return redirect()->to('/add_sertifikat');
    }
    public function simpanedit_sertifikat($id)
    {
        if (!$this->validate([
            'tipe_sertifikat' => [
                'label' => 'Certificate Type',
                'rules' => 'required',
            ],
            'no_sertifikat' => [
                'label' => 'Certificate No.',
                'rules' => 'required',
            ],
            'ser_dibuat' => [
                'label' => 'Date of Issue',
                'rules' => 'required',
            ],
            'ser_berakhir' => [
                'label' => 'Date of Expire',
                'rules' => 'required',
            ],
            'ser_negara' => [
                'label' => 'Place/Country',
                'rules' => 'required',
            ],
            'ser_status' => [
                'label' => 'Status',
                'rules' => 'required',
            ],
        ])) {

            return redirect()->to('/edit_sertifikat/' . $id)->withInput();
        }

        $this->Msertifikat->save([
            'id' => $id,
            'tipe_sertifikat' => $this->request->getvar('tipe_sertifikat'),
            'no_sertifikat' => $this->request->getvar('no_sertifikat'),
            'ser_dibuat' => $this->request->getvar('ser_dibuat'),
            'ser_berakhir' => $this->request->getvar('ser_berakhir'),
            'ser_negara' => $this->request->getvar('ser_negara'),
            'ser_status' => $this->request->getvar('ser_status'),
        ]);

        $this->session->setFlashdata('pesan', 'Update Certificate, success.');
        return redirect()->to('/add_sertifikat');
    }
    public function hapus_sertifikat($id)
    {

        $this->Msertifikat->delete([
            'id' => $id,
        ]);

        $this->session->setFlashdata('pesan', 'Delete Certificate, success.');
        return redirect()->to('/add_sertifikat');
    }

    // SEARECORD 
    public function add_searecord()
    {
        $searecord = $this->Msearecord->where('id_user', session()->get('id'))->get()->getResult();

        $data = [
            'validation' => $this->validation,
            'searecord' => $searecord,
        ];
        return view('kandidat/add_searecord', $data);
    }
    public function edit_searecord($id)
    {
        $searecord = $this->Msearecord->where('id', $id)->get()->getRow();

        $data = [
            'searecord' => $searecord,
            'validation' => $this->validation,
        ];
        return view('kandidat/edit_searecord', $data);
    }
    public function simpan_searecord()
    {
        if (!$this->validate([
            'nama_perusahaan' => [
                'label' => 'Company Name',
                'rules' => 'required',
            ],
            'nama_kapal' => [
                'label' => 'Vessel Name',
                'rules' => 'required',
            ],
            'status_kapal' => [
                'label' => 'Vessel Status',
                'rules' => 'required',
            ],
            'rank_kapal' => [
                'label' => 'Rank',
                'rules' => 'required',
            ],
            'kapal_masuk' => [
                'label' => 'Period Of Service (Sign On)',
                'rules' => 'required',
            ],
            'kapal_keluar' => [
                'label' => 'Period Of Service (Sign Off)',
                'rules' => 'required',
            ],
            'tipe_kapal' => [
                'label' => 'Vessel Type',
                'rules' => 'required',
            ],
            'gt_kapal' => [
                'label' => 'Vessel Spec (GT)',
                'rules' => 'required',
            ],
            'kw_kapal' => [
                'label' => 'essel Spec (KW/BHP)',
                'rules' => 'required',
            ],
        ])) {

            return redirect()->to('/add_searecord')->withInput();
        }

        $this->Msearecord->insert([
            'id_user' => session()->get('id'),
            'nama_perusahaan' => $this->request->getvar('nama_perusahaan'),
            'nama_kapal' => $this->request->getvar('nama_kapal'),
            'rank_kapal' => $this->request->getvar('rank_kapal'),
            'tipe_kapal' => $this->request->getvar('tipe_kapal'),
            'status_kapal' => $this->request->getvar('status_kapal'),
            'gt_kapal' => $this->request->getvar('gt_kapal'),
            'kw_kapal' => $this->request->getvar('kw_kapal'),
            'kapal_masuk' => $this->request->getvar('kapal_masuk'),
            'kapal_keluar' => $this->request->getvar('kapal_keluar'),
        ]);

        $this->session->setFlashdata('pesan', 'Insert Sea Services record, success.');
        return redirect()->to('/add_searecord');
    }
    public function simpanedit_searecord($id)
    {
        if (!$this->validate([
            'nama_perusahaan' => [
                'label' => 'Company Name',
                'rules' => 'required',
            ],
            'nama_kapal' => [
                'label' => 'Vessel Name',
                'rules' => 'required',
            ],
            'status_kapal' => [
                'label' => 'Vessel Status',
                'rules' => 'required',
            ],
            'rank_kapal' => [
                'label' => 'Rank',
                'rules' => 'required',
            ],
            'kapal_masuk' => [
                'label' => 'Period Of Service (Sign On)',
                'rules' => 'required',
            ],
            'kapal_keluar' => [
                'label' => 'Period Of Service (Sign Off)',
                'rules' => 'required',
            ],
            'tipe_kapal' => [
                'label' => 'Vessel Type',
                'rules' => 'required',
            ],
            'gt_kapal' => [
                'label' => 'Vessel Spec (GT)',
                'rules' => 'required',
            ],
            'kw_kapal' => [
                'label' => 'essel Spec (KW/BHP)',
                'rules' => 'required',
            ],
        ])) {
            return redirect()->to('/add_searecord')->withInput();
        }

        $this->Msearecord->save([
            'id' => $id,
            'nama_perusahaan' => $this->request->getvar('nama_perusahaan'),
            'nama_kapal' => $this->request->getvar('nama_kapal'),
            'rank_kapal' => $this->request->getvar('rank_kapal'),
            'tipe_kapal' => $this->request->getvar('tipe_kapal'),
            'status_kapal' => $this->request->getvar('status_kapal'),
            'gt_kapal' => $this->request->getvar('gt_kapal'),
            'kw_kapal' => $this->request->getvar('kw_kapal'),
            'kapal_masuk' => $this->request->getvar('kapal_masuk'),
            'kapal_keluar' => $this->request->getvar('kapal_keluar'),
        ]);

        $this->session->setFlashdata('pesan', 'Update Sea Services record, success.');
        return redirect()->to('/add_searecord');
    }
    public function hapus_searecord($id)
    {
        $this->Msearecord->delete([
            'id' => $id,
        ]);

        $this->session->setFlashdata('pesan', 'Delete Sea Services record, success.');
        return redirect()->to('/add_searecord');
    }

    // GFORM
    public function gform()
    {
        $lowongan = $this->Mlowongan->findall();
        $data = [
            'lowongan' => $lowongan
        ];
        return view('gform', $data);
    }
    public function gform_detail($id)
    {
        $lowongan = $this->Mlowongan->where('id', $id)->get()->getRow();
        $data = [
            'lowongan' => $lowongan
        ];
        return view('gform_detail', $data);
    }

    public function terms()
    {
        return view('terms');
    }
}
