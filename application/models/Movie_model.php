<?php

Class Movie_model extends CI_Model {

    // method get all
    public function getAll()
    {
        return $this->db->get('movies')->result();
    }

}