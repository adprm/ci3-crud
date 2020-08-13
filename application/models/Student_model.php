<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
    private $_table = 'mahasiswa';

    public $id;
    public $name;
    public $nim;
    public $email;
    public $image = 'default.jpg';


    public function getAll() {
        return $this->db->get($this->_table)->result();
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

    private function _uploadImage() {
        $config['upload_path']      = './upload/';
        $config['allowed_types']    = 'jpg|jpeg|png';
        $config['file_name']        = $this->id;
        $config['overwrite']        = true;
        $config['max_size']         = '10000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data('file_name');
        }

        return 'default.jpg';
    }

    private function _deleteImage($id) {
        $student = $this->getByid($id);

        if ($student->image != 'default.jpg') {
            $file_name = explode(".", $student->image)[0];
            return array_map('unlink', glob(FCPATH. "upload/$file_name.*"));
        }
    }

    public function delete($id) {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array('id' => $id));
    }
}