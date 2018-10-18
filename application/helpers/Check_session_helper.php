
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function issessionExists()
{
	if(!$this->session->userdata('username'))  
           { 
                //$this->load->view('examples/sign-in');
           	    redirect(base_url() . 'HRT_web_controller/index');  
           }  
          
}
