<?php  
 class Main_model extends CI_Model  
 {  

        public function __construct()
     {
      parent::__construct();
        }



      function can_login($username, $password)  
      {   
           $this->db->where('username', $username);  
           $this->db->where('password', $password);  
           $query = $this->db->get('user');  
           //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           { 
                return false;       
           }  
      }




      public function  fetch_records()
      {
              $query=$this->db->select('*')
            ->from('members')
            ->get();
            return $query->result();
      }


      public function users_data()
      {
              $query=$this->db->select('*')
              ->from('users')
              ->get();
              return $query->result();

      }  
 }  