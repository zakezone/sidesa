<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\Sidesa\User_menu5a_model;

class Menu5a extends BaseController
{
    protected $Menu5a_model;
    protected $validation;

    public function __construct()
    {
        $this->Menu5a_model = new User_menu5a_model();
        $this->validation = \Config\Services::validation();
        date_default_timezone_set('Asia/Jakarta');
    }

    public function salur_reguler()
    {
        $sessionKdwil = $this->session->get('kd_wilayah_sidesa');
        $kab = $this->Menu5a_model->danadesa_anggaran($sessionKdwil);
        if (isset($kab)) {
            $namakab = $kab['kabupaten'];
        } else {
            $namakab = '-';
        }

        $jml_salur = $this->Menu5a_model->salur_reguler($sessionKdwil);
        $januari = isset($jml_salur['salur_januari']) ? $jml_salur['salur_januari'] : 0;
        $februari = isset($jml_salur['salur_februari']) ? $jml_salur['salur_februari'] : 0;
        $maret = isset($jml_salur['salur_maret']) ? $jml_salur['salur_maret'] : 0;
        $april = isset($jml_salur['salur_april']) ? $jml_salur['salur_april'] : 0;
        $mei = isset($jml_salur['salur_mei']) ? $jml_salur['salur_mei'] : 0;
        $juni = isset($jml_salur['salur_juni']) ? $jml_salur['salur_juni'] : 0;
        $juli = isset($jml_salur['salur_juli']) ? $jml_salur['salur_juli'] : 0;
        $agustus = isset($jml_salur['salur_agustus']) ? $jml_salur['salur_agustus'] : 0;
        $september = isset($jml_salur['salur_september']) ? $jml_salur['salur_september'] : 0;
        $oktober = isset($jml_salur['salur_oktober']) ? $jml_salur['salur_oktober'] : 0;
        $november = isset($jml_salur['salur_november']) ? $jml_salur['salur_november'] : 0;
        $desember = isset($jml_salur['salur_desember']) ? $jml_salur['salur_desember'] : 0;
        $jumlah_salur = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $data = [
            'title' => 'Salur Reguler',
            'page_title' => view('sidesa/layout/user/content-page-title', ['title' => 'Salur Reguler ' . $namakab . ' ' . date("Y"), 'li_1' => 'Menu5a', 'li_2' => 'Salur']),
            'user' => $this->db->table('sidesa_user')->getWhere(['email' => $this->session->get('email_sidesa')])->getRowArray(),
            'danadesa' => $this->Menu5a_model->danadesa_anggaran($sessionKdwil),
            'salur_reguler' => $this->Menu5a_model->salur_reguler($sessionKdwil),
            'jumlah_salur' => $jumlah_salur,
            // 'validation' =>  $this->validation
        ];

        if (isset($_POST['update'])) {
            $input = $this->request->getVar();
            $this->Menu5a_model->updateaksesSalurReguler($input, $sessionKdwil);
            $flash = '<div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert"><i class="mdi mdi-check-all label-icon"></i>Data <b>salur</b> berhasil diperbaharui<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            $this->session->setFlashdata('message', $flash);
            return redirect()->to('user/menu5a/salur_reguler');
        }

        return view('sidesa/user/menu5a/salur_reguler', $data);
    }

    public function salur_bltdd()
    {
        $sessionKdwil = $this->session->get('kd_wilayah_sidesa');
        $kab = $this->Menu5a_model->danadesa_anggaran($sessionKdwil);
        if (isset($kab)) {
            $namakab = $kab['kabupaten'];
        } else {
            $namakab = '-';
        }

        $jml_salur = $this->Menu5a_model->salur_bltdd($sessionKdwil);
        $januari = isset($jml_salur['salur_januari']) ? $jml_salur['salur_januari'] : 0;
        $februari = isset($jml_salur['salur_februari']) ? $jml_salur['salur_februari'] : 0;
        $maret = isset($jml_salur['salur_maret']) ? $jml_salur['salur_maret'] : 0;
        $april = isset($jml_salur['salur_april']) ? $jml_salur['salur_april'] : 0;
        $mei = isset($jml_salur['salur_mei']) ? $jml_salur['salur_mei'] : 0;
        $juni = isset($jml_salur['salur_juni']) ? $jml_salur['salur_juni'] : 0;
        $juli = isset($jml_salur['salur_juli']) ? $jml_salur['salur_juli'] : 0;
        $agustus = isset($jml_salur['salur_agustus']) ? $jml_salur['salur_agustus'] : 0;
        $september = isset($jml_salur['salur_september']) ? $jml_salur['salur_september'] : 0;
        $oktober = isset($jml_salur['salur_oktober']) ? $jml_salur['salur_oktober'] : 0;
        $november = isset($jml_salur['salur_november']) ? $jml_salur['salur_november'] : 0;
        $desember = isset($jml_salur['salur_desember']) ? $jml_salur['salur_desember'] : 0;
        $jumlah_salur = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $data = [
            'title' => 'Salur BLTDD',
            'page_title' => view('sidesa/layout/user/content-page-title', ['title' => 'Salur BLTDD ' . $namakab . ' ' . date("Y"), 'li_1' => 'Menu5a', 'li_2' => 'Salur']),
            'user' => $this->db->table('sidesa_user')->getWhere(['email' => $this->session->get('email_sidesa')])->getRowArray(),
            'danadesa' => $this->Menu5a_model->danadesa_anggaran($sessionKdwil),
            'salur_bltdd' => $this->Menu5a_model->salur_bltdd($sessionKdwil),
            'jumlah_salur' => $jumlah_salur,
            // 'validation' =>  $this->validation
        ];

        if (isset($_POST['update'])) {
            $input = $this->request->getVar();
            $this->Menu5a_model->updateaksesSalurBLTDD($input, $sessionKdwil);
            $flash = '<div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert"><i class="mdi mdi-check-all label-icon"></i>Data <b>salur</b> berhasil diperbaharui<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            $this->session->setFlashdata('message', $flash);
            return redirect()->to('user/menu5a/salur_bltdd');
        }

        return view('sidesa/user/menu5a/salur_bltdd', $data);
    }

    public function salur_kph()
    {
        $sessionKdwil = $this->session->get('kd_wilayah_sidesa');
        $kab = $this->Menu5a_model->danadesa_anggaran($sessionKdwil);
        if (isset($kab)) {
            $namakab = $kab['kabupaten'];
        } else {
            $namakab = '-';
        }

        $jml_salur = $this->Menu5a_model->salur_kph($sessionKdwil);
        $januari = isset($jml_salur['salur_januari']) ? $jml_salur['salur_januari'] : 0;
        $februari = isset($jml_salur['salur_februari']) ? $jml_salur['salur_februari'] : 0;
        $maret = isset($jml_salur['salur_maret']) ? $jml_salur['salur_maret'] : 0;
        $april = isset($jml_salur['salur_april']) ? $jml_salur['salur_april'] : 0;
        $mei = isset($jml_salur['salur_mei']) ? $jml_salur['salur_mei'] : 0;
        $juni = isset($jml_salur['salur_juni']) ? $jml_salur['salur_juni'] : 0;
        $juli = isset($jml_salur['salur_juli']) ? $jml_salur['salur_juli'] : 0;
        $agustus = isset($jml_salur['salur_agustus']) ? $jml_salur['salur_agustus'] : 0;
        $september = isset($jml_salur['salur_september']) ? $jml_salur['salur_september'] : 0;
        $oktober = isset($jml_salur['salur_oktober']) ? $jml_salur['salur_oktober'] : 0;
        $november = isset($jml_salur['salur_november']) ? $jml_salur['salur_november'] : 0;
        $desember = isset($jml_salur['salur_desember']) ? $jml_salur['salur_desember'] : 0;
        $jumlah_salur = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $data = [
            'title' => 'Salur KPH',
            'page_title' => view('sidesa/layout/user/content-page-title', ['title' => 'Salur Ketahanan Pangan & Hewani ' . $namakab . ' ' . date("Y"), 'li_1' => 'Menu5a', 'li_2' => 'Salur']),
            'user' => $this->db->table('sidesa_user')->getWhere(['email' => $this->session->get('email_sidesa')])->getRowArray(),
            'danadesa' => $this->Menu5a_model->danadesa_anggaran($sessionKdwil),
            'salur_kph' => $this->Menu5a_model->salur_kph($sessionKdwil),
            'jumlah_salur' => $jumlah_salur,
            // 'validation' =>  $this->validation
        ];

        if (isset($_POST['update'])) {
            $input = $this->request->getVar();
            $this->Menu5a_model->updateaksesSalurKPH($input, $sessionKdwil);
            $flash = '<div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert"><i class="mdi mdi-check-all label-icon"></i>Data <b>salur</b> berhasil diperbaharui<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            $this->session->setFlashdata('message', $flash);
            return redirect()->to('user/menu5a/salur_kph');
        }

        return view('sidesa/user/menu5a/salur_kph', $data);
    }

