<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Report extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function siswa()
    {
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->db->get('siswa')->result();

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('report/siswa', $data);
        $this->load->view('templates/footer_login');
    }

    public function guru()
    {
        $data['title'] = 'Data Guru';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['all'] = $this->db->get('guru')->result();

        $this->load->view('templates/header_login', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('report/guru', $data);
        $this->load->view('templates/footer_login');
    }
}
