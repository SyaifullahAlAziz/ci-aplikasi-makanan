<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis extends CI_Controller
{
    public function index()
    {
        if ($this->session->userdata('id_admin')) {
            $data['jenis'] = $this->db->query("SELECT * FROM tb_jenis ORDER BY id_jenis DESC")->result();

            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('jenis/index', $data);
            $this->load->view('layout/footer');
        } else {
            redirect(base_url('login'), 'refresh');
        }
    }

    public function add()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis/add');
        $this->load->view('layout/footer');
    }

    public function save()
    {
        $data = array(
            'jenis' => $this->input->post('jenis')
        );

        $this->db->insert('tb_jenis', $data);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambahkan!</div>');
        redirect('jenis');
    }

    public function edit($id)
    {
        $data['jenis'] = $this->db->query("SELECT * FROM tb_jenis WHERE id_jenis='$id'")->row();

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis/edit', $data);
        $this->load->view('layout/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_jenis');

        $data = array(
            'jenis' => $this->input->post('jenis')
        );

        $this->db->update('tb_jenis', $data, ['id_jenis' => $id]);
        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Diubah!</div>');
        redirect('jenis');
    }

    public function delete($id)
    {
        $this->db->delete('tb_jenis', ['id_jenis' => $id]);

        $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">
        Data Berhasil Dihapus!</div>');
        redirect('jenis');
    }
}