    public function salur_covid()
    {
        $sessionKdwil = $this->session->get('kd_wilayah_sidesa');
        $kab = $this->Menu5a_model->danadesa_anggaran($sessionKdwil);
        if (isset($kab)) {
            $namakab = $kab['kabupaten'];
        } else {
            $namakab = '-';
        }

        $jml_salur = $this->Menu5a_model->salur_covid($sessionKdwil);
        $januari = isset($jml_salur['salur_januari']) ? $jml_salur['salur_januari'] : 0;
        $februari = isset($jml_salur['salur_februari']) ? $jml_salur['salur_februari'] : 0;
        $maret = isset($jml_salur['salur_maret']) ? $jml_salur['salur_maret'] : 0;
        $april = isset($jml_salur['salur_april']) ? $jml_salur['salur_april'] : 0;
        $mei = isset($jml_salur['salur_mei']) ? $jml_salur['salur_mei'] : 0;
        $juni = isset($jml_salur['salur_juni']) ? $jml_salur['salur_juni'] : 0;
        $juli = isset($jml_salur['salur_juli']) ? $jml_salur['salur_juli'] : 0;
        $agustus = isset($jml_salur['salur_agustus']) ? $jml_salur['salur_agustus'] : 0;
        $september = isset($jml_salur['salur_september']) ? $jml_salur['salur_september'] : 0;
        $oktober = isset($jml_salur['salur_oktober']) ? $jml_salur['salur_oktober'] : 0;
        $november = isset($jml_salur['salur_november']) ? $jml_salur['salur_november'] : 0;
        $desember = isset($jml_salur['salur_desember']) ? $jml_salur['salur_desember'] : 0;
        $jumlah_salur = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $data = [
            'title' => 'Salur Covid-19',
            'page_title' => view('sidesa/layout/user/content-page-title', ['title' => 'Salur Covid-19 ' . $namakab . ' ' . date("Y"), 'li_1' => 'Menu5a', 'li_2' => 'Salur']),
            'user' => $this->db->table('sidesa_user')->getWhere(['email' => $this->session->get('email_sidesa')])->getRowArray(),
            'danadesa' => $this->Menu5a_model->danadesa_anggaran($sessionKdwil),
            'salur_covid' => $this->Menu5a_model->salur_covid($sessionKdwil),
            'jumlah_salur' => $jumlah_salur,
            // 'validation' =>  $this->validation
        ];

        if (isset($_POST['update'])) {
            $input = $this->request->getVar();
            $this->Menu5a_model->updateaksesSalurCovid($input, $sessionKdwil);
            $flash = '<div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert"><i class="mdi mdi-check-all label-icon"></i>Data <b>salur</b> berhasil diperbaharui<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            $this->session->setFlashdata('message', $flash);
            return redirect()->to('user/menu5a/salur_covid');
        }

        return view('sidesa/user/menu5a/salur_covid', $data);
    }

