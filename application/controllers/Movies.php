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
        $data['movies'] = $this->Movie_model->getAll();

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

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('movie/add', $data);
            $this->load->view('templates/footer');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            New movie failed to added!</div>');
        } else {
            $movies->save();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            New movie added!</div>');
            redirect('movies');
        }
    }

    // detail
    public function detail($id)
    {
        $data['title'] = 'Movie Detail';
        $data['movie'] = $this->Movie_model->getById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('movie/detail', $data);
        $this->load->view('templates/footer');
    }

    // edit
    public function edit($id = null)
    {
        $data['title'] = "Edit Movie";
        $movies = $this->Movie_model;
        $data['movie'] = $movies->getById($id);

        if (!isset($id)) redirect('movies');

        
        $data['movie'] = $movies->getById($id);
        if (!$data['movie']) show_404();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('movie/edit', $data);
        $this->load->view('templates/footer');
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
        $this->form_validation->set_rules('release', 'Release', 'required|date');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data failed to edit!</div>');
        } else {
            $movies->update();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data edited successfully!</div>');
            redirect('movies');
        }
    }

}