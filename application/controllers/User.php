<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
		$this->inc['modal'] = $this->load->view('modal', '', true);
	}

	public function index(){
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('user/home');
		}
		else{
			$this->load->view('login');
		}
	}

	public function login(){
		//load session library
		$this->load->library('session');

		$output = array('error' => false);

		$username = $_POST['username'];
		$password = $_POST['password'];
		// $password = password_hash($_POST['password']);

		$data = $this->users_model->login($username, $password);

		if($data){
			$this->session->set_userdata('user', $data);
			$output['message'] = 'Logging in. Please wait...';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Login Invalid. User not found';
		}

		echo json_encode($output); 
	}

	public function home(){
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			$this->load->view('show', $this->inc);
			// $this->load->view('show');
		}
		else{
			redirect('/notfound');
		}
		
	}

	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');
	}

}
