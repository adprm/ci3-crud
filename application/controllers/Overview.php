<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {

    public function index() {
        $data['title'] = "CI-CRUD";
        $this->load->view('admin/overview');
    }

}