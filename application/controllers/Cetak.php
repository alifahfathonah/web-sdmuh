<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Cetak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function cetak_id($id)
    {
        $data = array('record' => $this->db->query("SELECT * FROM siswa where id='$id'"),);

        $this->load->view('siswa/cetak', $data);

        $html = $this->output->get_output();
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $tanggal = date("d:F:Y:h:m:s");
        $this->dompdf->stream("Data Siswa" . $tanggal . ".pdf", array('Attachment' => 0));
    }
}
