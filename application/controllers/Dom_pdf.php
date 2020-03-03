<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dom_pdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'form'));
    }
    public function index($id)
    {

        $data['data'] = $this->db->query("SELECT * FROM siswa where id='$id'")->result();

        $this->load->library('pdf');
        $customPaper = array(0, 0, 381.89, 595.28);
        $this->pdf->setPaper($customPaper, 'landscape');
        $this->pdf->load_view('laporan_pdf', $data);
    }

    public function guruAdmin()
    {

        $data['data'] = $this->db->get('guru')->result();

        $this->load->library('pdf');
        $customPaper = array(0, 0, 381.89, 595.28);
        $this->pdf->setPaper($customPaper, 'landscape');
        $this->pdf->load_view('laporanPdfGuru', $data);
    }

    public function siswaAdmin()
    {

        $data['data'] = $this->db->get('siswa')->result();

        $this->load->library('pdf');
        $customPaper = array(0, 0, 381.89, 595.28);
        $this->pdf->setPaper($customPaper, 'landscape');
        $this->pdf->load_view('laporanPdfSiswa', $data);
    }
}
