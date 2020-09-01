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
        $post = $this->input->post();
        $this->id = uniqid();
        $this->title = $post['title'];
        $this->desc = $post['desc'];
        $this->release = $post['release'];
        $this->poster = $this->_uploadImage();

        return $this->db->insert('movies', $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->title = $post['title'];
        $this->desc = $post['desc'];
        $this->release = $post['release'];

        if (!empty($_FILES['poster']['name'])) {
            $this->poster = $this->_uploadImage();
        } else {
            $this->poster = $post['old_image'];
        }

        return $this->db->update('movies', $this, ['id' => $post['id']]);
    }

    // method upload image
    private function _uploadImage()
    {
        $config['upload_path']      = './assets/img/';
        $config['allowed_types']    = 'jpg|png|jpeg';
        $config['file_name']        = $this->id;
        $config['overwrite']        = true;
        $config['max_size']         = '15000';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('poster')) {
            return $this->upload->data('file_name');
        }

        return "default.jpg";
    }

}