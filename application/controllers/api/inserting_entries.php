<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inserting_entries extends CI_Controller
{
	function __Construct()
	{
		parent::__construct();
		$this->load->model('Lunch_model');

	}
			function  index(){
				$arr=array(
					'Name'=>'test trigger',
					'Gender'=>'Male',
					'Picture'=>'jkshksj',
					'Wallet'=>'2.2'
				);
		 		//print_r($this->Lunch_model->insertmember());
				$aa=$this->Lunch_model->fetchrows();
				// $ten=array();
				// foreach($aa as $key){
				// 	array_push($ten,$key->member_id);
				//    }
				// $aaa=implode(',', $ten );print_r($aaa);
				// echo $aaa;
				print_r($aa);
				exit;
				//print_r($this->Lunch_model->selectmem(18));exit;
                    // $roll_string = '';
					// 				for($i=1; $i<=1000; $i++)
					// 				{
					// 				$roll_number = $i.$i;
					// 				$p_username = randam('sgaargergdfgsfgsthsdfgsdfseeghse');
					// 				$p_password = randam('sgaargergdfgsfgsthsdfgsdfseeghse');
					// 				$roll_string .= "('".$roll_number."',"."'".$p_username."',"."'".$p_password."',"."'".$roll_number."'),";
					// 				}
					// 				$roll_string = substr($roll_string, 0, -1);
					// 				$this->db->insert('members',$roll_string);



            }
}