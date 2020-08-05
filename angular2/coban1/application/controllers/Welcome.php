<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function account(){
		$this->load->model('Angular2_model');
		$da=$this->Angular2_model->getDataAccount();
		$da=json_encode($da);
		echo $da;
	}
	public function luuAccount(){
		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$role=$this->input->post('role');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$this->load->model('Angular2_model');
		echo $this->Angular2_model->upDatebyId($id,$username,$email,$password,$role);
	}
	public function addAccount(){
		$username=$this->input->post('username');
		$role=$this->input->post('role');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$this->load->model('Angular2_model');
		echo $this->Angular2_model->addUser($username,$email,$password,$role);
	}
}
