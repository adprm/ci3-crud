<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
    private $_table = 'mahasiswa';

    public $id;
    public $name;
    public $nim;
    public $email;
    public $image;
    
}