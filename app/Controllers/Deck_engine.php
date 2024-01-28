<?php

namespace App\Controllers;

class Deck_engine extends BaseController
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
        $doc_travel     = $this->Mdoctravel->where('id_user', $id)->first();
        $sertifikat     = $this->Msertifikat->where('id_user', $id)->first();
        $searecord      = $this->Msearecord->where('id_user', $id)->first();
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
        

        // TAMBAHAN
        if (!$doc_travel) {
            $this->session->setFlashdata('pesan', 'This type of CV requires Travel Documents, please fill it out.');
            return redirect()->to('/add_doctravel');
        }
        if (!$sertifikat) {
            $this->session->setFlashdata('pesan', 'This type of CV requires DETAILS of STCW, COC & COP, please fill it out.');
            return redirect()->to('/add_sertifikat');
        }
        if (!$searecord) {
            $this->session->setFlashdata('pesan', 'This type of CV requires Sea Services Record, please fill it out.');
            return redirect()->to('/add_searecord');
        }

        $this->Muser->save([
            'id' => $id,
            'id_deckengine' => 'deckengine'
        ]);

        return view('/deck_engine/index');
    }
    public function pdf_view_deckengine()
    {
        $biodata = $this->Muser->profil_user(session()->get('id'))->getRow();
        $keahlian = $this->Muser->keahlian_user(session()->get('id'))->getRow();
        $pengalaman = $this->Muser->pengalaman_user(session()->get('id'))->getResult();
        $bahasa = $this->Muser->bahasa_user(session()->get('id'))->getRow();

        $pendidikan = $this->Mpendidikan->where('id_user', session()->get('id'))->get()->getResult();
        $doc_travel = $this->Mdoctravel->where('id_user', session()->get('id'))->get()->getResult();
        $sertifikat = $this->Msertifikat->where('id_user', session()->get('id'))->get()->getResult();
        $searecord = $this->Msearecord->where('id_user', session()->get('id'))->get()->getResult();
        $data = [
            'biodata' => $biodata,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'bahasa' => $bahasa,
            'keahlian' => $keahlian,
            'doc_travel' => $doc_travel,
            'sertifikat' => $sertifikat,
            'searecord' => $searecord,
        ];
        return view('/deck_engine/pdf_view', $data);
    }
    public function pdf_print_deckengine()
    {
        $biodata = $this->Muser->profil_user(session()->get('id'))->getRow();
        $keahlian = $this->Muser->keahlian_user(session()->get('id'))->getRow();
        $pengalaman = $this->Muser->pengalaman_user(session()->get('id'))->getResult();
        $bahasa = $this->Muser->bahasa_user(session()->get('id'))->getRow();

        $pendidikan = $this->Mpendidikan->where('id_user', session()->get('id'))->get()->getResult();
        $doc_travel = $this->Mdoctravel->where('id_user', session()->get('id'))->get()->getResult();
        $sertifikat = $this->Msertifikat->where('id_user', session()->get('id'))->get()->getResult();
        $searecord = $this->Msearecord->where('id_user', session()->get('id'))->get()->getResult();
        $data = [
            'biodata' => $biodata,
            'pendidikan' => $pendidikan,
            'pengalaman' => $pengalaman,
            'bahasa' => $bahasa,
            'keahlian' => $keahlian,
            'doc_travel' => $doc_travel,
            'sertifikat' => $sertifikat,
            'searecord' => $searecord,
        ];
        return view('/deck_engine/pdf_print', $data);
    }
}
