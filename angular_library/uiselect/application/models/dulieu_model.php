<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dulieu_model extends CI_Model{
    public $varible;
    public function __construct()
    {
        parent::__construct();        
    }
    public function getData(){
     $this->db->select('*');
     $dl=$this->db->get('account');
     $dl=$dl->result_array();
     return $dl;
    }
}
