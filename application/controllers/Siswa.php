<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_data'));
    }

    public function index()
    {
        $data['title'] = 'Siswa';
        // $data['all'] = $this->db->get_where('siswa', ['kelas' == 12])->result();


        $this->db->order_by('kelas', 'ASC');
        $query['all'] = $this->db->get('siswa')->result();

        $this->load->view('templates/header');
        $this->load->view('siswa', $query);
        $this->load->view('templates/footer');
    }

    public function dataSiswa()
    {
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->db->get('siswa')->result();

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer_login');
    }

    public function add()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('telp', 'telp', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Tambahkan");
            redirect('Siswa/dataSiswa');
        } else {
            $data = array(
                "nama" => $_POST['nama'],
                "jenis_kelamin" => $_POST['jenis_kelamin'],
                "alamat" => $_POST['alamat'],
                "telp" => $_POST['telp'],
                "kelas" => $_POST['kelas'],
            );
            $this->db->insert('siswa', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Disimpan");
            redirect('Siswa/dataSiswa');
        }
    }

    public function edit()
    {
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('telp', 'telp', 'required');
        $this->form_validation->set_rules('kelas', 'kelas', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', "Data Gagal Di Edit");
            redirect('Siswa/dataSiswa');
        } else {
            $data = array(
                "nama" => $_POST['nama'],
                "jenis_kelamin" => $_POST['jenis_kelamin'],
                "alamat" => $_POST['alamat'],
                "telp" => $_POST['telp'],
                "kelas" => $_POST['kelas'],
            );
            $this->db->where('id', $_POST['id']);
            $this->db->update('siswa', $data);
            $this->session->set_flashdata('sukses', "Data Berhasil Diedit");
            redirect('Siswa/dataSiswa');
        }
    }

    public function hapus($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('Siswa/dataSiswa');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('siswa');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('Siswa/dataSiswa');
        }
    }
}
