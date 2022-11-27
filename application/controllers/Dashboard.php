<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('id_admin')) {
      $data['kantin'] = $this->db->query("SELECT COUNT(id_kantin) AS jumlah_kantin FROM tb_kantin")->row();
      $data['keranjang'] = $this->db->query("SELECT COUNT(id_keranjang) AS jumlah_keranjang FROM tb_keranjang")->row();
      $data['menu'] = $this->db->query("SELECT COUNT(id_menu) AS jumlah_menu FROM tb_menu")->row();
      $data['order'] = $this->db->query("SELECT COUNT(id_order) AS jumlah_order FROM tb_order")->row();

      $this->load->view('layout/header');
      $this->load->view('layout/sidebar');
      $this->load->view('dashboard', $data);
      $this->load->view('layout/footer');
    } else {
      redirect(base_url('login'), 'refresh');
    }
  }
}
