<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Petugas_model");
        if ($this->Petugas_model->isNotLogin()) {
            redirect(site_url('puskesmas/login'));
        }

        if ($this->Petugas_model->cekStatus() != 'puskesmas') {
            redirect(site_url('posyandu'));
        }

        $this->load->model("ibuhamil_model");
        $this->load->model("pemeriksaan_model");
        $this->load->model("regisanak_model");
        $this->load->model("pencatatan_model");
        $this->load->model("M_Admin");
        $this->load->library('form_validation');
        // load form and url helpers
        $this->load->helper(array('form', 'url'));
    }

    public function index($bln = null)
    {
        $data['ibuhamils'] = $this->ibuhamil_model->getAll();
        $namaGrafik = ['Jumlah Pasien', 'Buku KTA', 'Jumlah Pemeriksaan Pasien'];
        $data['namaGrafik'] = $namaGrafik;
        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $data['bulan'] = $bulan;

        $data['wilayah'] = $this->M_Admin->selectAll('wilayah');
        // $data['maxValPosy'] = $this->Regisanak_model->getMaxValPosy();

        // $data['showGraph'] = "puskesmas";

        if (!is_null($bln)) {
            $data['graph1'] = $this->ibuhamil_model->getDataGraph(1, $bln);
            $data['graph2'] = $this->ibuhamil_model->getDataGraph(1, $bln);
            $data['graph3'] = $this->ibuhamil_model->getDataGraph(2, $bln);
        } else {
            $data['graph1'] = $this->ibuhamil_model->getDataGraph(1);
            $data['graph2'] = $this->ibuhamil_model->getDataGraph(1);
            $data['graph3'] = $this->ibuhamil_model->getDataGraph(2);
        }

        $this->load->view('layout/head');
        $this->load->view("admin/puskesmas/laporan/pemeriksaanpasien", $data);
        $this->load->view('layout/foot');

        $this->load->view('admin/_partials/graph-bar-puskesmas', $data);

    }

    public function detail($key = null)
    {
        if (!isset($key)) {
            redirect(site_url('puskesmas/laporan'));
        }

        $data['ibuhamil'] = $this->ibuhamil_model->getById($key);
        $data['pemeriksaans'] = $this->pemeriksaan_model->getDataPemeriksaanPasien($key);

        $this->load->view('layout/head');
        $this->load->view("admin/puskesmas/laporan/detailpemeriksaan", $data);
        $this->load->view('layout/foot');
    }

    public function posyandu()
    {
        $data["pendaftaran"] = $this->pencatatan_model->getAllHistory2();
        $this->load->view('layout/head.php');
        $this->load->view('admin/puskesmas/laporan/posyandu', $data);
        $this->load->view('layout/foot.php');
    }

    public function posyandu_detail($id = null)
    {

        if (!isset($id)) {
            redirect('puskesmas/Laporan');
        }

        $pencatatan = $this->pencatatan_model;
        $regisanak = $this->regisanak_model;

        $data2["pendaftaran"] = $regisanak->getById($id);
        $data["pencatatan"] = $pencatatan->getJoinAll($id);

        $this->load->view('layout/head.php');
        $this->load->view('admin/puskesmas/laporan/detail', $arrayName = array('pencatatan' => $pencatatan->getJoinAll($id),
            'pendaftaran' => $regisanak->getById($id)));
        $this->load->view('layout/foot.php');
    }
}