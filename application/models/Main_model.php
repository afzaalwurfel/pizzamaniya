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


      public function users_data_updated($id,$value)
      {
             $this->db->where('userId', $id);
            $this->db->update('users', $value);

      }  



      public function pages_data()
      {
        $query = $this->db->select('*')
        ->from('page_details')
        ->get();
        return $query->result();
      }


      public function insertNewPage($value)
      {
          $this->db->insert('page_details',$value);
      }


      function delete_page($id)
      {
            $this->db->where('page_id',$id);
            $this->db->delete('page_details');
      }


      public function edit_page($id)
      {
          $query = $this->db->select('*')
         ->from('page_details')
         ->where('page_id',$id)
         ->get();
         return $query->result();
      }
 }  