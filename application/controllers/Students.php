<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('student_model');
    }

    public function index() {
        $data['title'] = "List Students";
        $data['student'] = $this->student_model->getAll();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('student/index', $data);
        $this->load->view('templates/footer');
    }

    public function add() {
        $data['title'] = "Add Student";

        $student = $this->student_model;

        $validation = $this->form_validation->set_rules('name', 'Name', 'required');
        $validation = $this->form_validation->set_rules('nim', 'Nim', 'required|min_length[8]');
        $validation = $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('student/add_data', $data);
            $this->load->view('templates/footer');
            $this->session->set_flashdata('message_error_addstudent', '<div class="alert alert-danger" role="alert">
            New student dont added!</div>');
        } else {
            $student->save();
            $this->session->set_flashdata('message_success_addstudent', '<div class="alert alert-success" role="alert">
            New student added!</div>');
            redirect('students');
        }
    }

    public function edit($id = null) {
        $data['title'] = "Edit Data Student";
        $student = $this->student_model;

        $data['student'] = $student->getById($id);
        if (!$data['student']) show_404();

        $validation = $this->form_validation->set_rules('name', 'Name', 'required');
        $validation = $this->form_validation->set_rules('nim', 'Nim', 'required|min_length[8]');
        $validation = $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('student/edit_data', $data);
            $this->load->view('templates/footer');
        }
    }

}
