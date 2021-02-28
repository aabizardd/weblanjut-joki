<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Petugas_model');
        $this->load->model('Puskesmas_model');
        $this->load->model('M_Admin');

        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('sesi_verify')) {
            redirect('puskesmas/login_puskesmas');
        }

        $data['role'] = $this->uri->segment(3);
        // echo $role;

        $this->load->view('admin/puskesmas/login/verify_code', $data);
    }

    public function verify_code($uri)
    {
        // $roles = $this->uri->segment(3);

        $code = $this->Puskesmas_model->getVerifyCode($uri);
        // $adminCode = $this->M_Admin->cekKodeAdmin();

        $kode = $this->input->post('code');

            if ($kode == $code['password']) {
                $this->session->set_userdata('sesi_verify', true);
                if ($uri == 'Puskesmas') {
                    redirect('puskesmas/login_puskesmas');
                } elseif ($uri == 'Posyandu') {
                    redirect('posyandu/login_posyandu');
                } elseif ($uri == 'Superadmin'){
                    redirect('admin/login');
                }
            } else {
                $this->session->set_flashdata('pesan', 'kode verifikasi salah');
                redirect('verify/code/' . $uri);
            }
    }

    public function cek_login()
    {
        if (!$this->session->userdata('sesi_verify')) {
            redirect('puskesmas');
        }

        $email = $this->input->post('email');

        $user = $this->db
            ->get_where('petugas', [
                'username' => $email,
            ])
            ->row_array();
        //cek user ada atau tidak
        if ($user) {
            //ini user ada
            //cek user->email sudah aktif atau belum
            if ($user['status_aktif'] == 1) {
                if ($this->input->post()) {
                    if ($this->Petugas_model->doLogin2()) {
                        $this->session->userdata();
                        $this->session->unset_userdata('sesi_verify');
                        $this->session->set_flashdata(
                            'success',
                            'Selamat Datang di Puskesmas'
                        );
                        //var_dump($this->session->user_logged->username)."<br>".;die;
                        redirect(site_url('puskesmas'));
                    } else {
                        $this->session->set_flashdata(
                            'error',
                            'Username atau Password Salah'
                        );
                    }
                }
            } else {
                //akun belum aktif
                $this->session->set_flashdata(
                    'alert',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Maaf!</strong> akun kamu belum aktif!
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			  	</div>'
                );
                redirect('puskesmas/login_puskesmas');
            }
        } else {
            //email belum terdaftar
            // $this->session->set_flashdata(
            //     'alert',
            //     '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            // <strong>Maaf!</strong> akun kamu belum terdaftar!
            // <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            // <span aria-hidden="true">&times;</span>
            // </button>
            //   </div>'
            // );
            // redirect('puskesmas/login_puskesmas');
        }

        //jika form login disubmit

        // tampilkan halaman login
        $this->load->view('admin/puskesmas/login/login');
    }

    public function logout()
    {
        // hancurkan semua sesi
        $this->session->sess_destroy();
        redirect(site_url('home/reza'));
    }

    public function registrasi()
    {
        //fungsi default
        $this->load->view('posiandu/petugas/registrasi');
    }
}