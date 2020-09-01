<?php

Class Movie_model extends CI_Model {

    // method get all
    public function getAll()
    {
        return $this->db->get('movies')->result();
    }

    // method get by id
    public function getById($id)
    {
        return $this->db->get_where('movies', ['id' => $id])->row();
    }

    // method save
    public function save()
    {
        $data = [
            'id' => uniqid(),
            'title' => $this->input->post('title', true),
            'desc' => $this->input->post('desc', true),
            'release' => $this->input->post('release', true),
            'poster' => $this->_uploadImage()
        ];

        return $this->db->insert('movies', $data);
    }

}