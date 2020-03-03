<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Mapel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_data'));
    }

    public function index()
    {
        $data['detail'] = $this->db->get('mapel')->result();

        $this->load->view('templates/header');
        $this->load->view('mapel', $data);
        $this->load->view('templates/footer');
    }

    public function dataMapel()
    {
        $data['title'] = 'Data Mata Pelajaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->M_data->dataMapel();

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('mapel/index', $data);
        $this->load->view('templates/footer_login');
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        $this->form_validation->set_rules('nama_guru', 'nama_guru', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Tambahkan");
            redirect('Mapel/dataMapel');
        } else {
            $data = array(
                "nama" => $_POST['nama'],
                "kelas" => $_POST['kelas'],
                "nama_guru" => $_POST['nama_guru'],
                "deskripsi" => $_POST['deskripsi'],
            );
            $this->db->insert('mapel', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('Mapel/dataMapel');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        $this->form_validation->set_rules('nama_guru', 'nama_guru', 'required');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Tambahkan");
            redirect('Mapel/dataMapel');
        } else {
            $data = array(
                "nama" => $_POST['nama'],
                "kelas" => $_POST['kelas'],
                "nama_guru" => $_POST['nama_guru'],
                "deskripsi" => $_POST['deskripsi'],
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('mapel', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('Mapel/dataMapel');
        }
    }

    public function hapus($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('Mapel/dataMapel');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('mapel');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('Mapel/dataMapel');
        }
    }
}
