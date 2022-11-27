<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keranjang extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('id_admin')) {
            $data['keranjang'] = $this->db->query("SELECT * FROM tb_keranjang
            JOIN tb_user ON tb_keranjang.id_user=tb_user.id_user
            JOIN tb_menu ON tb_keranjang.id_menu=tb_menu.id_menu 
            ORDER BY id_keranjang DESC")->result();

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('keranjang/index', $data);
            $this->load->view('layout/footer');
        } else {
            redirect(base_url('login'), 'refresh');
        }
    }

    public function add()
    {
        $data['user'] = $this->db->query("SELECT * FROM tb_user")->result();
        $data['menu'] = $this->db->query("SELECT * FROM tb_menu")->result();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('keranjang/add', $data);
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $id_user = $this->input->post('id_user');
        $id_menu = $this->input->post('id_menu');
        $jml = $this->input->post('jml');

        $data = array(
            'id_user' => $id_user,
            'id_menu' => $id_menu,
            'jml' => $jml
        );


        $this->db->insert('tb_keranjang', $data);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambahkan!</div>');
        redirect('keranjang');
    }

    public function edit($id)
    {
        $data['keranjang'] = $this->db->query("SELECT * FROM tb_keranjang WHERE id_keranjang='$id'")->row();
        $data['user'] = $this->db->query("SELECT * FROM tb_user")->result();
        $data['menu'] = $this->db->query("SELECT * FROM tb_menu")->result();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('keranjang/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_keranjang');
        $id_user = $this->input->post('id_user');
        $id_menu = $this->input->post('id_menu');
        $jml = $this->input->post('jml');

        $data = array(
            'id_user' => $id_user,
            'id_menu' => $id_menu,
            'jml' => $jml
        );

        $this->db->update('tb_keranjang', $data, ['id_keranjang' => $id]);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Diubah!</div>');
        redirect('keranjang');
    }

    public function delete($id)
    {
        $this->db->delete('tb_keranjang', ['id_keranjang' => $id]);

        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Dihapus!</div>');
        redirect('keranjang');
    }
}
