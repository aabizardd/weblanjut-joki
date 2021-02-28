<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Puskesmas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Petugas_model");
        $this->load->model("Regisanak_model");
        $this->load->model("Pencatatan_model");
        $this->load->model('Mjadwal');
        $this->load->model('Wilayah_model');
        $this->load->model("Mpetugas");
        $this->load->model("Petugas_model");
        $this->load->model('pasienrujukan_model');
        $this->load->model('M_Admin');
        $this->load->model('ibuhamil_model');
        $this->load->model('pemeriksaan_model');
        $this->load->model("pasienrujukan_modelP");

        if ($this->Petugas_model->isNotLogin()) {
            redirect(site_url('posyandu/PetugasPosiandu'));
        }

    }

    public function index()
    {
        // $this->Petugas_model->setWilayah();
        $data['ibu'] = $this->ibuhamil_model->countAllData();
        $data['pemeriksaan'] = $this->pemeriksaan_model->countAllData();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/puskesmas', $data);
        $this->load->view('admin/template/footer');
    }

    public function kodeAkses()
    {
        $data = [
            'kodeAkses' => $this->M_Admin->getKodeAkses('Puskesmas')->result(),
        ];
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/puskesmas_kodeAkses', $data);
        $this->load->view('admin/template/footer');
    }

    public function editKodeAkses($id)
    {
        $data = [
            'kodeAkses' => $this->M_Admin->getKode($id)->row(),
        ];
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/puskesmas_editkodeAkses', $data);
        $this->load->view('admin/template/footer');
    }

    public function updateKode()
    {
        $id = $this->input->post('id_kode');
        $data = [
            'password' => $this->input->post('kode'),
        ];
        $this->M_Admin->update('password_akses', $id, $data);
        redirect('admin/puskesmas/kodeAkses');
    }

    public function ibuHamil()
    {
        $data['ibuhamil'] = $this->ibuhamil_model->getAll();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/puskesmas_ibuHamil', $data);
        $this->load->view('admin/template/footer');
    }

    public function pemeriksaanIbuHamil()
    {
        $pemeriksaan = $this->pemeriksaan_model;

        $data['pemeriksaans'] = $pemeriksaan->getAll();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/puskesmas_pemeriksaanIbuHamil', $data);
        $this->load->view('admin/template/footer');
    }

    public function pasienRujukan()
    {

        $data["pasienrujukans"] = $this->pasienrujukan_modelP->getAll();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/puskesmas_dataPasienRujukan', $data);
        $this->load->view('admin/template/footer');
    }

    public function dataPetugas()
    {

        $petugas = $this->Mpetugas;
        $data['daftarpetugas'] = $petugas->getAll();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/puskesmas_dataPetugas', $data);
        $this->load->view('admin/template/footer');
    }

    public function laporanPuskesmas($bln = null)
    {

        $data['ibuhamils'] = $this->ibuhamil_model->getAll();

        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $namaGrafik = ['Jumlah Pasien', 'Buku KTA', 'Jumlah Pemeriksaan Pasien'];
        $data['graph'] = $namaGrafik;

        $data['bulan'] = $bulan;

        $data['wilayah'] = $this->ibuhamil_model->getWilayah();

        $data['showGraph'] = "puskesmas";

        if (!is_null($bln)) {
            $data['graph1'] = $this->ibuhamil_model->getDataGraph(1, $bln);
            $data['graph2'] = $this->ibuhamil_model->getDataGraph(1, $bln);
            $data['graph3'] = $this->ibuhamil_model->getDataGraph(2, $bln);
        } else {
            $data['graph1'] = $this->ibuhamil_model->getDataGraph(1);
            $data['graph2'] = $this->ibuhamil_model->getDataGraph(1);
            $data['graph3'] = $this->ibuhamil_model->getDataGraph(2);
        }

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/puskesmas_laporan', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function laporanDetail($id)
    {
        $data['ibuhamil'] = $this->ibuhamil_model->getById($id);
        $data['pemeriksaans'] = $this->pemeriksaan_model->getDataPemeriksaanPasien($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/puskesmas_laporanDetail',$data);
        $this->load->view('admin/template/footer');
    }

    public function kelolaKategori()
    {
        $data['jenisBayar'] = $this->M_Admin->selectAll('jenis_pembayaran')->result_array();
        $data['kondisihb'] = $this->M_Admin->selectAll('kondisi_hb')->result_array();
        $data['letakbayi'] = $this->M_Admin->selectAll('letak_bayi')->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/puskesmas_kelolaKategori', $data);
        $this->load->view('admin/template/footer');
    }

    public function getKategori($type, $id)
    {
        if ($type == 'jenisBayar') {
            $data = $this->M_Admin->selectWhere('jenis_pembayaran', ['id_jenis' => $id])->row();
            echo json_encode($data);
        } elseif ($type == 'kondisiHb') {
            $data = $this->M_Admin->selectWhere('kondisi_hb', ['id_hb' => $id])->row();
            echo json_encode($data);
        } elseif ($type == 'letakBayi') {
            $data = $this->M_Admin->selectWhere('letak_bayi', ['id_letak' => $id])->row();
            echo json_encode($data);
        }
    }

    public function addkategori($type)
    {
        if ($type == 'jenisPembayaran') {
            $data = [
                'pembayaran' => $this->input->post('jenisPembayaran'),
            ];

            $this->M_Admin->insert('jenis_pembayaran', $data);
            redirect('admin/puskesmas/kelolaKategori');
        } elseif ($type == 'kondisiHB') {
            $data = [
                'kondisiHb' => $this->input->post('kondisiHB'),
            ];

            $this->M_Admin->insert('kondisi_hb', $data);
            redirect('admin/puskesmas/kelolaKategori');
        } elseif ($type == 'letakBayi') {
            $data = [
                'letakBayi' => $this->input->post('letakBayi'),
            ];

            $this->M_Admin->insert('letak_bayi', $data);
            redirect('admin/puskesmas/kelolaKategori');
        }
    }

    public function editkategori($type, $id)
    {
        if ($type == 'jenisBayar') {
            $data = [
                'pembayaran' => $this->input->post('jenisPembayaran'),
            ];
            $this->M_Admin->updatekategori('jenis_pembayaran', ['id_jenis' => $id], $data);
            redirect('admin/puskesmas/kelolaKategori');
        } elseif ($type == 'kondisiHb') {
            $data = [
                'kondisiHb' => $this->input->post('kondisiHB'),
            ];
            $this->M_Admin->updatekategori('kondisi_hb', ['id_hb' => $id], $data);
            redirect('admin/puskesmas/kelolaKategori');
        } elseif ($type == 'letakBayi') {
            $data = [
                'letakBayi' => $this->input->post('letakBayi'),
            ];
            $this->M_Admin->updatekategori('letak_bayi', ['id_letak' => $id], $data);
            redirect('admin/puskesmas/kelolaKategori');
        }
    }

    public function hapusKategori($type, $id)
    {
        if ($type == 'jenisBayar') {
            $this->M_Admin->deleteKategori('jenis_pembayaran', ['id_jenis' => $id]);
            redirect('admin/puskesmas/kelolaKategori');
        } elseif ($type == 'kondisiHb') {
            $this->M_Admin->deleteKategori('kondisi_hb', ['id_hb' => $id]);
            redirect('admin/puskesmas/kelolaKategori');
        } elseif ($type == 'letakBayi') {
            $this->M_Admin->deleteKategori('letak_bayi', ['id_letak' => $id]);
            redirect('admin/puskesmas/kelolaKategori');
        }
    }
}