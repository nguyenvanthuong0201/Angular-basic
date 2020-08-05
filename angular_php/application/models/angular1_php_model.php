<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angular1_php_model extends CI_Model
{
    public $varible;
    public function __construct()
    {
        parent::__construct();        
    }
    public function getData(){
        $this->db->select('*');
        $dl=$this->db->get('nguoidung1');
        $dl=$dl->result_array();
        return $dl;
    }
    public function updateByID($id,$name,$birthday,$salary,$department){
        $dl = array(
            'id'=> $id,
            'name'=> $name,
            'birthday'=> $birthday,
            'salary'=> $salary,
            'department'=> $department,
        );
        $this->db->where('id',$id);
        $this->db->update('nguoidung1',$dl);
        if($this->db->affected_rows() > 0){
            echo 'thanhcong';
        }
        else
        {
            echo 'thatbai';
        }

    }
}