    public function reguler()
    {
        $sessionKdwil = $this->session->get('kd_wilayah_sidesa');
        $kab = $this->Menu5a_model->danadesa_anggaran($sessionKdwil);
        if (isset($kab)) {
            $namakab = $kab['kabupaten'];
        } else {
            $namakab = '-';
        }

        // salur
        $jml_salur_reg = $this->Menu5a_model->salur_reguler($sessionKdwil);
        $januari = isset($jml_salur_reg['salur_januari']) ? $jml_salur_reg['salur_januari'] : 0;
        $februari = isset($jml_salur_reg['salur_februari']) ? $jml_salur_reg['salur_februari'] : 0;
        $maret = isset($jml_salur_reg['salur_maret']) ? $jml_salur_reg['salur_maret'] : 0;
        $april = isset($jml_salur_reg['salur_april']) ? $jml_salur_reg['salur_april'] : 0;
        $mei = isset($jml_salur_reg['salur_mei']) ? $jml_salur_reg['salur_mei'] : 0;
        $juni = isset($jml_salur_reg['salur_juni']) ? $jml_salur_reg['salur_juni'] : 0;
        $juli = isset($jml_salur_reg['salur_juli']) ? $jml_salur_reg['salur_juli'] : 0;
        $agustus = isset($jml_salur_reg['salur_agustus']) ? $jml_salur_reg['salur_agustus'] : 0;
        $september = isset($jml_salur_reg['salur_september']) ? $jml_salur_reg['salur_september'] : 0;
        $oktober = isset($jml_salur_reg['salur_oktober']) ? $jml_salur_reg['salur_oktober'] : 0;
        $november = isset($jml_salur_reg['salur_november']) ? $jml_salur_reg['salur_november'] : 0;
        $desember = isset($jml_salur_reg['salur_desember']) ? $jml_salur_reg['salur_desember'] : 0;
        $jumlah_salur_reg = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_bltdd = $this->Menu5a_model->salur_bltdd($sessionKdwil);
        $januari = isset($jml_salur_bltdd['salur_januari']) ? $jml_salur_bltdd['salur_januari'] : 0;
        $februari = isset($jml_salur_bltdd['salur_februari']) ? $jml_salur_bltdd['salur_februari'] : 0;
        $maret = isset($jml_salur_bltdd['salur_maret']) ? $jml_salur_bltdd['salur_maret'] : 0;
        $april = isset($jml_salur_bltdd['salur_april']) ? $jml_salur_bltdd['salur_april'] : 0;
        $mei = isset($jml_salur_bltdd['salur_mei']) ? $jml_salur_bltdd['salur_mei'] : 0;
        $juni = isset($jml_salur_bltdd['salur_juni']) ? $jml_salur_bltdd['salur_juni'] : 0;
        $juli = isset($jml_salur_bltdd['salur_juli']) ? $jml_salur_bltdd['salur_juli'] : 0;
        $agustus = isset($jml_salur_bltdd['salur_agustus']) ? $jml_salur_bltdd['salur_agustus'] : 0;
        $september = isset($jml_salur_bltdd['salur_september']) ? $jml_salur_bltdd['salur_september'] : 0;
        $oktober = isset($jml_salur_bltdd['salur_oktober']) ? $jml_salur_bltdd['salur_oktober'] : 0;
        $november = isset($jml_salur_bltdd['salur_november']) ? $jml_salur_bltdd['salur_november'] : 0;
        $desember = isset($jml_salur_bltdd['salur_desember']) ? $jml_salur_bltdd['salur_desember'] : 0;
        $jumlah_salur_bltdd = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_kph = $this->Menu5a_model->salur_kph($sessionKdwil);
        $januari = isset($jml_salur_kph['salur_januari']) ? $jml_salur_kph['salur_januari'] : 0;
        $februari = isset($jml_salur_kph['salur_februari']) ? $jml_salur_kph['salur_februari'] : 0;
        $maret = isset($jml_salur_kph['salur_maret']) ? $jml_salur_kph['salur_maret'] : 0;
        $april = isset($jml_salur_kph['salur_april']) ? $jml_salur_kph['salur_april'] : 0;
        $mei = isset($jml_salur_kph['salur_mei']) ? $jml_salur_kph['salur_mei'] : 0;
        $juni = isset($jml_salur_kph['salur_juni']) ? $jml_salur_kph['salur_juni'] : 0;
        $juli = isset($jml_salur_kph['salur_juli']) ? $jml_salur_kph['salur_juli'] : 0;
        $agustus = isset($jml_salur_kph['salur_agustus']) ? $jml_salur_kph['salur_agustus'] : 0;
        $september = isset($jml_salur_kph['salur_september']) ? $jml_salur_kph['salur_september'] : 0;
        $oktober = isset($jml_salur_kph['salur_oktober']) ? $jml_salur_kph['salur_oktober'] : 0;
        $november = isset($jml_salur_kph['salur_november']) ? $jml_salur_kph['salur_november'] : 0;
        $desember = isset($jml_salur_kph['salur_desember']) ? $jml_salur_kph['salur_desember'] : 0;
        $jumlah_salur_kph = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_covid = $this->Menu5a_model->salur_covid($sessionKdwil);
        $januari = isset($jml_salur_covid['salur_januari']) ? $jml_salur_covid['salur_januari'] : 0;
        $februari = isset($jml_salur_covid['salur_februari']) ? $jml_salur_covid['salur_februari'] : 0;
        $maret = isset($jml_salur_covid['salur_maret']) ? $jml_salur_covid['salur_maret'] : 0;
        $april = isset($jml_salur_covid['salur_april']) ? $jml_salur_covid['salur_april'] : 0;
        $mei = isset($jml_salur_covid['salur_mei']) ? $jml_salur_covid['salur_mei'] : 0;
        $juni = isset($jml_salur_covid['salur_juni']) ? $jml_salur_covid['salur_juni'] : 0;
        $juli = isset($jml_salur_covid['salur_juli']) ? $jml_salur_covid['salur_juli'] : 0;
        $agustus = isset($jml_salur_covid['salur_agustus']) ? $jml_salur_covid['salur_agustus'] : 0;
        $september = isset($jml_salur_covid['salur_september']) ? $jml_salur_covid['salur_september'] : 0;
        $oktober = isset($jml_salur_covid['salur_oktober']) ? $jml_salur_covid['salur_oktober'] : 0;
        $november = isset($jml_salur_covid['salur_november']) ? $jml_salur_covid['salur_november'] : 0;
        $desember = isset($jml_salur_covid['salur_desember']) ? $jml_salur_covid['salur_desember'] : 0;
        $jumlah_salur_covid = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        // realisasi
        $jml_realisasi_reg = $this->Menu5a_model->danadesa_reguler($sessionKdwil);
        $januari_reg = isset($jml_realisasi_reg['januari']) ? $jml_realisasi_reg['januari'] : 0;
        $februari_reg = isset($jml_realisasi_reg['februari']) ? $jml_realisasi_reg['februari'] : 0;
        $maret_reg = isset($jml_realisasi_reg['maret']) ? $jml_realisasi_reg['maret'] : 0;
        $april_reg = isset($jml_realisasi_reg['april']) ? $jml_realisasi_reg['april'] : 0;
        $mei_reg = isset($jml_realisasi_reg['mei']) ? $jml_realisasi_reg['mei'] : 0;
        $juni_reg = isset($jml_realisasi_reg['juni']) ? $jml_realisasi_reg['juni'] : 0;
        $juli_reg = isset($jml_realisasi_reg['juli']) ? $jml_realisasi_reg['juli'] : 0;
        $agustus_reg = isset($jml_realisasi_reg['agustus']) ? $jml_realisasi_reg['agustus'] : 0;
        $september_reg = isset($jml_realisasi_reg['september']) ? $jml_realisasi_reg['september'] : 0;
        $oktober_reg = isset($jml_realisasi_reg['oktober']) ? $jml_realisasi_reg['oktober'] : 0;
        $november_reg = isset($jml_realisasi_reg['november']) ? $jml_realisasi_reg['november'] : 0;
        $desember_reg = isset($jml_realisasi_reg['desember']) ? $jml_realisasi_reg['desember'] : 0;
        $jumlah_realisasi_reg = intval($januari_reg) + intval($februari_reg) + intval($maret_reg) + intval($april_reg) + intval($mei_reg) + intval($juni_reg) + intval($juli_reg) + intval($agustus_reg) + intval($september_reg) + intval($oktober_reg) + intval($november_reg) + intval($desember_reg);

        $jml_realisasi_bltdd = $this->Menu5a_model->danadesa_bltdd($sessionKdwil);
        $januari_bltdd = isset($jml_realisasi_bltdd['januari']) ? $jml_realisasi_bltdd['januari'] : 0;
        $februari_bltdd = isset($jml_realisasi_bltdd['februari']) ? $jml_realisasi_bltdd['februari'] : 0;
        $maret_bltdd = isset($jml_realisasi_bltdd['maret']) ? $jml_realisasi_bltdd['maret'] : 0;
        $april_bltdd = isset($jml_realisasi_bltdd['april']) ? $jml_realisasi_bltdd['april'] : 0;
        $mei_bltdd = isset($jml_realisasi_bltdd['mei']) ? $jml_realisasi_bltdd['mei'] : 0;
        $juni_bltdd = isset($jml_realisasi_bltdd['juni']) ? $jml_realisasi_bltdd['juni'] : 0;
        $juli_bltdd = isset($jml_realisasi_bltdd['juli']) ? $jml_realisasi_bltdd['juli'] : 0;
        $agustus_bltdd = isset($jml_realisasi_bltdd['agustus']) ? $jml_realisasi_bltdd['agustus'] : 0;
        $september_bltdd = isset($jml_realisasi_bltdd['september']) ? $jml_realisasi_bltdd['september'] : 0;
        $oktober_bltdd = isset($jml_realisasi_bltdd['oktober']) ? $jml_realisasi_bltdd['oktober'] : 0;
        $november_bltdd = isset($jml_realisasi_bltdd['november']) ? $jml_realisasi_bltdd['november'] : 0;
        $desember_bltdd = isset($jml_realisasi_bltdd['desember']) ? $jml_realisasi_bltdd['desember'] : 0;
        $jumlah_realisasi_bltdd = intval($januari_bltdd) + intval($februari_bltdd) + intval($maret_bltdd) + intval($april_bltdd) + intval($mei_bltdd) + intval($juni_bltdd) + intval($juli_bltdd) + intval($agustus_bltdd) + intval($september_bltdd) + intval($oktober_bltdd) + intval($november_bltdd) + intval($desember_bltdd);

        $jml_realisasi_kph = $this->Menu5a_model->danadesa_kph($sessionKdwil);
        $januari_kph = isset($jml_realisasi_kph['januari']) ? $jml_realisasi_kph['januari'] : 0;
        $februari_kph = isset($jml_realisasi_kph['februari']) ? $jml_realisasi_kph['februari'] : 0;
        $maret_kph = isset($jml_realisasi_kph['maret']) ? $jml_realisasi_kph['maret'] : 0;
        $april_kph = isset($jml_realisasi_kph['april']) ? $jml_realisasi_kph['april'] : 0;
        $mei_kph = isset($jml_realisasi_kph['mei']) ? $jml_realisasi_kph['mei'] : 0;
        $juni_kph = isset($jml_realisasi_kph['juni']) ? $jml_realisasi_kph['juni'] : 0;
        $juli_kph = isset($jml_realisasi_kph['juli']) ? $jml_realisasi_kph['juli'] : 0;
        $agustus_kph = isset($jml_realisasi_kph['agustus']) ? $jml_realisasi_kph['agustus'] : 0;
        $september_kph = isset($jml_realisasi_kph['september']) ? $jml_realisasi_kph['september'] : 0;
        $oktober_kph = isset($jml_realisasi_kph['oktober']) ? $jml_realisasi_kph['oktober'] : 0;
        $november_kph = isset($jml_realisasi_kph['november']) ? $jml_realisasi_kph['november'] : 0;
        $desember_kph = isset($jml_realisasi_kph['desember']) ? $jml_realisasi_kph['desember'] : 0;
        $jumlah_realisasi_kph = intval($januari_kph) + intval($februari_kph) + intval($maret_kph) + intval($april_kph) + intval($mei_kph) + intval($juni_kph) + intval($juli_kph) + intval($agustus_kph) + intval($september_kph) + intval($oktober_kph) + intval($november_kph) + intval($desember_kph);

        $jml_realisasi_covid = $this->Menu5a_model->danadesa_covid($sessionKdwil);
        $januari_covid = isset($jml_realisasi_covid['januari']) ? $jml_realisasi_covid['januari'] : 0;
        $februari_covid = isset($jml_realisasi_covid['februari']) ? $jml_realisasi_covid['februari'] : 0;
        $maret_covid = isset($jml_realisasi_covid['maret']) ? $jml_realisasi_covid['maret'] : 0;
        $april_covid = isset($jml_realisasi_covid['april']) ? $jml_realisasi_covid['april'] : 0;
        $mei_covid = isset($jml_realisasi_covid['mei']) ? $jml_realisasi_covid['mei'] : 0;
        $juni_covid = isset($jml_realisasi_covid['juni']) ? $jml_realisasi_covid['juni'] : 0;
        $juli_covid = isset($jml_realisasi_covid['juli']) ? $jml_realisasi_covid['juli'] : 0;
        $agustus_covid = isset($jml_realisasi_covid['agustus']) ? $jml_realisasi_covid['agustus'] : 0;
        $september_covid = isset($jml_realisasi_covid['september']) ? $jml_realisasi_covid['september'] : 0;
        $oktober_covid = isset($jml_realisasi_covid['oktober']) ? $jml_realisasi_covid['oktober'] : 0;
        $november_covid = isset($jml_realisasi_covid['november']) ? $jml_realisasi_covid['november'] : 0;
        $desember_covid = isset($jml_realisasi_covid['desember']) ? $jml_realisasi_covid['desember'] : 0;
        $jumlah_realisasi_covid = intval($januari_covid) + intval($februari_covid) + intval($maret_covid) + intval($april_covid) + intval($mei_covid) + intval($juni_covid) + intval($juli_covid) + intval($agustus_covid) + intval($september_covid) + intval($oktober_covid) + intval($november_covid) + intval($desember_covid);

        $data = [
            'title' => 'Realisasi Reg',
            'page_title' => view('sidesa/layout/user/content-page-title', ['title' => 'Realisasi Dana Desa Reguler ' . $namakab . ' ' . date("Y"), 'li_1' => 'Menu5a', 'li_2' => 'Realisasi']),
            'user' => $this->db->table('sidesa_user')->getWhere(['email' => $this->session->get('email_sidesa')])->getRowArray(),
            'danadesa' => $this->Menu5a_model->danadesa_anggaran($sessionKdwil),
            // 'salur' => $this->Menu5a_model->danadesa_salur($sessionKdwil),
            'jumlah_salur_reg' => $jumlah_salur_reg,
            'reguler' => $this->Menu5a_model->danadesa_reguler($sessionKdwil),
            'jumlah_realisasi' => $jumlah_realisasi_reg,
            'grand_total_salur' => $jumlah_salur_reg + $jumlah_salur_bltdd + $jumlah_salur_kph + $jumlah_salur_covid,
            'grand_total_realisasi' => $jumlah_realisasi_reg + $jumlah_realisasi_bltdd + $jumlah_realisasi_kph + $jumlah_realisasi_covid,
            // 'validation' =>  $this->validation
        ];

        if (isset($_POST['update'])) {
            $input = $this->request->getVar();
            $this->Menu5a_model->updateaksesReguler($input, $sessionKdwil);
            $flash = '<div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert"><i class="mdi mdi-check-all label-icon"></i>Data <b>realisasi reguler</b> berhasil diperbaharui<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            $this->session->setFlashdata('message', $flash);
            return redirect()->to('user/menu5a/reguler');
        }

        return view('sidesa/user/menu5a/reguler', $data);
    }

