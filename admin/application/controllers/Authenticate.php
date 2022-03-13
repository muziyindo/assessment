<?php

error_reporting(E_ERROR|E_WARNING);

class Authenticate extends CI_Controller 
{

   public function __construct()
   {
       parent::__construct();

	   $this->load->database();
	   $this->load->helper('url');
       $this->load->library('encryption');
       $this->load->library('session');
       $this->load->library('form_validation');
	   
   }
   
	function index()
	{
		$data['title'] = 'Login Page';
		$this->load->view('login',$data);
	}
   
   function authenticate()
   {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$check = $this->db->query("SELECT * FROM users WHERE uname='$username' and status='1'");
		
		if($check->num_rows()>0)
		{
			$pword = $this->db->query("SELECT password FROM users WHERE uname='$username' and status='1'");
			$pword = $pword->result();
			
			$verify = password_verify($password,$pword[0]->password);
			
			if($verify==1)
			{
				
				//get user details
				foreach($check->result() as $value)
				{
					//store user details in session
					$this->session->set_userdata('userid', $value->id);
					$this->session->set_userdata('uname', $value->uname);
					$this->session->set_userdata('name', $value->fullname);
					$this->session->set_userdata('role', $value->role);
					$this->session->set_userdata('email', $value->email);
					$this->session->set_userdata('designation', $value->designation);
					$this->session->set_userdata('dept', $value->dept);
					$this->session->set_userdata('profile_image', $value->profile_image);
				}
				echo 1 ;
			}
			else
			{
				echo "invalid password";
			}
			
		}
		else
		{
			echo "invalid username";
		}
	}
	
	function logout()
	{
      
      /*Unset every session*/
      $this->session->unset_userdata('userid');
      $this->session->unset_userdata('uname');
      $this->session->unset_userdata('fullname');
      $this->session->unset_userdata('dept');
      $this->session->unset_userdata('role');
	  $this->session->unset_userdata('designation');
	  $this->session->unset_userdata('email');
	  $this->session->unset_userdata('profile_image');

      redirect('authenticate','refresh');
	}
   
   
  

}//end controller class



?>