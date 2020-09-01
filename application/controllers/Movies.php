<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Movie_model');
    }

    // index
    public function index()
    {
        $data['title'] = 'Movie List';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('movie/index', $data);
        $this->load->view('templates/footer');
    }

    // add 
    public function add()
    {
        $data['title'] = 'Add Movie';
        $movies = $this->Movie_model;

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
        $this->form_validation->set_rules('release', 'Release', 'required|date');

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('movie/add', $data);
        $this->load->view('templates/footer');
    }

}