    public function bltdd()
    {
        $sessionKdwil = $this->session->get('kd_wilayah_sidesa');
        $kab = $this->Menu5a_model->danadesa_anggaran($sessionKdwil);
        if (isset($kab)) {
            $namakab = $kab['kabupaten'];
        } else {
            $namakab = '-';
        }

        // salur
        $jml_salur_reg = $this->Menu5a_model->salur_reguler($sessionKdwil);
        $januari = isset($jml_salur_reg['salur_januari']) ? $jml_salur_reg['salur_januari'] : 0;
        $februari = isset($jml_salur_reg['salur_februari']) ? $jml_salur_reg['salur_februari'] : 0;
        $maret = isset($jml_salur_reg['salur_maret']) ? $jml_salur_reg['salur_maret'] : 0;
        $april = isset($jml_salur_reg['salur_april']) ? $jml_salur_reg['salur_april'] : 0;
        $mei = isset($jml_salur_reg['salur_mei']) ? $jml_salur_reg['salur_mei'] : 0;
        $juni = isset($jml_salur_reg['salur_juni']) ? $jml_salur_reg['salur_juni'] : 0;
        $juli = isset($jml_salur_reg['salur_juli']) ? $jml_salur_reg['salur_juli'] : 0;
        $agustus = isset($jml_salur_reg['salur_agustus']) ? $jml_salur_reg['salur_agustus'] : 0;
        $september = isset($jml_salur_reg['salur_september']) ? $jml_salur_reg['salur_september'] : 0;
        $oktober = isset($jml_salur_reg['salur_oktober']) ? $jml_salur_reg['salur_oktober'] : 0;
        $november = isset($jml_salur_reg['salur_november']) ? $jml_salur_reg['salur_november'] : 0;
        $desember = isset($jml_salur_reg['salur_desember']) ? $jml_salur_reg['salur_desember'] : 0;
        $jumlah_salur_reg = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_bltdd = $this->Menu5a_model->salur_bltdd($sessionKdwil);
        $januari = isset($jml_salur_bltdd['salur_januari']) ? $jml_salur_bltdd['salur_januari'] : 0;
        $februari = isset($jml_salur_bltdd['salur_februari']) ? $jml_salur_bltdd['salur_februari'] : 0;
        $maret = isset($jml_salur_bltdd['salur_maret']) ? $jml_salur_bltdd['salur_maret'] : 0;
        $april = isset($jml_salur_bltdd['salur_april']) ? $jml_salur_bltdd['salur_april'] : 0;
        $mei = isset($jml_salur_bltdd['salur_mei']) ? $jml_salur_bltdd['salur_mei'] : 0;
        $juni = isset($jml_salur_bltdd['salur_juni']) ? $jml_salur_bltdd['salur_juni'] : 0;
        $juli = isset($jml_salur_bltdd['salur_juli']) ? $jml_salur_bltdd['salur_juli'] : 0;
        $agustus = isset($jml_salur_bltdd['salur_agustus']) ? $jml_salur_bltdd['salur_agustus'] : 0;
        $september = isset($jml_salur_bltdd['salur_september']) ? $jml_salur_bltdd['salur_september'] : 0;
        $oktober = isset($jml_salur_bltdd['salur_oktober']) ? $jml_salur_bltdd['salur_oktober'] : 0;
        $november = isset($jml_salur_bltdd['salur_november']) ? $jml_salur_bltdd['salur_november'] : 0;
        $desember = isset($jml_salur_bltdd['salur_desember']) ? $jml_salur_bltdd['salur_desember'] : 0;
        $jumlah_salur_bltdd = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_kph = $this->Menu5a_model->salur_kph($sessionKdwil);
        $januari = isset($jml_salur_kph['salur_januari']) ? $jml_salur_kph['salur_januari'] : 0;
        $februari = isset($jml_salur_kph['salur_februari']) ? $jml_salur_kph['salur_februari'] : 0;
        $maret = isset($jml_salur_kph['salur_maret']) ? $jml_salur_kph['salur_maret'] : 0;
        $april = isset($jml_salur_kph['salur_april']) ? $jml_salur_kph['salur_april'] : 0;
        $mei = isset($jml_salur_kph['salur_mei']) ? $jml_salur_kph['salur_mei'] : 0;
        $juni = isset($jml_salur_kph['salur_juni']) ? $jml_salur_kph['salur_juni'] : 0;
        $juli = isset($jml_salur_kph['salur_juli']) ? $jml_salur_kph['salur_juli'] : 0;
        $agustus = isset($jml_salur_kph['salur_agustus']) ? $jml_salur_kph['salur_agustus'] : 0;
        $september = isset($jml_salur_kph['salur_september']) ? $jml_salur_kph['salur_september'] : 0;
        $oktober = isset($jml_salur_kph['salur_oktober']) ? $jml_salur_kph['salur_oktober'] : 0;
        $november = isset($jml_salur_kph['salur_november']) ? $jml_salur_kph['salur_november'] : 0;
        $desember = isset($jml_salur_kph['salur_desember']) ? $jml_salur_kph['salur_desember'] : 0;
        $jumlah_salur_kph = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_covid = $this->Menu5a_model->salur_covid($sessionKdwil);
        $januari = isset($jml_salur_covid['salur_januari']) ? $jml_salur_covid['salur_januari'] : 0;
        $februari = isset($jml_salur_covid['salur_februari']) ? $jml_salur_covid['salur_februari'] : 0;
        $maret = isset($jml_salur_covid['salur_maret']) ? $jml_salur_covid['salur_maret'] : 0;
        $april = isset($jml_salur_covid['salur_april']) ? $jml_salur_covid['salur_april'] : 0;
        $mei = isset($jml_salur_covid['salur_mei']) ? $jml_salur_covid['salur_mei'] : 0;
        $juni = isset($jml_salur_covid['salur_juni']) ? $jml_salur_covid['salur_juni'] : 0;
        $juli = isset($jml_salur_covid['salur_juli']) ? $jml_salur_covid['salur_juli'] : 0;
        $agustus = isset($jml_salur_covid['salur_agustus']) ? $jml_salur_covid['salur_agustus'] : 0;
        $september = isset($jml_salur_covid['salur_september']) ? $jml_salur_covid['salur_september'] : 0;
        $oktober = isset($jml_salur_covid['salur_oktober']) ? $jml_salur_covid['salur_oktober'] : 0;
        $november = isset($jml_salur_covid['salur_november']) ? $jml_salur_covid['salur_november'] : 0;
        $desember = isset($jml_salur_covid['salur_desember']) ? $jml_salur_covid['salur_desember'] : 0;
        $jumlah_salur_covid = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        // realisasi
        $jml_realisasi_reg = $this->Menu5a_model->danadesa_reguler($sessionKdwil);
        $januari_reg = isset($jml_realisasi_reg['januari']) ? $jml_realisasi_reg['januari'] : 0;
        $februari_reg = isset($jml_realisasi_reg['februari']) ? $jml_realisasi_reg['februari'] : 0;
        $maret_reg = isset($jml_realisasi_reg['maret']) ? $jml_realisasi_reg['maret'] : 0;
        $april_reg = isset($jml_realisasi_reg['april']) ? $jml_realisasi_reg['april'] : 0;
        $mei_reg = isset($jml_realisasi_reg['mei']) ? $jml_realisasi_reg['mei'] : 0;
        $juni_reg = isset($jml_realisasi_reg['juni']) ? $jml_realisasi_reg['juni'] : 0;
        $juli_reg = isset($jml_realisasi_reg['juli']) ? $jml_realisasi_reg['juli'] : 0;
        $agustus_reg = isset($jml_realisasi_reg['agustus']) ? $jml_realisasi_reg['agustus'] : 0;
        $september_reg = isset($jml_realisasi_reg['september']) ? $jml_realisasi_reg['september'] : 0;
        $oktober_reg = isset($jml_realisasi_reg['oktober']) ? $jml_realisasi_reg['oktober'] : 0;
        $november_reg = isset($jml_realisasi_reg['november']) ? $jml_realisasi_reg['november'] : 0;
        $desember_reg = isset($jml_realisasi_reg['desember']) ? $jml_realisasi_reg['desember'] : 0;
        $jumlah_realisasi_reg = intval($januari_reg) + intval($februari_reg) + intval($maret_reg) + intval($april_reg) + intval($mei_reg) + intval($juni_reg) + intval($juli_reg) + intval($agustus_reg) + intval($september_reg) + intval($oktober_reg) + intval($november_reg) + intval($desember_reg);

        $jml_realisasi_bltdd = $this->Menu5a_model->danadesa_bltdd($sessionKdwil);
        $januari_bltdd = isset($jml_realisasi_bltdd['januari']) ? $jml_realisasi_bltdd['januari'] : 0;
        $februari_bltdd = isset($jml_realisasi_bltdd['februari']) ? $jml_realisasi_bltdd['februari'] : 0;
        $maret_bltdd = isset($jml_realisasi_bltdd['maret']) ? $jml_realisasi_bltdd['maret'] : 0;
        $april_bltdd = isset($jml_realisasi_bltdd['april']) ? $jml_realisasi_bltdd['april'] : 0;
        $mei_bltdd = isset($jml_realisasi_bltdd['mei']) ? $jml_realisasi_bltdd['mei'] : 0;
        $juni_bltdd = isset($jml_realisasi_bltdd['juni']) ? $jml_realisasi_bltdd['juni'] : 0;
        $juli_bltdd = isset($jml_realisasi_bltdd['juli']) ? $jml_realisasi_bltdd['juli'] : 0;
        $agustus_bltdd = isset($jml_realisasi_bltdd['agustus']) ? $jml_realisasi_bltdd['agustus'] : 0;
        $september_bltdd = isset($jml_realisasi_bltdd['september']) ? $jml_realisasi_bltdd['september'] : 0;
        $oktober_bltdd = isset($jml_realisasi_bltdd['oktober']) ? $jml_realisasi_bltdd['oktober'] : 0;
        $november_bltdd = isset($jml_realisasi_bltdd['november']) ? $jml_realisasi_bltdd['november'] : 0;
        $desember_bltdd = isset($jml_realisasi_bltdd['desember']) ? $jml_realisasi_bltdd['desember'] : 0;
        $jumlah_realisasi_bltdd = intval($januari_bltdd) + intval($februari_bltdd) + intval($maret_bltdd) + intval($april_bltdd) + intval($mei_bltdd) + intval($juni_bltdd) + intval($juli_bltdd) + intval($agustus_bltdd) + intval($september_bltdd) + intval($oktober_bltdd) + intval($november_bltdd) + intval($desember_bltdd);

        $jml_realisasi_kph = $this->Menu5a_model->danadesa_kph($sessionKdwil);
        $januari_kph = isset($jml_realisasi_kph['januari']) ? $jml_realisasi_kph['januari'] : 0;
        $februari_kph = isset($jml_realisasi_kph['februari']) ? $jml_realisasi_kph['februari'] : 0;
        $maret_kph = isset($jml_realisasi_kph['maret']) ? $jml_realisasi_kph['maret'] : 0;
        $april_kph = isset($jml_realisasi_kph['april']) ? $jml_realisasi_kph['april'] : 0;
        $mei_kph = isset($jml_realisasi_kph['mei']) ? $jml_realisasi_kph['mei'] : 0;
        $juni_kph = isset($jml_realisasi_kph['juni']) ? $jml_realisasi_kph['juni'] : 0;
        $juli_kph = isset($jml_realisasi_kph['juli']) ? $jml_realisasi_kph['juli'] : 0;
        $agustus_kph = isset($jml_realisasi_kph['agustus']) ? $jml_realisasi_kph['agustus'] : 0;
        $september_kph = isset($jml_realisasi_kph['september']) ? $jml_realisasi_kph['september'] : 0;
        $oktober_kph = isset($jml_realisasi_kph['oktober']) ? $jml_realisasi_kph['oktober'] : 0;
        $november_kph = isset($jml_realisasi_kph['november']) ? $jml_realisasi_kph['november'] : 0;
        $desember_kph = isset($jml_realisasi_kph['desember']) ? $jml_realisasi_kph['desember'] : 0;
        $jumlah_realisasi_kph = intval($januari_kph) + intval($februari_kph) + intval($maret_kph) + intval($april_kph) + intval($mei_kph) + intval($juni_kph) + intval($juli_kph) + intval($agustus_kph) + intval($september_kph) + intval($oktober_kph) + intval($november_kph) + intval($desember_kph);

        $jml_realisasi_covid = $this->Menu5a_model->danadesa_covid($sessionKdwil);
        $januari_covid = isset($jml_realisasi_covid['januari']) ? $jml_realisasi_covid['januari'] : 0;
        $februari_covid = isset($jml_realisasi_covid['februari']) ? $jml_realisasi_covid['februari'] : 0;
        $maret_covid = isset($jml_realisasi_covid['maret']) ? $jml_realisasi_covid['maret'] : 0;
        $april_covid = isset($jml_realisasi_covid['april']) ? $jml_realisasi_covid['april'] : 0;
        $mei_covid = isset($jml_realisasi_covid['mei']) ? $jml_realisasi_covid['mei'] : 0;
        $juni_covid = isset($jml_realisasi_covid['juni']) ? $jml_realisasi_covid['juni'] : 0;
        $juli_covid = isset($jml_realisasi_covid['juli']) ? $jml_realisasi_covid['juli'] : 0;
        $agustus_covid = isset($jml_realisasi_covid['agustus']) ? $jml_realisasi_covid['agustus'] : 0;
        $september_covid = isset($jml_realisasi_covid['september']) ? $jml_realisasi_covid['september'] : 0;
        $oktober_covid = isset($jml_realisasi_covid['oktober']) ? $jml_realisasi_covid['oktober'] : 0;
        $november_covid = isset($jml_realisasi_covid['november']) ? $jml_realisasi_covid['november'] : 0;
        $desember_covid = isset($jml_realisasi_covid['desember']) ? $jml_realisasi_covid['desember'] : 0;
        $jumlah_realisasi_covid = intval($januari_covid) + intval($februari_covid) + intval($maret_covid) + intval($april_covid) + intval($mei_covid) + intval($juni_covid) + intval($juli_covid) + intval($agustus_covid) + intval($september_covid) + intval($oktober_covid) + intval($november_covid) + intval($desember_covid);

        $data = [
            'title' => 'Realisasi BLTDD',
            'page_title' => view('sidesa/layout/user/content-page-title', ['title' => 'Realisasi Bantuan Langsung Tunai Dana Desa ' . $namakab . ' ' . date("Y"), 'li_1' => 'Menu5a', 'li_2' => 'Realisasi']),
            'user' => $this->db->table('sidesa_user')->getWhere(['email' => $this->session->get('email_sidesa')])->getRowArray(),
            'danadesa' => $this->Menu5a_model->danadesa_anggaran($sessionKdwil),
            // 'salur' => $this->Menu5a_model->danadesa_salur($sessionKdwil),
            'jumlah_salur_bltdd' => $jumlah_salur_bltdd,
            'bltdd' => $this->Menu5a_model->danadesa_bltdd($sessionKdwil),
            'jumlah_realisasi' => $jumlah_realisasi_bltdd,
            'grand_total_salur' => $jumlah_salur_reg + $jumlah_salur_bltdd + $jumlah_salur_kph + $jumlah_salur_covid,
            'grand_total_realisasi' => $jumlah_realisasi_reg + $jumlah_realisasi_bltdd + $jumlah_realisasi_kph + $jumlah_realisasi_covid,
            // 'validation' =>  $this->validation
        ];

        if (isset($_POST['update'])) {
            $input = $this->request->getVar();
            $this->Menu5a_model->updateaksesBltdd($input, $sessionKdwil);
            $flash = '<div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert"><i class="mdi mdi-check-all label-icon"></i>Data <b>realisasi bltdd</b> berhasil diperbaharui<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            $this->session->setFlashdata('message', $flash);
            return redirect()->to('user/menu5a/bltdd');
        }

        return view('sidesa/user/menu5a/bltdd', $data);
    }

