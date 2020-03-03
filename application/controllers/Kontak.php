<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Kontak extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('kontak');
        $this->load->view('templates/footer');
    }
}
