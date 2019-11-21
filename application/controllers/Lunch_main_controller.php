<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lunch_main_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Lunch_model');
		// $this->load->model('Admin_model');
		//  $this->load->library('upload');
		// $user_data = $this->session->userdata('user_data');
		 // if( $this->session->userdata('id') ){
  	//  	return redirect('Lunch_main_controller/dashboard');
  	//  }
    }
	public function index()
	{	 

		$this->load->view('login1');
			
	}

	public function login()
	{

				$this->form_validation->set_rules('inputEmail','email','required');
				$this->form_validation->set_rules('inputPassword','password','required');
				if($this->form_validation->run()===FALSE)
					{
						echo "Please fill these field's";
						$this->load->view('login1');
					}
	    else
	    {
				$email = $this->input->post('inputEmail');
				$password = $this->input->post('inputPassword');				
				$user = $this->Lunch_model->login_admin($email,$password);
				if ($user != false)  
				{
				// echo "successfully logedin";
				$this->load->library('session');
				session_start();
				$session_data = array(
					'id'    => $user->id,
					'email' =>$user->userName
				);
				$this->session->set_userdata($session_data);
				//$this->session->userdata($session_data);				
				redirect('Lunch_main_controller/dashboard');
				}
				else 
				{
				// echo "please Enter correct email and password";
				$this->session->set_flashdata('error','please Enter correct Email and password');
				$this->load->view('login1');
				}
			
			}

	}


	public function dashboard()
	{	
		$data['users'] = $this->Lunch_model->view_emps();
		$this->load->view('Dashboard',$data);
	}



	public function logout()
	{ 
		$this->session->sess_destroy();
		$this->load->view('login1');

	}


	public function emplyees_view()
	{	

		$data['users']=$this->Lunch_model->view_emps();
		$this->load->view('Dashboard',$data);
	}



	public function Edit_emp($id)
	{
		$data['users']=$this->Lunch_model->select_record($id);
		$this->load->view('Edit_emp',$data);
	}


	public function Delete_emp($id)
	{
		 $this->Lunch_model->Delete_rec($id);
		 $this->session->set_flashdata('Delete', 'Record is deleted successfully');
		 redirect('Lunch_main_controller/emplyees_view');
	}


	public function update_reco($id)
	{			$this->form_validation->set_rules('empName','name','required');
				$this->form_validation->set_rules('gender','Gender','required');
		if ($_POST) 
		{     
			$name 			= $this->input->post('empName');
			$Gender 		= $this->input->post('gender');
			// echo $Gender;
			// exit();
			// $fname 			= $this->input->post('fName');
			// $designation 	= $this->input->post('designation');
			// $userfilepre 		= $this->input->post('pre_picture');

			$value = array(
				'Name'  	=>$name ,
				'Gender'	=>$Gender
			 );
				$this->Lunch_model->update_reco($id,$value);
				$this->session->set_flashdata('update', 'Your record is updated successfully');
				redirect('Lunch_main_controller/emplyees_view');
	    }

	}


	public function Add_new_emp()
	{
		$this->load->view('Add_new_emp');
	}


	public function insert_emp()
	{	 	
		   // $userpicture=$this->input->post('userPicture');
		   // print_r($userpicture);
		   // echo 'success';
		   //exit();
		 if (count($_FILES) > 0) 
       {
        // upload Profile
           $config['upload_path']   = './uploads/';
           $config['allowed_types'] = 'gif|jpg|png|PNG|JPEG|JPG|jpeg';
           $this->load->library('upload',$config);
           $this->upload->initialize($config);
           $this->load->library('image_lib');
           $userfile  = $this->upload->do_upload('userPicture');
           if ($userfile) 
           {
					$ret  = $this->upload->data();
					$userfile  				  = $ret['file_name'];
					$config['image_library']  = 'gd2';
					$config['source_image']   = './uploads/'.$userfile;
					$config['create_thumb']   = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width']    	  = 200;
					$config['height']   	  = 100;
					$this->image_lib->clear();
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
            }
		        else
		        {
		          $userfile = "";
		        }

        }
		$this->form_validation->set_rules('empName','name','required');
		$this->form_validation->set_rules('Gender','gender','required');
		if ($this->form_validation->run()===TRUE)
		{
		$name   = $this->input->post('empName');
		$Gender = $this->input->post('Gender');
		$value  = array(
			'Name'    =>$name , 
			'Gender'  =>$Gender,
			'Picture' =>$userfile
		);
		$this->Lunch_model->insert_record($value);
		//   $inser = array('member_id' = );
		// $this->Lunch_model->insert_reco($inser);
		$this->session->set_flashdata('insert', 'New emp is added successfully');
		$value1 = $this->Lunch_model->fetch_rec1();
			foreach ($value1 as $key )
			 {
				$emp = $key->member_id;
			  }
			  $value = array(
					'member_id' => $emp,
					'Amount'    => '0',
				    'Balance'   => '0'
				);
				$this->Lunch_model->insert_reco($value);
		redirect('Lunch_main_controller/emplyees_view');
		}
			else 
			{
				$this->session->set_flashdata('error', 'please enter some data.');
				redirect('Lunch_main_controller/Add_new_emp');
			}
	}



	public function Roti_rates()
	{	
		$data['rates']=$this->Lunch_model->Roti_rates();
		$this->load->view('roti_rates',$data);
	}


	public function roti_rate_update($id)
	{
		$this->form_validation->set_rules('patiri_roti','name','required|numeric|max_length[2]');
		// $this->form_validation->set_rules('khameri_roti','Gender','required|numeric|max_length[2]');
		if($this->form_validation->run()==TRUE)
		{
		$patiri_roti=$this->input->post('patiri_roti');
		$khamiri_roti=$this->input->post('khameri_roti');
		$value = array(
			'patiri_roti'  => $patiri_roti,
			 );
		$this->Lunch_model->roti_rate_update($id,$value);
		$this->session->set_flashdata('update', 'you are seccessfully update rates.');
		redirect('Lunch_main_controller/Roti_rates');
		}
		else
		{
			$this->session->set_flashdata('value_error', 'You entered an Wrong value.');
			redirect('Lunch_main_controller/Roti_rates');
		}
	}


	public function Lunch_form()
	{
		// echo "string";
		// exit();
		$data['users']=$this->Lunch_model->view_emps();
		$this->load->view('Lunch_form',$data);
	}


	public function Transections()
	{	
		$data['users']=$this->Lunch_model->view_emps();
		$this->load->view('Transections',$data);
	}


	public function add_balence()
	{	
		//$this->form_validation->set_rules('name','name','required|numaric');
		//$this->form_validation->set_rules('amount_Rs','amount_Rs','required|numaric');
		if($this->input->post('name') && $this->input->post('amount_Rs')) 
		 {   
			$emp=$this->input->post('name');
			$amount=$this->input->post('amount_Rs');
			// $currentid=$this->input->post('currentid');
			// echo $currentid;
			// exit();
			$value1=$this->Lunch_model->fetch_rec($emp);
			foreach ($value1 as $key )
			 {
				$current_balence = $key->Balance;
				$update_amount = $amount+$current_balence;
				$value = array(
					'member_id' => $emp,
					'Amount'    => $amount,
				    'Balance'   => $update_amount
				);
				
			  }
				$this->Lunch_model->insert_reco($value);
				$wallet_up = array('Wallet' => $update_amount, );
				$this->Lunch_model->update_reco($emp,$wallet_up);
				redirect('Lunch_main_controller/emplyees_view');
			}
			else
			{
				$this->session->set_flashdata('value_error', 'Please select any person and enter an amount.');
				redirect('Lunch_main_controller/Transections');
			}
	}


	public function Lunch_form_manipulation()
	{	$this->form_validation->set_rules('Total_bill','Bill','required|numeric');
		if ($this->form_validation->run()) 
		{
		$Total_bill=$this->input->post('Total_bill');
		if (empty($_POST['check_list2'])) 
						{
							$num  = count($_POST['check_list']);
							$divi = $Total_bill/$num;
							$who_took_lunch = $_POST['check_list'];
							for ($i=0; $i <count($_POST['check_list']) ; $i++) { 
								$value1=$this->Lunch_model->fetch_rec($who_took_lunch[$i]);
								foreach ($value1 as $key )
								 {
									$current_balence = $key->Balance;
									//echo $current_balence;
								  }
							$update_amount   = $current_balence-$divi;
							$value = array(
								'member_id' => $who_took_lunch[$i],
								'Amount'    => '-'.$divi,
								'Type'		=> 'Debit',
							    'Balance'   => $update_amount
							);
							$this->Lunch_model->insert_reco($value);
							$wallet_up = array('Wallet' => $update_amount, );
							$this->Lunch_model->update_reco($who_took_lunch[$i],$wallet_up);
							}
							redirect('Lunch_main_controller/emplyees_view');
						}				
		if(!empty($_POST['check_list'])) 
		{
			$who_took_lunch    = $_POST['check_list'];
			if(!empty($_POST['check_list2']))
			{
				$who_brought_lunch = $_POST['check_list2'];
				if (!array_diff($who_took_lunch, $who_brought_lunch)) 
				{
					$this->session->set_flashdata('error_message', 'you are not allow to check same persons.');
					redirect('Lunch_main_controller/Lunch_form');
				}
				 $c=0;
			for($i=0;$i<count($who_took_lunch);$i++)
			{	
				if(!in_array($who_took_lunch[$i] , $who_brought_lunch))
				{
				 // echo 'people who did not bring lunch:'. $who_took_lunch[$i] .'<br/>';
				  if ($who_took_lunch[$i]) 
				  {	
				  	$c++;
				  }
				}
				
				}
			if ($c==0) 
			{
				$c=1;
			}
			}
		}

		if(!empty($_POST['check_list2'])) 
		{	
			$data = $this->Lunch_model->Roti_rates();
			$mul2 = 2*$data->patiri_roti;
			$total_for_brought_curry = count($_POST['check_list2'])*$mul2;
			$secondLost_bill = $Total_bill-$total_for_brought_curry;
			if(!empty($_POST['check_list'])) 
			{
				$number_ofpersons = $secondLost_bill/$c;
			for($i=0;$i<count($who_took_lunch);$i++)
			{
				if(!in_array($who_took_lunch[$i] , $who_brought_lunch))
				{
				  //echo 'people who did not bring lunch:'. $who_took_lunch[$i] .'<br/>';
	    			$value1=$this->Lunch_model->fetch_rec($who_took_lunch[$i]);
					foreach ($value1 as $key )
					 {
						$current_balence = $key->Balance;
						//echo $current_balence;
					  }
							$update_amount   = $current_balence-$number_ofpersons;
							$value = array(
								'member_id' => $who_took_lunch[$i],
								'Amount'    => '-'.$number_ofpersons,
								'Type'		=> 'Debit',
							    'Balance'   => $update_amount
							);
							$this->Lunch_model->insert_reco($value);
							$wallet_up = array('Wallet' => $update_amount, );
							$this->Lunch_model->update_reco($who_took_lunch[$i],$wallet_up);
							
				    }
				}
				
			}
			    
		   }
		   		if(!empty($_POST['check_list2'])) 
		{	
			$data=$this->Lunch_model->Roti_rates();
			$mul2=2*$data->patiri_roti;
			$total_for_brought_curry=count($_POST['check_list2'])*$mul2;
			$secondLost_bill=$Total_bill-$total_for_brought_curry;
			if(!empty($_POST['check_list'])) 
			{
				$number_ofpersons = $secondLost_bill/$c;
			for($i=0;$i<count($who_took_lunch);$i++)
			{
				if(in_array($who_took_lunch[$i] , $who_brought_lunch))
				{
				    //echo 'people who bring lunch:'. $who_took_lunch[$i] .'<br/>';
	    			$value1 = $this->Lunch_model->fetch_rec($who_took_lunch[$i]);
					foreach ($value1 as $key )
					 {
						$current_balence = $key->Balance;
					}
							$update_amount   = $current_balence-$mul2;
							$value1 = array(
								'member_id' => $who_took_lunch[$i],
								'Amount'    => '-'.$mul2,
								'Type'		=> 'Debit',
							    'Balance'   => $update_amount
							);
							$this->Lunch_model->insert_reco($value1);
							$this->Lunch_model->insert_reco($value);
							$wallet_up = array('Wallet' => $update_amount, );
							$this->Lunch_model->update_reco($who_took_lunch[$i],$wallet_up);
				    }
				}
			}
			    
		   }
		   redirect('Lunch_main_controller/emplyees_view');
		 }
 		else
	    {
	    	$this->session->set_flashdata('value_error', 'Please enter an numaric value.');
			redirect('Lunch_main_controller/Lunch_form');
	    }
  }


  public function View_pre_reco()
  {
  	$id = '';
  	$data['user']  = $this->Lunch_model->fetch_prevous_record($id);
  	$data['users']=$this->Lunch_model->view_emps();
  	$this->load->view('view_pre_record',$data);
  }


  public function fetch_pre_record()
  { 
  	$this->form_validation->set_rules('name','name','required|numeric');
  	$id=$this->input->post('name');
	  	$data['user']  = $this->Lunch_model->fetch_prevous_record($id);
	  	$data['users'] = $this->Lunch_model->view_emps();
	  	$this->load->view("view_pre_record",$data);
  }



  public function All_transections()
  { 
  	$this->load->library('pagination');
  $config = [
        'base_url' => base_url('Lunch_main_controller/All_transections'),
        'per_page' =>10,
        'total_rows' => $this->Lunch_model->num_rows()
        // 'full_tag_open'=>"<ul class='pagination'>",
        // 'full_tag_close'=>"</ul>",
        // 'next_tag_open' =>"<li>",
        // 'next_tag_close' =>"</li>",
        // 'prev_tag_open' =>"<li>",
        // 'prev_tag_close' =>"</li>",
        // 'num_tag_open' =>"<li>",
        // 'num_tag_close' =>"<li>",
        // 'cur_tag_open' =>"<li class='active'><a>",
        // 'cur_tag_close' =>"</a></li>"
 			];
    $this->pagination->initialize($config);
    $records['user'] = $this->Lunch_model->reList($config['per_page'],$this->uri->segment(3));
    $this->load->view('All_transections',$records);
  	//$data['user'] = $this->Lunch_model->View_all_transections();
  	//$this->load->view('All_transections',$data);
  	//['articles'=>$records]
  }


  public function current_status()
  {	$data['users']=$this->Lunch_model->view_emps();
  	$this->load->view('current_status',$data);
  }
}