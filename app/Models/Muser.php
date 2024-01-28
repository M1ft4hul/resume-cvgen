<?php

namespace App\Models;

use CodeIgniter\Model;

class Muser extends Model
{
    protected $table            = 'tb_user';
    protected $allowedFields    = ['id_deckengine', 'id_cruiseship', 'id_lebenslauf', 'id_publickuse', 'nama', 'email', 'username', 'password', 'level', 'tokenreset', 'aktif', 'updated_at'];
    protected $useTimestamps = true;

    public function profil_user($id)
    {
        return $this->db->table('tb_user as a')
            ->join('tb_data as b', 'b.id_user=a.id')
            ->where('a.id', $id)
            ->get();
    }
    public function semua_user()
    {
        return $this->db->table('tb_user as a')
            ->join('tb_data as b', 'b.id_user=a.id')
            ->where(['a.aktif' => '0', 'a.level' => '1'])
            ->get();
    }
    public function pendidikan_user($id)
    {
        return $this->db->table('tb_user as a')
            ->join('tb_education as b', 'b.id_user=a.id')
            ->where('a.id', $id)
            ->get();
    }
    public function pengalaman_user($id)
    {
        return $this->db->table('tb_user as a')
            ->join('tb_pengalaman as b', 'b.id_user=a.id')
            ->where('a.id', $id)
            ->get();
    }
    public function bahasa_user($id)
    {
        return $this->db->table('tb_user as a')
            ->join('tb_bahasa as b', 'b.id_user=a.id')
            ->where('a.id', $id)
            ->get();
    }
    public function keahlian_user($id)
    {
        return $this->db->table('tb_user as a')
            ->join('tb_keahlianlain as b', 'b.id_user=a.id')
            ->where('a.id', $id)
            ->get();
    }

    // untuk cv jenis khusus
    public function doctravel_user($id)
    {
        return $this->db->table('tb_user as a')
            ->join('tb_doctravel as b', 'b.id_user=a.id')
            ->where('a.id', $id)
            ->get();
    }
    public function sertifikat_user($id)
    {
        return $this->db->table('tb_user as a')
            ->join('tb_sertifikat as b', 'b.id_user=a.id')
            ->where('a.id', $id)
            ->get();
    }
    public function searecord_user($id)
    {
        return $this->db->table('tb_user as a')
            ->join('tb_searecord as b', 'b.id_user=a.id')
            ->where('a.id', $id)
            ->get();
    }


    public function kandidat()
    {
        return $this->db->table('tb_user as a')
            ->where('aktif', '0')
            ->countAllResults();
    }
    public function cvp()
    {
        return $this->db->table('tb_user')
            ->where('id_deckengine', 'deckengine')
            ->countAllResults();
    }
    public function cvg()
    {
        return $this->db->table('tb_user')
            ->where('id_cruiseship', 'cruiseship')
            ->countAllResults();
    }
    public function cvgshb()
    {
        return $this->db->table('tb_user')
            ->where('id_lebenslauf', 'lebenslauf')
            ->countAllResults();
    }
    public function cvdsip()
    {
        return $this->db->table('tb_user')
            ->where('id_publickuse', 'publickuse')
            ->countAllResults();
    }
    public function tampil_preview_cvp()
    {
        return $this->db->table('tb_data as b')
            ->join('tb_user as a', 'a.id=b.id_user')
            ->where(['a.aktif' => '0', 'b.tempat_lahir !=' => ""])
            ->get();
    }

    public function perifikasiemail($email)
    {
        $cek = $this->db->table('tb_user')
            ->select('id,tokenreset,username,nama')
            ->where('email', $email)
            ->get();

        if (count($cek->getResultArray()) == 1) {
            return $cek->getRowArray();
        } else {
            return false;
        }
    }

    public function updatetoken($tokenreset)
    {
        $this->db->table('tb_user')
            ->where('tokenreset', $tokenreset)
            ->update(['updated_at' => date('Y-m-d h:i:s')]);

        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function verifyToken($token)
    {
        $builder = $this->db->table('tb_user');
        $builder->select("id,username,tokenreset,updated_at");
        $builder->where('tokenreset', $token);
        $result = $builder->get();
        if (count($result->getResultArray()) == 1) {
            return $result->getRowArray();
        } else {
            return false;
        }
    }

    public function updatePassword($token, $pwd)
    {
        $builder = $this->db->table('tb_user');
        $builder->where('tokenreset', $token);
        $builder->update(['password' => $pwd]);
        if ($this->db->affectedRows() == 1) {
            return true;
        } else {
            return false;
        }
    }
}
