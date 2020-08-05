<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dulieu extends CI_Controller
{
    public $varible;
    public function __construct()
    {
        parent::__construct();        
    }
    public function data(){
        $this->load->model('dulieu_model');
        $da=$this->dulieu_model->getData();
        $da=json_encode($da);
        echo $da;
    }
}