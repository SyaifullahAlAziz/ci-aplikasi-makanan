<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('id_admin')) {
            $this->session->set_flashdata('success', '<div class="alert alert-primary" role="alert">
						  Selamat Datang di Dashboard Admin!!!
						</div>');
            redirect(base_url('dashboard'), 'refresh');
        }

        $this->load->view('login');
    }

    public function proses_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_admin', ['username' => $username, 'password' => sha1($password)]);

        if ($user->num_rows() > 0) {
            $datauser = $user->row();

            $data = [
                'id_admin' => $datauser->id_admin,
                'username' => $datauser->username,
                'nama_lengkap' => $datauser->nama_lengkap,
            ];

            $this->session->set_userdata($data);
            $this->session->set_flashdata('success', '<div class="alert alert-primary" role="alert">
							  Selamat Datang di Dashboard Admin!!!
							</div>');
            redirect(base_url('dashboard'), 'refresh');
        } else {
            $this->session->set_flashdata('success', '<div class="alert alert-danger" role="alert">
						  Username atau Password Anda Salah!!!
						</div>');
            redirect(base_url('login'), 'refresh');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'), 'refresh');
    }
}
