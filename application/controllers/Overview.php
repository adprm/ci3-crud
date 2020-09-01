<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Movie_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['totalMovie'] = $this->Movie_model->totalMovie();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('overview/index', $data);
        $this->load->view('templates/footer');
    }

}