    public function kph()
    {
        $sessionKdwil = $this->session->get('kd_wilayah_sidesa');
        $kab = $this->Menu5a_model->danadesa_anggaran($sessionKdwil);
        if (isset($kab)) {
            $namakab = $kab['kabupaten'];
        } else {
            $namakab = '-';
        }

        // salur
        $jml_salur_reg = $this->Menu5a_model->salur_reguler($sessionKdwil);
        $januari = isset($jml_salur_reg['salur_januari']) ? $jml_salur_reg['salur_januari'] : 0;
        $februari = isset($jml_salur_reg['salur_februari']) ? $jml_salur_reg['salur_februari'] : 0;
        $maret = isset($jml_salur_reg['salur_maret']) ? $jml_salur_reg['salur_maret'] : 0;
        $april = isset($jml_salur_reg['salur_april']) ? $jml_salur_reg['salur_april'] : 0;
        $mei = isset($jml_salur_reg['salur_mei']) ? $jml_salur_reg['salur_mei'] : 0;
        $juni = isset($jml_salur_reg['salur_juni']) ? $jml_salur_reg['salur_juni'] : 0;
        $juli = isset($jml_salur_reg['salur_juli']) ? $jml_salur_reg['salur_juli'] : 0;
        $agustus = isset($jml_salur_reg['salur_agustus']) ? $jml_salur_reg['salur_agustus'] : 0;
        $september = isset($jml_salur_reg['salur_september']) ? $jml_salur_reg['salur_september'] : 0;
        $oktober = isset($jml_salur_reg['salur_oktober']) ? $jml_salur_reg['salur_oktober'] : 0;
        $november = isset($jml_salur_reg['salur_november']) ? $jml_salur_reg['salur_november'] : 0;
        $desember = isset($jml_salur_reg['salur_desember']) ? $jml_salur_reg['salur_desember'] : 0;
        $jumlah_salur_reg = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_bltdd = $this->Menu5a_model->salur_bltdd($sessionKdwil);
        $januari = isset($jml_salur_bltdd['salur_januari']) ? $jml_salur_bltdd['salur_januari'] : 0;
        $februari = isset($jml_salur_bltdd['salur_februari']) ? $jml_salur_bltdd['salur_februari'] : 0;
        $maret = isset($jml_salur_bltdd['salur_maret']) ? $jml_salur_bltdd['salur_maret'] : 0;
        $april = isset($jml_salur_bltdd['salur_april']) ? $jml_salur_bltdd['salur_april'] : 0;
        $mei = isset($jml_salur_bltdd['salur_mei']) ? $jml_salur_bltdd['salur_mei'] : 0;
        $juni = isset($jml_salur_bltdd['salur_juni']) ? $jml_salur_bltdd['salur_juni'] : 0;
        $juli = isset($jml_salur_bltdd['salur_juli']) ? $jml_salur_bltdd['salur_juli'] : 0;
        $agustus = isset($jml_salur_bltdd['salur_agustus']) ? $jml_salur_bltdd['salur_agustus'] : 0;
        $september = isset($jml_salur_bltdd['salur_september']) ? $jml_salur_bltdd['salur_september'] : 0;
        $oktober = isset($jml_salur_bltdd['salur_oktober']) ? $jml_salur_bltdd['salur_oktober'] : 0;
        $november = isset($jml_salur_bltdd['salur_november']) ? $jml_salur_bltdd['salur_november'] : 0;
        $desember = isset($jml_salur_bltdd['salur_desember']) ? $jml_salur_bltdd['salur_desember'] : 0;
        $jumlah_salur_bltdd = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_kph = $this->Menu5a_model->salur_kph($sessionKdwil);
        $januari = isset($jml_salur_kph['salur_januari']) ? $jml_salur_kph['salur_januari'] : 0;
        $februari = isset($jml_salur_kph['salur_februari']) ? $jml_salur_kph['salur_februari'] : 0;
        $maret = isset($jml_salur_kph['salur_maret']) ? $jml_salur_kph['salur_maret'] : 0;
        $april = isset($jml_salur_kph['salur_april']) ? $jml_salur_kph['salur_april'] : 0;
        $mei = isset($jml_salur_kph['salur_mei']) ? $jml_salur_kph['salur_mei'] : 0;
        $juni = isset($jml_salur_kph['salur_juni']) ? $jml_salur_kph['salur_juni'] : 0;
        $juli = isset($jml_salur_kph['salur_juli']) ? $jml_salur_kph['salur_juli'] : 0;
        $agustus = isset($jml_salur_kph['salur_agustus']) ? $jml_salur_kph['salur_agustus'] : 0;
        $september = isset($jml_salur_kph['salur_september']) ? $jml_salur_kph['salur_september'] : 0;
        $oktober = isset($jml_salur_kph['salur_oktober']) ? $jml_salur_kph['salur_oktober'] : 0;
        $november = isset($jml_salur_kph['salur_november']) ? $jml_salur_kph['salur_november'] : 0;
        $desember = isset($jml_salur_kph['salur_desember']) ? $jml_salur_kph['salur_desember'] : 0;
        $jumlah_salur_kph = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_covid = $this->Menu5a_model->salur_covid($sessionKdwil);
        $januari = isset($jml_salur_covid['salur_januari']) ? $jml_salur_covid['salur_januari'] : 0;
        $februari = isset($jml_salur_covid['salur_februari']) ? $jml_salur_covid['salur_februari'] : 0;
        $maret = isset($jml_salur_covid['salur_maret']) ? $jml_salur_covid['salur_maret'] : 0;
        $april = isset($jml_salur_covid['salur_april']) ? $jml_salur_covid['salur_april'] : 0;
        $mei = isset($jml_salur_covid['salur_mei']) ? $jml_salur_covid['salur_mei'] : 0;
        $juni = isset($jml_salur_covid['salur_juni']) ? $jml_salur_covid['salur_juni'] : 0;
        $juli = isset($jml_salur_covid['salur_juli']) ? $jml_salur_covid['salur_juli'] : 0;
        $agustus = isset($jml_salur_covid['salur_agustus']) ? $jml_salur_covid['salur_agustus'] : 0;
        $september = isset($jml_salur_covid['salur_september']) ? $jml_salur_covid['salur_september'] : 0;
        $oktober = isset($jml_salur_covid['salur_oktober']) ? $jml_salur_covid['salur_oktober'] : 0;
        $november = isset($jml_salur_covid['salur_november']) ? $jml_salur_covid['salur_november'] : 0;
        $desember = isset($jml_salur_covid['salur_desember']) ? $jml_salur_covid['salur_desember'] : 0;
        $jumlah_salur_covid = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        // realisasi
        $jml_realisasi_reg = $this->Menu5a_model->danadesa_reguler($sessionKdwil);
        $januari_reg = isset($jml_realisasi_reg['januari']) ? $jml_realisasi_reg['januari'] : 0;
        $februari_reg = isset($jml_realisasi_reg['februari']) ? $jml_realisasi_reg['februari'] : 0;
        $maret_reg = isset($jml_realisasi_reg['maret']) ? $jml_realisasi_reg['maret'] : 0;
        $april_reg = isset($jml_realisasi_reg['april']) ? $jml_realisasi_reg['april'] : 0;
        $mei_reg = isset($jml_realisasi_reg['mei']) ? $jml_realisasi_reg['mei'] : 0;
        $juni_reg = isset($jml_realisasi_reg['juni']) ? $jml_realisasi_reg['juni'] : 0;
        $juli_reg = isset($jml_realisasi_reg['juli']) ? $jml_realisasi_reg['juli'] : 0;
        $agustus_reg = isset($jml_realisasi_reg['agustus']) ? $jml_realisasi_reg['agustus'] : 0;
        $september_reg = isset($jml_realisasi_reg['september']) ? $jml_realisasi_reg['september'] : 0;
        $oktober_reg = isset($jml_realisasi_reg['oktober']) ? $jml_realisasi_reg['oktober'] : 0;
        $november_reg = isset($jml_realisasi_reg['november']) ? $jml_realisasi_reg['november'] : 0;
        $desember_reg = isset($jml_realisasi_reg['desember']) ? $jml_realisasi_reg['desember'] : 0;
        $jumlah_realisasi_reg = intval($januari_reg) + intval($februari_reg) + intval($maret_reg) + intval($april_reg) + intval($mei_reg) + intval($juni_reg) + intval($juli_reg) + intval($agustus_reg) + intval($september_reg) + intval($oktober_reg) + intval($november_reg) + intval($desember_reg);

        $jml_realisasi_bltdd = $this->Menu5a_model->danadesa_bltdd($sessionKdwil);
        $januari_bltdd = isset($jml_realisasi_bltdd['januari']) ? $jml_realisasi_bltdd['januari'] : 0;
        $februari_bltdd = isset($jml_realisasi_bltdd['februari']) ? $jml_realisasi_bltdd['februari'] : 0;
        $maret_bltdd = isset($jml_realisasi_bltdd['maret']) ? $jml_realisasi_bltdd['maret'] : 0;
        $april_bltdd = isset($jml_realisasi_bltdd['april']) ? $jml_realisasi_bltdd['april'] : 0;
        $mei_bltdd = isset($jml_realisasi_bltdd['mei']) ? $jml_realisasi_bltdd['mei'] : 0;
        $juni_bltdd = isset($jml_realisasi_bltdd['juni']) ? $jml_realisasi_bltdd['juni'] : 0;
        $juli_bltdd = isset($jml_realisasi_bltdd['juli']) ? $jml_realisasi_bltdd['juli'] : 0;
        $agustus_bltdd = isset($jml_realisasi_bltdd['agustus']) ? $jml_realisasi_bltdd['agustus'] : 0;
        $september_bltdd = isset($jml_realisasi_bltdd['september']) ? $jml_realisasi_bltdd['september'] : 0;
        $oktober_bltdd = isset($jml_realisasi_bltdd['oktober']) ? $jml_realisasi_bltdd['oktober'] : 0;
        $november_bltdd = isset($jml_realisasi_bltdd['november']) ? $jml_realisasi_bltdd['november'] : 0;
        $desember_bltdd = isset($jml_realisasi_bltdd['desember']) ? $jml_realisasi_bltdd['desember'] : 0;
        $jumlah_realisasi_bltdd = intval($januari_bltdd) + intval($februari_bltdd) + intval($maret_bltdd) + intval($april_bltdd) + intval($mei_bltdd) + intval($juni_bltdd) + intval($juli_bltdd) + intval($agustus_bltdd) + intval($september_bltdd) + intval($oktober_bltdd) + intval($november_bltdd) + intval($desember_bltdd);

        $jml_realisasi_kph = $this->Menu5a_model->danadesa_kph($sessionKdwil);
        $januari_kph = isset($jml_realisasi_kph['januari']) ? $jml_realisasi_kph['januari'] : 0;
        $februari_kph = isset($jml_realisasi_kph['februari']) ? $jml_realisasi_kph['februari'] : 0;
        $maret_kph = isset($jml_realisasi_kph['maret']) ? $jml_realisasi_kph['maret'] : 0;
        $april_kph = isset($jml_realisasi_kph['april']) ? $jml_realisasi_kph['april'] : 0;
        $mei_kph = isset($jml_realisasi_kph['mei']) ? $jml_realisasi_kph['mei'] : 0;
        $juni_kph = isset($jml_realisasi_kph['juni']) ? $jml_realisasi_kph['juni'] : 0;
        $juli_kph = isset($jml_realisasi_kph['juli']) ? $jml_realisasi_kph['juli'] : 0;
        $agustus_kph = isset($jml_realisasi_kph['agustus']) ? $jml_realisasi_kph['agustus'] : 0;
        $september_kph = isset($jml_realisasi_kph['september']) ? $jml_realisasi_kph['september'] : 0;
        $oktober_kph = isset($jml_realisasi_kph['oktober']) ? $jml_realisasi_kph['oktober'] : 0;
        $november_kph = isset($jml_realisasi_kph['november']) ? $jml_realisasi_kph['november'] : 0;
        $desember_kph = isset($jml_realisasi_kph['desember']) ? $jml_realisasi_kph['desember'] : 0;
        $jumlah_realisasi_kph = intval($januari_kph) + intval($februari_kph) + intval($maret_kph) + intval($april_kph) + intval($mei_kph) + intval($juni_kph) + intval($juli_kph) + intval($agustus_kph) + intval($september_kph) + intval($oktober_kph) + intval($november_kph) + intval($desember_kph);

        $jml_realisasi_covid = $this->Menu5a_model->danadesa_covid($sessionKdwil);
        $januari_covid = isset($jml_realisasi_covid['januari']) ? $jml_realisasi_covid['januari'] : 0;
        $februari_covid = isset($jml_realisasi_covid['februari']) ? $jml_realisasi_covid['februari'] : 0;
        $maret_covid = isset($jml_realisasi_covid['maret']) ? $jml_realisasi_covid['maret'] : 0;
        $april_covid = isset($jml_realisasi_covid['april']) ? $jml_realisasi_covid['april'] : 0;
        $mei_covid = isset($jml_realisasi_covid['mei']) ? $jml_realisasi_covid['mei'] : 0;
        $juni_covid = isset($jml_realisasi_covid['juni']) ? $jml_realisasi_covid['juni'] : 0;
        $juli_covid = isset($jml_realisasi_covid['juli']) ? $jml_realisasi_covid['juli'] : 0;
        $agustus_covid = isset($jml_realisasi_covid['agustus']) ? $jml_realisasi_covid['agustus'] : 0;
        $september_covid = isset($jml_realisasi_covid['september']) ? $jml_realisasi_covid['september'] : 0;
        $oktober_covid = isset($jml_realisasi_covid['oktober']) ? $jml_realisasi_covid['oktober'] : 0;
        $november_covid = isset($jml_realisasi_covid['november']) ? $jml_realisasi_covid['november'] : 0;
        $desember_covid = isset($jml_realisasi_covid['desember']) ? $jml_realisasi_covid['desember'] : 0;
        $jumlah_realisasi_covid = intval($januari_covid) + intval($februari_covid) + intval($maret_covid) + intval($april_covid) + intval($mei_covid) + intval($juni_covid) + intval($juli_covid) + intval($agustus_covid) + intval($september_covid) + intval($oktober_covid) + intval($november_covid) + intval($desember_covid);

        $data = [
            'title' => 'Realisasi KPH',
            'page_title' => view('sidesa/layout/user/content-page-title', ['title' => 'Realisasi Dana Desa Ketahanan Pangan dan Hewani ' . $namakab . ' ' . date("Y"), 'li_1' => 'Menu5a', 'li_2' => 'Realisasi']),
            'user' => $this->db->table('sidesa_user')->getWhere(['email' => $this->session->get('email_sidesa')])->getRowArray(),
            'danadesa' => $this->Menu5a_model->danadesa_anggaran($sessionKdwil),
            // 'salur' => $this->Menu5a_model->danadesa_salur($sessionKdwil),
            'jumlah_salur_kph' => $jumlah_salur_kph,
            'kph' => $this->Menu5a_model->danadesa_kph($sessionKdwil),
            'jumlah_realisasi' => $jumlah_realisasi_kph,
            'grand_total_salur' => $jumlah_salur_reg + $jumlah_salur_bltdd + $jumlah_salur_kph + $jumlah_salur_covid,
            'grand_total_realisasi' => $jumlah_realisasi_reg + $jumlah_realisasi_bltdd + $jumlah_realisasi_kph + $jumlah_realisasi_covid,
            // 'validation' =>  $this->validation
        ];

        if (isset($_POST['update'])) {
            $input = $this->request->getVar();
            $this->Menu5a_model->updateaksesKph($input, $sessionKdwil);
            $flash = '<div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert"><i class="mdi mdi-check-all label-icon"></i>Data <b>realisasi KPH</b> berhasil diperbaharui<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            $this->session->setFlashdata('message', $flash);
            return redirect()->to('user/menu5a/kph');
        }

        return view('sidesa/user/menu5a/kph', $data);
    }

