<?php

namespace App\Models\Sidesa;

use CodeIgniter\Model;

class User_kabupaten5a_model extends Model
{
    protected $table = 'danadesa_anggaran';
    protected $primaryKey = 'id';
    protected $AllowedFields = ['danadesa', 'bantuan_per_kpm', 'tahun', 'created'];

    public function danadesa_anggaran($sessionKdwil)
    {
        $builder = $this->db->table('danadesa_anggaran');
        $builder->select('kabupaten, danadesa, bantuan_per_kpm, created');
        $builder->where('tahun', date('Y'));
        $builder->where('kd_wilayah', $sessionKdwil);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function salur_reguler($sessionKdwil)
    {
        $builder = $this->db->table('danadesa_reguler');
        $builder->select('kabupaten, persentase, salur_januari, salur_februari, salur_maret, salur_april, salur_mei, salur_juni, salur_juli, salur_agustus, salur_september, salur_oktober, salur_november, salur_desember, tahun, created, salur_created');
        $builder->where('tahun', date('Y'));
        $builder->where('kd_wilayah', $sessionKdwil);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function salur_bltdd($sessionKdwil)
    {
        $builder = $this->db->table('danadesa_bltdd');
        $builder->select('kabupaten, persentase, salur_januari, salur_februari, salur_maret, salur_april, salur_mei, salur_juni, salur_juli, salur_agustus, salur_september, salur_oktober, salur_november, salur_desember, tahun, created, salur_created');
        $builder->where('tahun', date('Y'));
        $builder->where('kd_wilayah', $sessionKdwil);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function salur_kph($sessionKdwil)
    {
        $builder = $this->db->table('danadesa_kph');
        $builder->select('kabupaten, persentase, salur_januari, salur_februari, salur_maret, salur_april, salur_mei, salur_juni, salur_juli, salur_agustus, salur_september, salur_oktober, salur_november, salur_desember, tahun, created, salur_created');
        $builder->where('tahun', date('Y'));
        $builder->where('kd_wilayah', $sessionKdwil);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function salur_covid($sessionKdwil)
    {
        $builder = $this->db->table('danadesa_covid');
        $builder->select('kabupaten, persentase, salur_januari, salur_februari, salur_maret, salur_april, salur_mei, salur_juni, salur_juli, salur_agustus, salur_september, salur_oktober, salur_november, salur_desember, tahun, created, salur_created');
        $builder->where('tahun', date('Y'));
        $builder->where('kd_wilayah', $sessionKdwil);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function danadesa_reguler($sessionKdwil)
    {
        $builder = $this->db->table('danadesa_reguler');
        $builder->select('kabupaten, persentase, januari, februari, maret, april, mei, juni, juli, agustus, september, oktober, november, desember, tahun, created');
        $builder->where('tahun', date('Y'));
        $builder->where('kd_wilayah', $sessionKdwil);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function danadesa_bltdd($sessionKdwil)
    {
        $builder = $this->db->table('danadesa_bltdd');
        $builder->select('kabupaten, persentase, januari, februari, maret, april, mei, juni, juli, agustus, september, oktober, november, desember, tahun, created');
        $builder->where('tahun', date('Y'));
        $builder->where('kd_wilayah', $sessionKdwil);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function danadesa_kph($sessionKdwil)
    {
        $builder = $this->db->table('danadesa_kph');
        $builder->select('kabupaten, persentase, januari, februari, maret, april, mei, juni, juli, agustus, september, oktober, november, desember, tahun, created');
        $builder->where('tahun', date('Y'));
        $builder->where('kd_wilayah', $sessionKdwil);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function danadesa_covid($sessionKdwil)
    {
        $builder = $this->db->table('danadesa_covid');
        $builder->select('kabupaten, persentase, januari, februari, maret, april, mei, juni, juli, agustus, september, oktober, november, desember, tahun, created');
        $builder->where('tahun', date('Y'));
        $builder->where('kd_wilayah', $sessionKdwil);
        $query = $builder->get();
        return $query->getRowArray();
    }

    public function getMyprofile($sessionEmail)
    {
        $builder = $this->db->table('sidesa_user');
        $builder->select('nama, nip, email, hp, nm_desa, tanggal');
        $builder->join('wilayah_33', 'sidesa_user.kd_wilayah=wilayah_33.id_desa', 'left');
        $builder->where('email', $sessionEmail);
        $query = $builder->get();
        return $query->getResult();
    }

    public function editProfile($user_id, $input, $file)
    {
        $builder = $this->db->table('sidesa_user');
        $nama = $input['nama'];
        $hp = $input['hp'];

        if ($file->getError() == 4) {
            $nmfile = $input['imagelama'];
        } else {
            $nmfile = $file->getRandomName();
            $file->move('img/user/profile/', $nmfile);
            if ($input['imagelama'] != 'default.jpg') {
                unlink('img/user/profile/' . $input['imagelama']);
            }
        }
        $builder->set('image', $nmfile);
        $builder->set('nama', $nama);
        $builder->set('hp', $hp);
        $builder->where('user_id', $user_id);
        $builder->update();
    }
}
