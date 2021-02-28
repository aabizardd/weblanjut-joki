<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Posyandu extends CI_Controller
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

        if ($this->Petugas_model->isNotLogin()) {
            redirect(site_url('posyandu/PetugasPosiandu'));
        }

    }

    public function index()
    {
        // $this->Petugas_model->setWilayah();

        $tamp["jmlDaftar"] = $this->M_Admin->getCountJmlDaftar();
        $tamp["jmlPencatatan"] = $this->M_Admin->getCountJmlPencatatan();
        $tamp["jmlLaporan"] = $this->M_Admin->getCountJmlLaporan();
        $tamp["jmlHistory"] = $this->M_Admin->getCountJmlHistory();
        $tamp["cek"] = array();
        $bln = "";
        $tahun = gmdate("Y", time() + 60 * 60 * 8);
        for ($i = 0; $i < 12; $i++) {
            if ($i + 1 <= 9) {
                $bln = "0" . ($i + 1);
            } else {
                $bln = ($i + 1);
            }
            $cek = $this->M_Admin->getlike($tahun, $bln);
            $tamp["cek"][$i] = $cek[0]->jml;
            //echo $tamp["cek"][$i]."<br>";
        }

        $ubah = gmdate("Y-m-d", time() + 60 * 60 * 8);
        $pecah = explode("-", $ubah);
        $tahun = $pecah[0];

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu', $tamp);
        $this->load->view('admin/template/footer');
    }

    public function kodeAkses()
    {
        $data = [
            'kodeAkses' => $this->M_Admin->getKodeAkses('Posyandu')->result(),
        ];
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu_kodeAkses', $data);
        $this->load->view('admin/template/footer');
    }

    public function editKodeAkses($id)
    {
        $data = [
            'kodeAkses' => $this->M_Admin->getKode($id)->row(),
        ];
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu_editkodeAkses', $data);
        $this->load->view('admin/template/footer');
    }

    public function updateKode()
    {
        $id = $this->input->post('id_kode');
        $data = [
            'password' => $this->input->post('kode'),
        ];
        $this->M_Admin->update('password_akses', $id, $data);
        redirect('admin/posyandu/kodeAkses');
    }

    public function jadwalPosyandu()
    {
        //fungsi default
        $jadwal = $this->Mjadwal->selectData();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');

        $this->load->view('admin/posyandu_jadwal', [
            'data' => $jadwal, //model ke view
        ]);
        $this->load->view('admin/template/footer');
    }

    public function tambahJadwal()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');

        $data = [
            'data' => $this->Mjadwal->selectData(),
            'login' => $this->session->userdata(),
            'petugas' => $this->M_Admin->getAllPetugas()->result_array(),
            'wilayah' => $this->M_Admin->getAllWilayah(), //model ke view
        ];
        $this->load->view('admin/posyandu_tambahJadwal', $data);
        $this->load->view('admin/template/footer');
    }

    public function editJadwal($id)
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');

        $data = [
            'data' => $this->Mjadwal->selectData(),
            'current' => $this->M_Admin->getJadwal($id)->row(),
            'petugas' => $this->M_Admin->getAllPetugas()->result_array(),
            'wilayah' => $this->M_Admin->getAllWilayah(), //model ke view
        ];
        $this->load->view('admin/posyandu_ubahJadwal', $data);
        $this->load->view('admin/template/footer');
    }

    public function addJadwal()
    {
        $data = [
            'id_jadwal' => $this->input->post('id_jadwal'),
            'nama' => $this->input->post('nama_petugas'),
            'bln' => $this->input->post('bulan'),
            'thn' => $this->input->post('tahun'),
            'wilayah' => $this->input->post('wilayah'),
        ];
        $this->M_Admin->insert('jadwal', $data);
        redirect('admin/posyandu/jadwalPosyandu');
    }

    public function ubahJadwal()
    {
        $id = $this->input->post('id_jadwal');
        $data = [
            'nama' => $this->input->post('nama_petugas'),
            'bln' => $this->input->post('bulan'),
            'thn' => $this->input->post('tahun'),
            'wilayah' => $this->input->post('wilayah'),
        ];

        $this->M_Admin->update('jadwal', $id, $data);
        redirect('admin/posyandu/jadwalPosyandu');
    }

    public function deleteJadwal($id)
    {
        $this->M_Admin->delete('jadwal', ['id_jadwal' => $id]);
        redirect('admin/posyandu/jadwalPosyandu');
    }

    public function wilayahPosyandu()
    {
        //fungsi default
        $wilayah = $this->Wilayah_model->getAll();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');

        $this->load->view('admin/posyandu_wilayah', [
            'data' => $wilayah, //model ke view
        ]);
        $this->load->view('admin/template/footer');
    }

    public function tambahWilayah()
    {
        $wilayah = $this->Wilayah_model->getAll();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');

        $this->load->view('admin/posyandu_tambahWilayah', [
            'data' => $wilayah, //model ke view
        ]);
        $this->load->view('admin/template/footer');
    }

    public function addWilayah()
    {
        $data = [
            'nama_wilayah' => $this->input->post('nama_wilayah'),
            'kelurahan' => $this->input->post('kelurahan'),
            'rw' => $this->input->post('rw'),
            'rt' => $this->input->post('rt'),
            'nama_posyandu' => $this->input->post('nama_posyandu'),
        ];
        $this->M_Admin->insert('wilayah', $data);

        redirect('admin/posyandu/wilayahPosyandu');
    }

    public function editWilayah($id)
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');

        $data = [
            'data' => $this->Mjadwal->selectData(),
            'current' => $this->M_Admin->getwilayah($id)->row(),
            'petugas' => $this->M_Admin->getAllPetugas()->result_array(),
            'wilayah' => $this->M_Admin->getAllWilayah(), //model ke view
        ];
        $this->load->view('admin/posyandu_ubahWilayah', $data);
        $this->load->view('admin/template/footer');
    }

    public function ubahWilayah()
    {
        $id = $this->input->post('id_wilayah');
        $data = [
            'nama_wilayah' => $this->input->post('nama_wilayah'),
            'kelurahan' => $this->input->post('kelurahan'),
            'rt' => $this->input->post('rt'),
            'rw' => $this->input->post('rw'),
            'nama_posyandu' => $this->input->post('nama_posyandu'),
        ];

        $this->M_Admin->update('wilayah', $id, $data);
        redirect('admin/posyandu/wilayahPosyandu');
    }

    public function dataPetugas()
    {
        $petugas = $this->Mpetugas;
        $data['daftarpetugas'] = $petugas->getAll();

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');

        $this->load->view('admin/posyandu_petugas', $data);
        $this->load->view('admin/template/footer');
    }

    public function daftarPasien()
    {
        $data["pendaftaran"] = $this->M_Admin->getAllPasienPosyandu();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu_daftarPasien', $data);
        $this->load->view('admin/template/footer');
    }

    public function pencatatanMedis()
    {
        $data["pencatatan"] = $this->M_Admin->get_by_role_pencatatanMedis();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu_pencatatanMedis', $data);
        $this->load->view('admin/template/footer');
    }

    public function laporan($bln = null)
    {
        $data["pendaftaran"] = $this->M_Admin->getAllLaporanPosyandu();

        $data['showGraph'] = 'posyandu';

        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $namaGrafik = ['Jumlah Pasien', 'Buku Posyandu', 'Jumlah Pemeriksaan Pasien'];
        $data['graph'] = $namaGrafik;

        $data['bulan'] = $bulan;

        $data['wilayah'] = $this->M_Admin->selectAll('wilayah');

        if (!is_null($bln)) {
            $data['graph1'] = $this->Regisanak_model->getDataGraph(1, $bln);
            $data['graph2'] = $this->Regisanak_model->getDataGraph(1, $bln);
            $data['graph3'] = $this->Regisanak_model->getDataGraph(2, $bln);
        } else {
            $data['graph1'] = $this->Regisanak_model->getDataGraph(1);
            $data['graph2'] = $this->Regisanak_model->getDataGraph(1);
            $data['graph3'] = $this->Regisanak_model->getDataGraph(2);
        }

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu_laporan', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function laporanDetail($id)
    {
        $data["pendaftaran"] = $this->M_Admin->getById($id);
        $data["pencatatan"] = $this->M_Admin->getJoinAll($id);
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu_laporanDetail', $data);
        $this->load->view('admin/template/footer');
    }

    public function historyLaporan()
    {
        $data["history"] = $this->M_Admin->getAllHistoryPosyandu();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu_historyLaporan', $data);
        $this->load->view('admin/template/footer');
    }

    public function pasienRujukan()
    {
        $data["pasienrujukans"] = $this->M_Admin->getAllPasienRujukan();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu_pasienRujukan', $data);
        $this->load->view('admin/template/footer');
    }

    public function deleteWilayah($id_wilayah)
    {

        $this->db->where('id_wilayah', $id_wilayah);
        $this->db->delete('wilayah');
        // $this->Mjadwal->deleteMk($id_jadwal);
        redirect('admin/posyandu/wilayahPosyandu');
    }

    public function detailPasien($id)
    {

        $regisanak = $this->Regisanak_model;

        $data["pendaftaran"] = $regisanak->getById($id);

        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu_detailPasien', $data);
        $this->load->view('admin/template/footer');
    }

    public function kelolaKategori()
    {
        $data['kategoriUsia'] = $this->M_Admin->selectAll('kategori_usia')->result_array();
        $data['imunisasi'] = $this->M_Admin->selectAll('imunisasi')->result_array();
        $data['vitamin'] = $this->M_Admin->selectAll('vitamin')->result_array();
        $data['obatCacing'] = $this->M_Admin->selectAll('obat_cacing')->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/posyandu_KategoriMedis', $data);
        $this->load->view('admin/template/footer');
    }

    public function getKategori($type, $id)
    {
        if ($type == 'kategoriUsia') {
            $data = $this->M_Admin->selectWhere('kategori_usia', ['id_usia' => $id])->row();
            echo json_encode($data);
        }elseif ($type == 'imunisasi') {
            $data = $this->M_Admin->selectWhere('imunisasi', ['id_imunisasi' => $id])->row();
            echo json_encode($data);
        }elseif ($type == 'vitamin') {
            $data = $this->M_Admin->selectWhere('vitamin', ['id_vitamin' => $id])->row();
            echo json_encode($data);
        }elseif ($type == 'obatCacing') {
            $data = $this->M_Admin->selectWhere('obat_cacing', ['id_obat' => $id])->row();
            echo json_encode($data);
        }
        
    }

    public function addKategori($type)
    {
        if ($type == 'kategoriUsia') {
            $data = [
                'usia' => $this->input->post('kategoriUsia'),
            ];
    
            $this->M_Admin->insert('kategori_usia', $data);
            redirect('admin/posyandu/kelolaKategori');
        }elseif ($type == 'imunisasi') {
            $data = [
                'imunisasi' => $this->input->post('jenisImunisasi'),
            ];
    
            $this->M_Admin->insert('imunisasi', $data);
            redirect('admin/posyandu/kelolaKategori');
        }elseif ($type == 'vitamin') {
            $data = [
                'vitamin' => $this->input->post('vitamin'),
            ];
    
            $this->M_Admin->insert('vitamin', $data);
            redirect('admin/posyandu/kelolaKategori');
        }elseif ($type == 'obatCacing') {
            $data = [
                'obatCacing' => $this->input->post('obatCacing'),
            ];
    
            $this->M_Admin->insert('obat_cacing', $data);
            redirect('admin/posyandu/kelolaKategori');
        }
    }

    public function editKategori($type, $id)
    {
        if ($type == 'kategoriUsia') {
            $data = [
                'usia' => $this->input->post('kategoriUsia'),
            ];
            $this->M_Admin->updatekategori('kategori_usia', ['id_usia' => $id ], $data);
            redirect('admin/posyandu/kelolaKategori');
        }elseif ($type == 'imunisasi') {
            $data = [
                'imunisasi' => $this->input->post('jenisImunisasi'),
            ];
            $this->M_Admin->updatekategori('imunisasi', ['id_imunisasi' => $id ], $data);
            redirect('admin/posyandu/kelolaKategori');
        }elseif ($type == 'vitamin') {
            $data = [
                'vitamin' => $this->input->post('vitamin'),
            ];
            $this->M_Admin->updatekategori('vitamin', ['id_vitamin' => $id ], $data);
            redirect('admin/posyandu/kelolaKategori');
        }elseif ($type == 'obatCacing') {
            $data = [
                'obatCacing' => $this->input->post('obatCacing'),
            ];
            $this->M_Admin->updatekategori('obat_cacing', ['id_obat' => $id ], $data);
            redirect('admin/posyandu/kelolaKategori');
        }
    }

    public function hapusKategori($type, $id)
    {
        if ($type == 'kategoriUsia') {
            $this->M_Admin->deleteKategori('kategori_usia', ['id_usia' => $id]);
            redirect('admin/posyandu/kelolaKategori');
        }elseif ($type == 'imunisasi') {
            $this->M_Admin->deleteKategori('imunisasi', ['id_imunisasi' => $id]);
            redirect('admin/posyandu/kelolaKategori');
        }elseif ($type == 'vitamin') {
            $this->M_Admin->deleteKategori('vitamin', ['id_vitamin' => $id]);
            redirect('admin/posyandu/kelolaKategori');
        }elseif ($type == 'obatCacing') {
            $this->M_Admin->deleteKategori('obat_cacing', ['id_obat' => $id]);
            redirect('admin/posyandu/kelolaKategori');
        }
    }
}