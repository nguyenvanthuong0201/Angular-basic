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
	public function laydulieu()
	{
		$this->load->model('Angular1_model');
		$da = $this->Angular1_model->getData();
		$da = json_encode($da);
		echo $da;
	}
	public function laydulieu1()
	{
		$this->load->model('Angular1_model');
		$da = $this->Angular1_model->getData1();
		$da = json_encode($da);
		echo $da;
	}
	public function laydulieu2()
	{
		$this->load->model('Angular1_model');
		$da = $this->Angular1_model->getData2();
		$da = json_encode($da);
		echo $da;
	}
	public function account(){
		$this->load->model('angular1_model');
		$da=$this->angular1_model->getDataAccount();
		$da=json_encode($da);
		echo $da;
	}
	public function luuAccount(){
		$id=$this->input->post('id');
		$username=$this->input->post('username');
		$role=$this->input->post('role');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$this->load->model('Angular1_model');
		echo $this->Angular1_model->upDatebyId($id,$username,$email,$password,$role);
	}
}
