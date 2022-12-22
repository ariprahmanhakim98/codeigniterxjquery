<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('users_model');
    }

    public function index()
    {
        //load view form register
        $this->load->view('register');
    }

    public function save()
    {
        //load model M_user
        $this->load->model('users_model');

        $data = array(
            'full_name'      => $this->input->post('full_name'),
            'username'       => $this->input->post('username'),
            'password'       => $this->input->post('password'),
            // 'password'       => password_hash($this->input->post('password'), PASSWORD_DEFAULT),    
        );

        //insert data via model
        $register = $this->users_model->register($data);

        //cek apakah data berhasil tersimpan
        if($register) {

            echo "success";

        } else {

            echo "error";

        }

    }

}