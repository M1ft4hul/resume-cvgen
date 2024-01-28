<?php

namespace App\Controllers;

class Lebenslauf extends BaseController
{
    public function index()
    {
        $id = session()->get('id');
        // ====cek
        $biodata        = $this->Mdata->where('id_user', $id)->first();
        $keahlian       = $this->Mkeahlian->where('id_user', $id)->first();
        $pengalaman     = $this->Mpengalaman->where('id_user', $id)->first();
        $bahasa         = $this->Mbahasa->where('id_user', $id)->first();
        $pendidikan     = $this->Mpendidikan->where('id_user', $id)->first();
        // ====CEK


        // WAJIB
        if (!$biodata) {
            $this->Mdata->insert([
                'id_user' => $id,
            ]);
            $this->session->setFlashdata('pesan', 'Please update your Profile Photo.');
            return redirect()->to('/profil');
        }

        if ($biodata['photo'] == "images.jpg") {
            $this->session->setFlashdata('pesan', 'Please update your Profile Photo.');
            return redirect()->to('/profil');
        }
        if ($biodata['tempat_lahir'] == "" || !$keahlian || !$pengalaman || !$bahasa || !$pendidikan) {
            $this->session->setFlashdata('pesan', 'Please update your Personal data for common CV.');
            return redirect()->to('/profil');
        }
        $this->Muser->save([
            'id' => $id,
            'id_deckengine' => 'deckengine'
        ]);
        return view('/lebenslauf/index');
    }
    public function pdf_view_lebenslauf()
    {
        $biodata = $this->Muser->profil_user(session()->get('id'))->getRow();
        $keahlian = $this->Muser->keahlian_user(session()->get('id'))->getRow();
        $pengalaman = $this->Muser->pengalaman_user(session()->get('id'))->getResult();
        $bahasa = $this->Muser->bahasa_user(session()->get('id'))->getResult();
        $pendidikan = $this->Mpendidikan->where('id_user', session()->get('id'))->get()->getResult();
        $data = [
            'biodata' => $biodata,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'bahasa' => $bahasa,
            'keahlian' => $keahlian,
        ];
        return view('/lebenslauf/pdf_view', $data);
    }
    public function pdf_print_lebenslauf()
    {
        $biodata = $this->Muser->profil_user(session()->get('id'))->getRow();
        $keahlian = $this->Muser->keahlian_user(session()->get('id'))->getRow();
        $pengalaman = $this->Muser->pengalaman_user(session()->get('id'))->getResult();
        $bahasa = $this->Muser->bahasa_user(session()->get('id'))->getResult();
        $pendidikan = $this->Mpendidikan->where('id_user', session()->get('id'))->get()->getResult();
        $data = [
            'biodata' => $biodata,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'bahasa' => $bahasa,
            'keahlian' => $keahlian,
        ];
        return view('/lebenslauf/pdf_print', $data);
    }
}