    public function covid()
    {
        $sessionKdwil = $this->session->get('kd_wilayah_sidesa');
        $kab = $this->Menu5a_model->danadesa_anggaran($sessionKdwil);
        if (isset($kab)) {
            $namakab = $kab['kabupaten'];
        } else {
            $namakab = '-';
        }

        // salur
        $jml_salur_reg = $this->Menu5a_model->salur_reguler($sessionKdwil);
        $januari = isset($jml_salur_reg['salur_januari']) ? $jml_salur_reg['salur_januari'] : 0;
        $februari = isset($jml_salur_reg['salur_februari']) ? $jml_salur_reg['salur_februari'] : 0;
        $maret = isset($jml_salur_reg['salur_maret']) ? $jml_salur_reg['salur_maret'] : 0;
        $april = isset($jml_salur_reg['salur_april']) ? $jml_salur_reg['salur_april'] : 0;
        $mei = isset($jml_salur_reg['salur_mei']) ? $jml_salur_reg['salur_mei'] : 0;
        $juni = isset($jml_salur_reg['salur_juni']) ? $jml_salur_reg['salur_juni'] : 0;
        $juli = isset($jml_salur_reg['salur_juli']) ? $jml_salur_reg['salur_juli'] : 0;
        $agustus = isset($jml_salur_reg['salur_agustus']) ? $jml_salur_reg['salur_agustus'] : 0;
        $september = isset($jml_salur_reg['salur_september']) ? $jml_salur_reg['salur_september'] : 0;
        $oktober = isset($jml_salur_reg['salur_oktober']) ? $jml_salur_reg['salur_oktober'] : 0;
        $november = isset($jml_salur_reg['salur_november']) ? $jml_salur_reg['salur_november'] : 0;
        $desember = isset($jml_salur_reg['salur_desember']) ? $jml_salur_reg['salur_desember'] : 0;
        $jumlah_salur_reg = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_bltdd = $this->Menu5a_model->salur_bltdd($sessionKdwil);
        $januari = isset($jml_salur_bltdd['salur_januari']) ? $jml_salur_bltdd['salur_januari'] : 0;
        $februari = isset($jml_salur_bltdd['salur_februari']) ? $jml_salur_bltdd['salur_februari'] : 0;
        $maret = isset($jml_salur_bltdd['salur_maret']) ? $jml_salur_bltdd['salur_maret'] : 0;
        $april = isset($jml_salur_bltdd['salur_april']) ? $jml_salur_bltdd['salur_april'] : 0;
        $mei = isset($jml_salur_bltdd['salur_mei']) ? $jml_salur_bltdd['salur_mei'] : 0;
        $juni = isset($jml_salur_bltdd['salur_juni']) ? $jml_salur_bltdd['salur_juni'] : 0;
        $juli = isset($jml_salur_bltdd['salur_juli']) ? $jml_salur_bltdd['salur_juli'] : 0;
        $agustus = isset($jml_salur_bltdd['salur_agustus']) ? $jml_salur_bltdd['salur_agustus'] : 0;
        $september = isset($jml_salur_bltdd['salur_september']) ? $jml_salur_bltdd['salur_september'] : 0;
        $oktober = isset($jml_salur_bltdd['salur_oktober']) ? $jml_salur_bltdd['salur_oktober'] : 0;
        $november = isset($jml_salur_bltdd['salur_november']) ? $jml_salur_bltdd['salur_november'] : 0;
        $desember = isset($jml_salur_bltdd['salur_desember']) ? $jml_salur_bltdd['salur_desember'] : 0;
        $jumlah_salur_bltdd = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_kph = $this->Menu5a_model->salur_kph($sessionKdwil);
        $januari = isset($jml_salur_kph['salur_januari']) ? $jml_salur_kph['salur_januari'] : 0;
        $februari = isset($jml_salur_kph['salur_februari']) ? $jml_salur_kph['salur_februari'] : 0;
        $maret = isset($jml_salur_kph['salur_maret']) ? $jml_salur_kph['salur_maret'] : 0;
        $april = isset($jml_salur_kph['salur_april']) ? $jml_salur_kph['salur_april'] : 0;
        $mei = isset($jml_salur_kph['salur_mei']) ? $jml_salur_kph['salur_mei'] : 0;
        $juni = isset($jml_salur_kph['salur_juni']) ? $jml_salur_kph['salur_juni'] : 0;
        $juli = isset($jml_salur_kph['salur_juli']) ? $jml_salur_kph['salur_juli'] : 0;
        $agustus = isset($jml_salur_kph['salur_agustus']) ? $jml_salur_kph['salur_agustus'] : 0;
        $september = isset($jml_salur_kph['salur_september']) ? $jml_salur_kph['salur_september'] : 0;
        $oktober = isset($jml_salur_kph['salur_oktober']) ? $jml_salur_kph['salur_oktober'] : 0;
        $november = isset($jml_salur_kph['salur_november']) ? $jml_salur_kph['salur_november'] : 0;
        $desember = isset($jml_salur_kph['salur_desember']) ? $jml_salur_kph['salur_desember'] : 0;
        $jumlah_salur_kph = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        $jml_salur_covid = $this->Menu5a_model->salur_covid($sessionKdwil);
        $januari = isset($jml_salur_covid['salur_januari']) ? $jml_salur_covid['salur_januari'] : 0;
        $februari = isset($jml_salur_covid['salur_februari']) ? $jml_salur_covid['salur_februari'] : 0;
        $maret = isset($jml_salur_covid['salur_maret']) ? $jml_salur_covid['salur_maret'] : 0;
        $april = isset($jml_salur_covid['salur_april']) ? $jml_salur_covid['salur_april'] : 0;
        $mei = isset($jml_salur_covid['salur_mei']) ? $jml_salur_covid['salur_mei'] : 0;
        $juni = isset($jml_salur_covid['salur_juni']) ? $jml_salur_covid['salur_juni'] : 0;
        $juli = isset($jml_salur_covid['salur_juli']) ? $jml_salur_covid['salur_juli'] : 0;
        $agustus = isset($jml_salur_covid['salur_agustus']) ? $jml_salur_covid['salur_agustus'] : 0;
        $september = isset($jml_salur_covid['salur_september']) ? $jml_salur_covid['salur_september'] : 0;
        $oktober = isset($jml_salur_covid['salur_oktober']) ? $jml_salur_covid['salur_oktober'] : 0;
        $november = isset($jml_salur_covid['salur_november']) ? $jml_salur_covid['salur_november'] : 0;
        $desember = isset($jml_salur_covid['salur_desember']) ? $jml_salur_covid['salur_desember'] : 0;
        $jumlah_salur_covid = intval($januari) + intval($februari) + intval($maret) + intval($april) + intval($mei) + intval($juni) + intval($juli) + intval($agustus) + intval($september) + intval($oktober) + intval($november) + intval($desember);

        // realisasi
        $jml_realisasi_reg = $this->Menu5a_model->danadesa_reguler($sessionKdwil);
        $januari_reg = isset($jml_realisasi_reg['januari']) ? $jml_realisasi_reg['januari'] : 0;
        $februari_reg = isset($jml_realisasi_reg['februari']) ? $jml_realisasi_reg['februari'] : 0;
        $maret_reg = isset($jml_realisasi_reg['maret']) ? $jml_realisasi_reg['maret'] : 0;
        $april_reg = isset($jml_realisasi_reg['april']) ? $jml_realisasi_reg['april'] : 0;
        $mei_reg = isset($jml_realisasi_reg['mei']) ? $jml_realisasi_reg['mei'] : 0;
        $juni_reg = isset($jml_realisasi_reg['juni']) ? $jml_realisasi_reg['juni'] : 0;
        $juli_reg = isset($jml_realisasi_reg['juli']) ? $jml_realisasi_reg['juli'] : 0;
        $agustus_reg = isset($jml_realisasi_reg['agustus']) ? $jml_realisasi_reg['agustus'] : 0;
        $september_reg = isset($jml_realisasi_reg['september']) ? $jml_realisasi_reg['september'] : 0;
        $oktober_reg = isset($jml_realisasi_reg['oktober']) ? $jml_realisasi_reg['oktober'] : 0;
        $november_reg = isset($jml_realisasi_reg['november']) ? $jml_realisasi_reg['november'] : 0;
        $desember_reg = isset($jml_realisasi_reg['desember']) ? $jml_realisasi_reg['desember'] : 0;
        $jumlah_realisasi_reg = intval($januari_reg) + intval($februari_reg) + intval($maret_reg) + intval($april_reg) + intval($mei_reg) + intval($juni_reg) + intval($juli_reg) + intval($agustus_reg) + intval($september_reg) + intval($oktober_reg) + intval($november_reg) + intval($desember_reg);

        $jml_realisasi_bltdd = $this->Menu5a_model->danadesa_bltdd($sessionKdwil);
        $januari_bltdd = isset($jml_realisasi_bltdd['januari']) ? $jml_realisasi_bltdd['januari'] : 0;
        $februari_bltdd = isset($jml_realisasi_bltdd['februari']) ? $jml_realisasi_bltdd['februari'] : 0;
        $maret_bltdd = isset($jml_realisasi_bltdd['maret']) ? $jml_realisasi_bltdd['maret'] : 0;
        $april_bltdd = isset($jml_realisasi_bltdd['april']) ? $jml_realisasi_bltdd['april'] : 0;
        $mei_bltdd = isset($jml_realisasi_bltdd['mei']) ? $jml_realisasi_bltdd['mei'] : 0;
        $juni_bltdd = isset($jml_realisasi_bltdd['juni']) ? $jml_realisasi_bltdd['juni'] : 0;
        $juli_bltdd = isset($jml_realisasi_bltdd['juli']) ? $jml_realisasi_bltdd['juli'] : 0;
        $agustus_bltdd = isset($jml_realisasi_bltdd['agustus']) ? $jml_realisasi_bltdd['agustus'] : 0;
        $september_bltdd = isset($jml_realisasi_bltdd['september']) ? $jml_realisasi_bltdd['september'] : 0;
        $oktober_bltdd = isset($jml_realisasi_bltdd['oktober']) ? $jml_realisasi_bltdd['oktober'] : 0;
        $november_bltdd = isset($jml_realisasi_bltdd['november']) ? $jml_realisasi_bltdd['november'] : 0;
        $desember_bltdd = isset($jml_realisasi_bltdd['desember']) ? $jml_realisasi_bltdd['desember'] : 0;
        $jumlah_realisasi_bltdd = intval($januari_bltdd) + intval($februari_bltdd) + intval($maret_bltdd) + intval($april_bltdd) + intval($mei_bltdd) + intval($juni_bltdd) + intval($juli_bltdd) + intval($agustus_bltdd) + intval($september_bltdd) + intval($oktober_bltdd) + intval($november_bltdd) + intval($desember_bltdd);

        $jml_realisasi_kph = $this->Menu5a_model->danadesa_kph($sessionKdwil);
        $januari_kph = isset($jml_realisasi_kph['januari']) ? $jml_realisasi_kph['januari'] : 0;
        $februari_kph = isset($jml_realisasi_kph['februari']) ? $jml_realisasi_kph['februari'] : 0;
        $maret_kph = isset($jml_realisasi_kph['maret']) ? $jml_realisasi_kph['maret'] : 0;
        $april_kph = isset($jml_realisasi_kph['april']) ? $jml_realisasi_kph['april'] : 0;
        $mei_kph = isset($jml_realisasi_kph['mei']) ? $jml_realisasi_kph['mei'] : 0;
        $juni_kph = isset($jml_realisasi_kph['juni']) ? $jml_realisasi_kph['juni'] : 0;
        $juli_kph = isset($jml_realisasi_kph['juli']) ? $jml_realisasi_kph['juli'] : 0;
        $agustus_kph = isset($jml_realisasi_kph['agustus']) ? $jml_realisasi_kph['agustus'] : 0;
        $september_kph = isset($jml_realisasi_kph['september']) ? $jml_realisasi_kph['september'] : 0;
        $oktober_kph = isset($jml_realisasi_kph['oktober']) ? $jml_realisasi_kph['oktober'] : 0;
        $november_kph = isset($jml_realisasi_kph['november']) ? $jml_realisasi_kph['november'] : 0;
        $desember_kph = isset($jml_realisasi_kph['desember']) ? $jml_realisasi_kph['desember'] : 0;
        $jumlah_realisasi_kph = intval($januari_kph) + intval($februari_kph) + intval($maret_kph) + intval($april_kph) + intval($mei_kph) + intval($juni_kph) + intval($juli_kph) + intval($agustus_kph) + intval($september_kph) + intval($oktober_kph) + intval($november_kph) + intval($desember_kph);

        $jml_realisasi_covid = $this->Menu5a_model->danadesa_covid($sessionKdwil);
        $januari_covid = isset($jml_realisasi_covid['januari']) ? $jml_realisasi_covid['januari'] : 0;
        $februari_covid = isset($jml_realisasi_covid['februari']) ? $jml_realisasi_covid['februari'] : 0;
        $maret_covid = isset($jml_realisasi_covid['maret']) ? $jml_realisasi_covid['maret'] : 0;
        $april_covid = isset($jml_realisasi_covid['april']) ? $jml_realisasi_covid['april'] : 0;
        $mei_covid = isset($jml_realisasi_covid['mei']) ? $jml_realisasi_covid['mei'] : 0;
        $juni_covid = isset($jml_realisasi_covid['juni']) ? $jml_realisasi_covid['juni'] : 0;
        $juli_covid = isset($jml_realisasi_covid['juli']) ? $jml_realisasi_covid['juli'] : 0;
        $agustus_covid = isset($jml_realisasi_covid['agustus']) ? $jml_realisasi_covid['agustus'] : 0;
        $september_covid = isset($jml_realisasi_covid['september']) ? $jml_realisasi_covid['september'] : 0;
        $oktober_covid = isset($jml_realisasi_covid['oktober']) ? $jml_realisasi_covid['oktober'] : 0;
        $november_covid = isset($jml_realisasi_covid['november']) ? $jml_realisasi_covid['november'] : 0;
        $desember_covid = isset($jml_realisasi_covid['desember']) ? $jml_realisasi_covid['desember'] : 0;
        $jumlah_realisasi_covid = intval($januari_covid) + intval($februari_covid) + intval($maret_covid) + intval($april_covid) + intval($mei_covid) + intval($juni_covid) + intval($juli_covid) + intval($agustus_covid) + intval($september_covid) + intval($oktober_covid) + intval($november_covid) + intval($desember_covid);

        $data = [
            'title' => 'Realisasi COVID-19',
            'page_title' => view('sidesa/layout/user/content-page-title', ['title' => 'Realisasi Dana Desa Covid-19 ' . $namakab . ' ' . date("Y"), 'li_1' => 'Menu5a', 'li_2' => 'Realisasi']),
            'user' => $this->db->table('sidesa_user')->getWhere(['email' => $this->session->get('email_sidesa')])->getRowArray(),
            'danadesa' => $this->Menu5a_model->danadesa_anggaran($sessionKdwil),
            // 'salur' => $this->Menu5a_model->danadesa_salur($sessionKdwil),
            'jumlah_salur_covid' => $jumlah_salur_covid,
            'covid' => $this->Menu5a_model->danadesa_covid($sessionKdwil),
            'jumlah_realisasi' => $jumlah_realisasi_covid,
            'grand_total_salur' => $jumlah_salur_reg + $jumlah_salur_bltdd + $jumlah_salur_kph + $jumlah_salur_covid,
            'grand_total_realisasi' => $jumlah_realisasi_reg + $jumlah_realisasi_bltdd + $jumlah_realisasi_kph + $jumlah_realisasi_covid,
            // 'validation' =>  $this->validation
        ];

        if (isset($_POST['update'])) {
            $input = $this->request->getVar();
            $this->Menu5a_model->updateaksesCovid($input, $sessionKdwil);
            $flash = '<div class="alert alert-success alert-dismissible alert-label-icon label-arrow fade show" role="alert"><i class="mdi mdi-check-all label-icon"></i>Data <b>realisasi Covid-19</b> berhasil diperbaharui<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            $this->session->setFlashdata('message', $flash);
            return redirect()->to('user/menu5a/covid');
        }

        return view('sidesa/user/menu5a/covid', $data);
    }
}
