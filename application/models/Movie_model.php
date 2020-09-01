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

}