<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angular2_model extends CI_Model{
    public $varible;
    public function __construct()
    {
        parent::__construct();        
    }
    public function getDataAccount(){
        $this->db->select('*');
        $dl=$this->db->get('account1');
        $dl=$dl->result_array();
        return $dl;
    }
    public function upDatebyId($id,$username,$email,$password,$role){
        $dl= array(
            'id'=>$id,
            'username'=>$username,
            'email'=>$email,
            'password'=>$password,
            'role'=>$role,
        );
        $this->db->where('id',$id);
        $this->db->update('account1',$dl);
        if($this->db->affected_rows()>0){
            echo 'thanhcong';
        }
        else
        {
            echo 'thatbai';
        }

    }
    public function addUser($username,$email,$password,$role){
        $dl= array(
            'username'=>$username,
            'email'=>$email,
            'password'=>$password,
            'role'=>$role,
        );
        $this->db->insert('account1',$dl);
    }

}