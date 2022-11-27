<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('id_admin')) {
            $data['order'] = $this->db->query("SELECT * FROM tb_detail_order
            JOIN tb_order ON tb_detail_order.no_antrian=tb_order.no_antrian
            JOIN tb_user ON tb_detail_order.id_user=tb_user.id_user
            JOIN tb_menu ON tb_detail_order.id_menu=tb_menu.id_menu
            ORDER BY tb_detail_order.id_detail_order DESC")->result();

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('order/index', $data);
            $this->load->view('layout/footer');
        } else {
            redirect(base_url('login'), 'refresh');
        }
    }

    public function detail($id)
    {
        $data['detail'] = $this->db->query("SELECT * FROM tb_detail_order
        JOIN tb_order ON tb_detail_order.no_antrian=tb_order.no_antrian
        JOIN tb_user ON tb_detail_order.id_user=tb_user.id_user
        JOIN tb_menu ON tb_detail_order.id_menu=tb_menu.id_menu
        WHERE tb_detail_order.id_detail_order='$id'")->row();

        $data_antrian = $this->db->query("SELECT * FROM tb_detail_order
        JOIN tb_menu ON tb_detail_order.id_menu=tb_menu.id_menu
        WHERE tb_detail_order.id_detail_order='$id'")->row();

        $data['menu'] = $this->db->query("SELECT * FROM tb_detail_order
        JOIN tb_menu ON tb_detail_order.id_menu=tb_menu.id_menu
        WHERE no_antrian='$data_antrian->no_antrian'")->result();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('order/detail', $data);
        $this->load->view('layout/footer');
    }

    public function konfirmasi($id)
    {
        $data['konfirmasi'] = $this->db->query("UPDATE tb_order SET status_order='Sudah Dikonfirmasi' WHERE id_order='$id'");

        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Dikonfirmasi!</div>');
        redirect('order');
    }
}
