<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Movie List';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('movie/index', $data);
        $this->load->view('templates/footer');
    }

}