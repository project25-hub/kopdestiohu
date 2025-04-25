<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

    public function index() {
        $data['title'] = "Halaman Utama";
        $this->load->view('General/utama_view', $data);
    }

    
}





