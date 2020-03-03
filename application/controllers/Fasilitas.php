<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Fasilitas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_data'));
    }

    public function index()
    {
        $data['detail'] = $this->db->get('fasilitas')->result();

        $this->load->view('templates/header');
        $this->load->view('fasilitas', $data);
        $this->load->view('templates/footer');
    }

    public function dataFasilitas()
    {
        $data['title'] = 'Data Fasilitas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->M_data->dataFasilitas();

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('fasilitas/index', $data);
        $this->load->view('templates/footer_login');
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('gambar', 'gambar', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Tambahkan");
            redirect('Fasilitas/dataFasilitas');
        } else {
            $data = array(
                "nama" => $_POST['nama'],
                "deskripsi" => $_POST['deskripsi'],
                "gambar" => $_POST['gambar'],
            );
            $this->db->insert('fasilitas', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('Fasilitas/dataFasilitas');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('gambar', 'gambar', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Tambahkan");
            redirect('Fasilitas/dataFasilitas');
        } else {
            $data = array(
                "nama" => $_POST['nama'],
                "deskripsi" => $_POST['deskripsi'],
                "gambar" => $_POST['gambar'],
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('fasilitas', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('Fasilitas/dataFasilitas');
        }
    }

    public function hapus($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('Fasilitas/dataFasilitas');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('fasilitas');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('Fasilitas/dataFasilitas');
        }
    }
}
