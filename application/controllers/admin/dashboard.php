<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Admin');
        // $this->load->model('Petugas_model');
    }

    public function index()
    {
        // $this->Petugas_model->setWilayah();
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/template/footer');
    }

	public function editPassword()
	{
		$this->load->view('admin/template/header');
        $this->load->view('admin/template/sidebar');
        $this->load->view('admin/editPassword');
        $this->load->view('admin/template/footer');
	}

	public function ubahPw()
	{
		$pw1 = $this->input->post('pw1');
		$pw2 = $this->input->post('pw2');

		if($pw1 == $pw2){
			
			

			redirect('admin/dashboard/editPassword');

		}

	}
    
}
