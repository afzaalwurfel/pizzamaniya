<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lunch_model extends CI_Model{
 public function __construct()
 {
  parent::__construct();
    }


    public function login_admin($email,$password)
    {

            $query=$this->db->select('*')
            ->from('users')
            ->where('userName', $email)
            ->where('password', $password)
            ->get();
            if($query->num_rows())     
           {
            return $query->row();
           }   
           else
           {
            return false;
           }
            // return $query->row();
    }


    public function view_emps()
    {
    	$query=$this->db->select('*')
			->from('members')
			->get();
			return $query->result();

    }


    public function select_record($id)
    {
    	$query=$this->db->select('*')
            ->from('members')
            ->where('member_id',$id)
            ->get();
            return $query->row();
    }


    public function Delete_rec($id)
    {
    		$this->db->where('member_id',$id);
            $this->db->delete('members');
    }


    public function update_reco($id,$value)
    {
            $this->db->where('member_id', $id);
            $this->db->update('members', $value);

    }


    public function insert_record($value)
    {
        $this->db->insert('members', $value);
    }



    public function Roti_rates()
    {
        $query=$this->db->select('*')
            ->from('roti_rates')
            ->get();
            return $query->row();
    }



    public function roti_rate_update($id,$value)
    {
            $this->db->where('id', $id);
            $this->db->update('roti_rates', $value);
    }


    public function fetch_rec($id)
    {
        $query=$this->db->select('*')
            ->from('transactions')
            ->where('member_id',$id)
            ->get();
            return $query->result();

    }

    public function fetch_rec1()
    {
        $query=$this->db->select('*')
            ->from('members')
            ->get();
            return $query->result();

    }


    public function insert_reco($value)
    {
        $this->db->insert('transactions', $value);
    }


    public function fetch_prevous_record($id)
    {
        // $sql = "SELECT members.member_id, transactions.member_id, name, Amount, Balance FROM members JOIN transactions ON transactions.member_id = members.member_id WHERE  members.member_id     = '34'";
        $query =  $this->db->select('*')
                    ->from('members')
                    ->join('transactions', 'members.member_id = transactions.member_id','inner')
                    ->where('members.member_id', $id)
                    ->order_by('transactions.id','desc')
                    ->get();
                     return $query->result();
         // $sql = "SELECT members.member_id, transactions.member_id, name, Amount, Balance FROM members JOIN transactions ON transactions.member_id = members.member_id WHERE members.member_id = $id";
         // $query=$this->db->query($sql);
         // print_r($query);
         // exit();
                    
    }


    public function View_all_transections()
    {
        $query = $this->db->select('*')
                    ->from('members')
                    ->join('transactions', 'members.member_id = transactions.member_id','inner')
                    ->order_by('transactions.id','desc')
                    ->get();
        return $query->result();
    }


    public function num_rows()
  {
            $query = $this->db->select('*')
            ->from('members')
            ->join('transactions', 'members.member_id = transactions.member_id','inner')
            ->order_by('transactions.id','desc')
            ->get();
        return $query->num_rows();
  }


   public function reList($limit,$offset)
  {         

            $query = $this->db->select('*')
            ->from('members')
            ->join('transactions', 'members.member_id = transactions.member_id','inner')
            ->order_by('transactions.id','desc')
            ->limit($limit,$offset)
            ->get();

            // $query=$this->session->userdata('id');
            // $q=$this->db->select('')
            // ->from('articles')
            // ->where(['user_id'=>$id])
            // ->limit($limit,$offset)
            // ->get();
            return $query->result();
  }

}
