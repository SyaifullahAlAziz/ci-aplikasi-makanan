<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kantin extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('id_admin')) {
            $data['kantin'] = $this->db->query("SELECT * FROM tb_kantin ORDER BY id_kantin DESC")->result();

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('kantin/index', $data);
            $this->load->view('layout/footer');
        } else {
            redirect(base_url('login'), 'refresh');
        }
    }

    public function add()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kantin/add');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $nama_kantin = $this->input->post('nama_kantin');
        $alamat_kantin = $this->input->post('alamat_kantin');
        $foto_kantin = $_FILES['foto_kantin']['name'];

        if ($foto_kantin = '') {
        } else {
            $config['upload_path'] = 'assets_admin/images/kantin/';
            $config['allowed_types'] = 'jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_kantin')) {
                echo "Gambar Gagal Diupload";
            } else {
                $foto_kantin = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_kantin' => $nama_kantin,
            'alamat_kantin' => $alamat_kantin,
            'foto_kantin' => $foto_kantin
        );


        $this->db->insert('tb_kantin', $data);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambahkan!</div>');
        redirect('kantin');
    }

    public function edit($id)
    {
        $data['kantin'] = $this->db->query("SELECT * FROM tb_kantin WHERE id_kantin='$id'")->row();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kantin/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_kantin');
        $nama_kantin = $this->input->post('nama_kantin');
        $alamat_kantin = $this->input->post('alamat_kantin');
        $foto_kantin = $_FILES['foto_kantin']['name'];

        if ($foto_kantin == '') {
            $foto_kantin = $this->input->post('foto_lama');
        } else {
            $config['upload_path'] = 'assets_admin/images/kantin/';
            $config['allowed_types'] = 'jpg|jpeg|png|tiff';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto_kantin')) {
                echo "Gambar Gagal Diupload";
            } else {
                $foto_kantin = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_kantin' => $nama_kantin,
            'alamat_kantin' => $alamat_kantin,
            'foto_kantin' => $foto_kantin
        );

        $this->db->update('tb_kantin', $data, ['id_kantin' => $id]);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Diubah!</div>');
        redirect('kantin');
    }

    public function delete($id)
    {
        $this->db->delete('tb_kantin', ['id_kantin' => $id]);

        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Dihapus!</div>');
        redirect('kantin');
    }
}
