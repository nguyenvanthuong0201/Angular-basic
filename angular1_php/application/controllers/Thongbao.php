<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Thongbao extends CI_Controller
{
    public $varible;
    public function __construct()
    {
        parent::__construct();        
    }
    public function index(){
      $this->load->view('dulieuthongbao');
    }
}