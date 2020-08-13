<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
    private $_table = 'mahasiswa';

    public $id;
    public $name;
    public $nim;
    public $email;
    public $image;


    public function getAll() {
        return $this->db->get->($this->_table)->result();
    }

    public function getById($id) {
        return $this->db->get_where($this->_table, ['id' => $id])->row();
    }

    public function save() {
        $post = $this->input->post();
        $this->name = $post['name'];
        $this->nim = $post['nim'];
        $this->email = $post['email'];
        $this->image = $this->_uploadImage();

        return $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->name = $post['name'];
        $this->nim = $post['nim'];
        $this->email = $post['email'];

        if (!empty($_FILES['image']['name'])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post['old_image'];
        }

        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
}