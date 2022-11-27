<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('id_admin')) {
            $data['menu'] = $this->db->query("SELECT * FROM tb_menu 
            JOIN tb_jenis ON tb_menu.id_jenis=tb_jenis.id_jenis
            JOIN tb_kantin ON tb_menu.id_kantin=tb_kantin.id_kantin
            ORDER BY tb_menu.id_menu DESC")->result();

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('menu/index', $data);
            $this->load->view('layout/footer');
        } else {
            redirect(base_url('login'), 'refresh');
        }
    }

    public function add()
    {
        $data['jenis'] = $this->db->query("SELECT * FROM tb_jenis")->result();
        $data['kantin'] = $this->db->query("SELECT * FROM tb_kantin")->result();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('menu/add', $data);
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $foto_menu = $_FILES['foto_menu']['name'];

        if ($foto_menu = '') {
        } else {
            $config['upload_path'] = 'assets_admin/images/menu/';
            $config['allowed_types'] = 'jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_menu')) {
                echo "Gambar Gagal Diupload";
            } else {
                $foto_menu = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_jenis' => $this->input->post('id_jenis'),
            'id_kantin' => $this->input->post('id_kantin'),
            'nama_menu' => $this->input->post('nama_menu'),
            'harga_menu' => $this->input->post('harga_menu'),
            'foto_menu' => $foto_menu,
            'deskripsi_menu' => $this->input->post('deskripsi_menu')
        );


        $this->db->insert('tb_menu', $data);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambahkan!</div>');
        redirect('menu');
    }

    public function edit($id)
    {
        $data['menu'] = $this->db->query("SELECT * FROM tb_menu WHERE id_menu='$id'")->row();
        $data['jenis'] = $this->db->query("SELECT * FROM tb_jenis")->result();
        $data['kantin'] = $this->db->query("SELECT * FROM tb_kantin")->result();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('menu/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_menu');
        $foto_menu = $_FILES['foto_menu']['name'];

        if ($foto_menu == '') {
            $foto_menu = $this->input->post('foto_lama');
        } else {
            $config['upload_path'] = 'assets_admin/images/menu/';
            $config['allowed_types'] = 'jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_menu')) {
                echo "Gambar Gagal Diupload";
            } else {
                $foto_menu = $this->upload->data('file_name');
            }
        }

        $data = array(
            'id_jenis' => $this->input->post('id_jenis'),
            'id_kantin' => $this->input->post('id_kantin'),
            'nama_menu' => $this->input->post('nama_menu'),
            'harga_menu' => $this->input->post('harga_menu'),
            'foto_menu' => $foto_menu,
            'deskripsi_menu' => $this->input->post('deskripsi_menu')
        );

        $this->db->update('tb_menu', $data, ['id_menu' => $id]);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Diubah!</div>');
        redirect('menu');
    }

    public function delete($id)
    {
        $this->db->delete('tb_menu', ['id_menu' => $id]);

        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Dihapus!</div>');
        redirect('menu');
    }
}
