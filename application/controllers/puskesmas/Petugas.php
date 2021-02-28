<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("petugasindex_model");
        if($this->petugasindex_model->isNotLogin()) redirect(site_url('puskesmas/login'));
        if($this->petugasindex_model->cekStatus()!='puskesmas') redirect(site_url('posyandu'));

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function index()
    {
        $petugas = $this->petugasindex_model;

        $data['daftarpetugas'] = $petugas->getAll();
        

        $this->load->view('layout/head');

        $this->load->view('admin/puskesmas/petugas/data', $data);
        
		$this->load->view('layout/foot');
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('home/reza'));
    }

    public function registrasi(){//fungsi default
        $this->load->view('posiandu/petugas/registrasi');
    }


    public function add_form()
    {
        $this->load->view('layout/head');

        $this->load->view('admin/puskesmas/petugas/formtambah');
        
		$this->load->view('layout/foot');
    }

    public function add()
    {
        $petugas = $this->petugasindex_model;
        // $validation = $this->form_validation;
        // $validation->set_rules($petugas->rules());

        // if ($validation->run()) {
            $petugas->save2();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        //     redirect(site_url('puskesmas/petugas'));
        // }

        redirect(site_url('puskesmas/petugas'));
    }

    public function edit_form($id = null)
    {
        $petugas = $this->petugasindex_model;
        
        $data["petugas"] = $this->petugasindex_model->getById($id);

        $this->load->view('layout/head');
        $this->load->view("admin/puskesmas/petugas/formEdit", $data);
        $this->load->view('layout/foot');
    }
    
    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/puskesmas/petugas');
       
        $petugas = $this->petugasindex_model;
        // $validation = $this->form_validation;
        // $validation->set_rules($petugas->rules());

        // if ($validation->run()) {
            $petugas->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('puskesmas/petugas'));
        // }

        $data["petugas"] = $petugas->getById($id);
        if (!$data["petugas"]) show_404();

        $this->load->view('layout/head');
        $this->load->view("admin/puskesmas/petugas/formEdit", $data);
        $this->load->view('layout/foot');
        // redirect(site_url('puskesmas/petugas/'));

    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->petugasindex_model->delete($id)) {
            $this->session->set_flashdata('success', 'Berhasil dihapus');
            redirect(site_url('puskesmas/petugas'));
        }
    }
  
}