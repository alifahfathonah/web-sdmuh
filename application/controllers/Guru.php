<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Guru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['detail'] = $this->db->get('guru')->result();

        $this->load->view('templates/header');
        $this->load->view('guru', $data);
        $this->load->view('templates/footer');
    }

    public function dataGuru()
    {
        $data['title'] = 'Data Guru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->db->get('guru')->result();

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer_login');
    }

    public function add()
    {
        $this->form_validation->set_rules('id_guru', 'id_guru', 'required');
        $this->form_validation->set_rules('nama_guru', 'nama_guru', 'required');
        $this->form_validation->set_rules('ttl', 'ttl', 'required');
        $this->form_validation->set_rules('mapel', 'mapel', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Tambahkan");
            redirect('Guru/dataGuru');
        } else {
            $data = array(
                "id_guru" => $_POST['id_guru'],
                "nama_guru" => $_POST['nama_guru'],
                "ttl" => $_POST['ttl'],
                "mapel" => $_POST['mapel'],
                "kelas" => $_POST['kelas'],
            );
            $this->db->insert('guru', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('Guru/dataGuru');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('id_guru', 'id_guru', 'required');
        $this->form_validation->set_rules('nama_guru', 'nama_guru', 'required');
        $this->form_validation->set_rules('ttl', 'ttl', 'required');
        $this->form_validation->set_rules('mapel', 'mapel', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Edit");
            redirect('Guru/dataGuru');
        } else {
            $data = array(
                "id_guru" => $_POST['id_guru'],
                "nama_guru" => $_POST['nama_guru'],
                "ttl" => $_POST['ttl'],
                "mapel" => $_POST['mapel'],
                "kelas" => $_POST['kelas'],
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('guru', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Diedit");
            redirect('Guru/dataGuru');
        }
    }

    public function hapus($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('Guru/dataGuru');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('guru');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('Guru/dataGuru');
        }
    }
}
