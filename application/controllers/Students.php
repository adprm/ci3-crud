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

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('student/add_data', $data);
            $this->load->view('templates/footer');
        }
    }


}
