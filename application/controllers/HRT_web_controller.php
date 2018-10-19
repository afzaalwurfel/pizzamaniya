<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HRT_web_controller extends CI_Controller {

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
		public function __construct()
		{	
			parent::__construct();
			//$this->load->helper('Check_session');
			//issessionExists();
			$this->load->model('Main_model');  
	    }




	public function index()
	{
          		$this->load->view('examples/sign-in');
	}



	public function login()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if ($this->form_validation->run()) 
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
                if($this->Main_model->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect('HRT_web_controller/loged_in');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect('HRT_web_controller/index');  
                }  
           }  
           else  
           {  
                //false 
                $this->session->set_flashdata('error1', 'Please enter username and password');   
                $this->index();  
           }  

	}


	function logout()  
      {  
           $this->session->unset_userdata('username'); 
           //$this->session->sess_destroy(); 
           session_destroy();
           redirect(base_url() . 'HRT_web_controller/index');  
      }  


	public function loged_in()
	{	

		 // $var="Afzaal Iqbal";
		 // $count = strlen($var);
		 // $capitalphabets = array('Z','Y','X','W','V','U','T','S','R','Q','P','O','N','M','L','K','J','I','H','G','F','E','D','C','B','A','z','y','x','w','v','u','t','s','r','q','p','o','n','m','l','k','j','i','h','g','f','e','d','c','b','a','9','8','7','6','5','4','3','2','1','0');
		 $query['users'] = $this->Main_model->fetch_records();
				//var_dump($query);
		//  $result = array_replace($query['users'], $capitalphabets);
		// foreach ($query['users'] as $key)
		//  {
		//  	echo $key->Name;
		//  	echo "<pre>";
		//  	echo $key->Gender;
		//   }
		//   $query['users'] = $result;
				//print_r($query);
					//exit;
		// for ($i=0; $i <$count ; $i++) 
		// { str_replace($key,$value,$var)
		// ,'O','N','M','L','K','J','I','H','G','F','E','D','C','B','A','z','y','x','w','v','u','t','s','r','q','p','o','n','m','l','k','j','i','h','g','f','e','d','c','b','a','9','8','7','6','5','4','3','2','1','0';		
		// }
						// $arr1 = str_split($var);
						// $result = array_replace($arr1, $capitalphabets);
						// $lastresult = implode($result);
						// print_r($lastresult);
						// echo "<pre>";
						// print_r($arr1);
						// echo "<pre>";
						// print_r($capitalphabets);
						//  exit();
	    $this->load->view('index',$query);
	}


	function pages_typography()
	{
		$this->load->view('pages/typography');
	}



	
	public function implimenting_criptograpy()
	{	

		echo "testing functon";
		echo "<pre>";
		 	//$query['users'] = $this->Main_model->fetch_records();
		 	$query1['users'] = $this->Main_model->users_data();
		 	$i=0;
		 		foreach ($query1['users'] as $key) 
		 		{
		 			$var  = $key->userFirstname;
		 			$var1 = $key->userLastname;
		 			$var2 = $key->userEmail;
		 			$var3 = $key->userName;
		 			$var4 = $key->userPassword;
		 			$var5 = $key->userCnic;
		 			$var6 = $key->userGender;
		 			$var7 = $key->userMobile;
		 			$var8 = $key->userPicture;
						 $count = strlen($var);
						 $count1 = strlen($var1);
						 $count2 = strlen($var2);
						 $count3 = strlen($var3);
						 $count4 = strlen($var4);
						 $count5 = strlen($var5);
						 $count6 = strlen($var6);
						 $count7 = strlen($var7);
						 $count8 = strlen($var8);
						$arr  = str_split($var);
						$arr1 = str_split($var1);
						$arr2 = str_split($var2);
						$arr3 = str_split($var3);
						$arr4 = str_split($var4);
						$arr5 = str_split($var5);
						$arr6 = str_split($var6);
						$arr7 = str_split($var7);
						$arr8 = str_split($var8);
						//$items = strval($count);
							$keys = array_fill_keys($arr,'');
							$keys1 = array_fill_keys($arr1,'');
							$keys2 = array_fill_keys($arr2,'');
							$keys3 = array_fill_keys($arr3,'');
							$keys4 = array_fill_keys($arr4,'');
							$keys5 = array_fill_keys($arr5,'');
							$keys6 = array_fill_keys($arr6,'');
							$keys7 = array_fill_keys($arr7,'');
							$keys8 = array_fill_keys($arr8,'');
						$capitalphabets = array('A'=>'Z','B'=>'Y','C'=>'X','D'=>'W','E'=>'V','F'=>'U','G'=>'T','H'=>'S','I'=>'R','J'=>'Q','K'=>'P','L'=>'O','M'=>'N','N'=>'M','O'=>'L','P'=>'K','Q'=>'J','R'=>'I','S'=>'H','T'=>'G','U'=>'F','V'=>'E','W'=>'D','X'=>'C','Y'=>'B','Z'=>'A','a'=>'z','b'=>'y','c'=>'x','d'=>'w','e'=>'v','f'=>'u','g'=>'t','h'=>'s','i'=>'r','j'=>'q','k'=>'p','l'=>'o','m'=>'n','n'=>'m','o'=>'l','p'=>'k','q'=>'j','r'=>'i','s'=>'h','t'=>'g','u'=>'f','v'=>'e','w'=>'d','x'=>'c','y'=>'b','z'=>'a','0'=>'9','1'=>'8','2'=>'7','3'=>'6','4'=>'5','5'=>'4','6'=>'3','7'=>'2','8'=>'1','9'=>'0','@'=>'@','.'=>'.');
						$allkeys  = array_replace($keys, $capitalphabets);
						$allkeys1 = array_replace($keys1, $capitalphabets);
						$allkeys2 = array_replace($keys2, $capitalphabets);
						$allkeys3 = array_replace($keys3, $capitalphabets);
						$allkeys4 = array_replace($keys4, $capitalphabets);
						$allkeys5 = array_replace($keys5, $capitalphabets);
						$allkeys6 = array_replace($keys6, $capitalphabets);
						$allkeys7 = array_replace($keys7, $capitalphabets);
						$allkeys8 = array_replace($keys8, $capitalphabets);
						//$notempty = array_filter($allkeys, strlen);
						$output  = array_slice($allkeys, 0, $count); 
						$output1 = array_slice($allkeys1, 0, $count1); 
						$output2 = array_slice($allkeys2, 0, $count2); 
						$output3 = array_slice($allkeys3, 0, $count3); 
						$output4 = array_slice($allkeys4, 0, $count4); 
						$output5 = array_slice($allkeys5, 0, $count5); 
						$output6 = array_slice($allkeys6, 0, $count6); 
						$output7 = array_slice($allkeys7, 0, $count7); 
						$output8 = array_slice($allkeys8, 0, $count8); 
										 $lastR  = implode($output);
										 $lastR1 = implode($output1);
										 $lastR2 = implode($output2);
										 $lastR3 = implode($output3);
										 $lastR4 = implode($output4);
										 $lastR5 = implode($output5);
										 $lastR6 = implode($output6);
										 $lastR7 = implode($output7);
										 $lastR8 = implode($output8);
						 // array_push($data[$i],$stdClass['Name']);
						 // $i++;
						 echo "<table><td>";
						 echo $lastR;
						 echo "</td><td>";
						 echo $lastR1;
						 echo "</td><td>";
						 echo $lastR2;
						 echo "</td><td>";
						 echo $lastR3;
						 echo "</td><td>";
						 echo $lastR4;
						 echo "</td><td>";
						 echo $lastR5;
						 echo "</td><td>";
						 echo $lastR6;
						 echo "</td><td>";
						 echo $lastR7;
						 echo "</td><td>";
						 echo $lastR8;
						 echo "</td>";
						 echo "</table>";

		 		}			
		 		// print_r($data);
		 		// echo "<pre>";
			//print_r($output);
	// 	$query['users'] = $this->Main_model->fetch_records();
	// 	echo $query;
	// 	$this->load->view('index',$query);
	 	exit();
	 }
}
