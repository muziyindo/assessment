<?php

error_reporting(E_ERROR|E_WARNING);
ob_start();
class Applicant extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->library('session');
		$this->load->model('ApplicantModel');
		
		$ud = $this->session->userdata('userid');
        if ($ud < 1)
        {
              redirect('authenticate','refresh');
        }
		
	}
	
	function index()
	{
		$data['title'] = 'Test Scores';
		$data['data'] = $this->ApplicantModel->getIQScores();
		$this->load->view('applicant/header/header',$data);
		$this->load->view('applicant/content/iq_scores', $data);
		$this->load->view('applicant/footer/footer');
	}

	function dashboard()
	{
		$this->applicantIQScores();
	}
	
	function applicantIQScores() //display add customer form
	{
		//$data['coded'] = $this ;
		$data['title'] = 'Test Scores';
		$data['data'] = $this->ApplicantModel->getIQScores();
		$this->load->view('applicant/header/header',$data);
		$this->load->view('applicant/content/iq_scores', $data);
		$this->load->view('applicant/footer/footer');
	}
	
	function registeredApplicants() //display add customer form
	{
		//$data['coded'] = $this ;
		$data['title'] = 'Registered Applicants';
		$data['data'] = $this->ApplicantModel->getCustomers();
		$this->load->view('applicant/header/header',$data);
		$this->load->view('applicant/content/customers', $data);
		$this->load->view('applicant/footer/footer');
	}
	
	function customers() //display add customer form
	{
		//$data['coded'] = $this ;
		$data['title'] = 'Customers';
		$data['data'] = $this->CustomerModel->getCustomers();
		$this->load->view('customer/header/header',$data);
		$this->load->view('customer/content/customers', $data);
		$this->load->view('customer/footer/footer');
	}
	
	
}//end class
	ob_clean();
?>
