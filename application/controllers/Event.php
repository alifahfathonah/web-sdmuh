<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_data'));
    }
    public function index()
    {
        $data['detail'] = $this->db->get('event')->result();

        $this->load->view('templates/header');
        $this->load->view('event', $data);
        $this->load->view('templates/footer');
    }

    public function dataEvent()
    {
        $data['title'] = 'Data Event';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->M_data->dataEvent();

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('event/index', $data);
        $this->load->view('templates/footer_login');
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('gambar', 'gambar', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Tambahkan");
            redirect('Event/dataEvent');
        } else {
            $data = array(
                "nama" => $_POST['nama'],
                "deskripsi" => $_POST['deskripsi'],
                "tanggal" => $_POST['tanggal'],
                "gambar" => $_POST['gambar'],
            );
            $this->db->insert('event', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('Event/dataEvent');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');
        $this->form_validation->set_rules('gambar', 'gambar', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Tambahkan");
            redirect('Event/dataEvent');
        } else {
            $data = array(
                "nama" => $_POST['nama'],
                "deskripsi" => $_POST['deskripsi'],
                "tanggal" => $_POST['tanggal'],
                "gambar" => $_POST['gambar'],
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('event', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('Event/dataEvent');
        }
    }

    public function hapus($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('Event/dataEvent');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('event');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('Event/dataEvent');
        }
    }
}
