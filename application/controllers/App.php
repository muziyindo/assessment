<?php

error_reporting(E_ERROR|E_WARNING);
ob_start();
class App extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->database();
		$this->load->library('form_validation');
		//$this->load->library('encryption');
		$this->load->library('session');
		$this->load->model('App_model');
		
		$ud = $this->session->userdata('userid');
        if ($ud < 1)
        {
              redirect('site','refresh');
        }
		
	}
	
	//Displays Choose Job Position Page
	function jobPosition()
	{
		$job_position_id = $this->session->userdata('job_position_id');
		$query = $this->db->query("SELECT positions FROM job_positions where job_id = '$job_position_id' ");
		foreach($query->result() as $value)
		{
				$position = $value->positions;
		}
		
		$data['title'] = 'Job Position';
		$data['position'] = $position ;
		$data['position_id'] = $job_position_id ;
		$this->load->view('header/header',$data);
		$this->load->view('content/select_job_position');
		$this->load->view('footer/footer');
	}
	
	//check if applying for another position
	function check()
	{
		$uid = $this->session->userdata('userid');
		$job_position_id = $this->session->userdata('job_position_id');
		$selected_position_id = $this->input->post('position_id');
		
		if(($selected_position_id == $job_position_id) or $selected_position_id=="")
		{
			//check if applicant has already taken the test
			$this->checkIfTakenTest($uid);
		}
		else
		{
			$this->db->query("delete from iq_scores where applicant_id='$uid'");
			$this->db->query("update applicants set position_applied_for_id='$selected_position_id' where id='$uid'");
			$this->checkIfTakenTest($uid);
		}
		
	}
	
	function checkIfTakenTest($uid)
	{
		//check if applicant has already taken the test
		$query = $this->db->query("SELECT * FROM iq_scores WHERE applicant_id='$uid' ");
		if($query->num_rows()>0)
		{
			foreach($query->result() as $value)
			{
				$submitted = $value->submitted;
				if($submitted == "yes")
				{
					redirect('app/existingNotice','refresh');
				}
				else
				{
					echo "You took this test but did not submit";
				}
				
			}
		}
		
		else
		{
			redirect('app/notice','refresh');
		}
		
	}
	
	//Displays Notice Welcome Note
	function notice()
	{
		$data['title'] = 'Notice';
		$this->load->view('header/header',$data);
		$this->load->view('content/notice');
		$this->load->view('footer/footer');
	}
	
	function endNotice()
	{
		$applicant_id = $this->session->userdata('userid');
		$query = $this->db->query("select q1+q2+q3+q4+q5+q6+q7+q8+q9+q10+q11+q12+q13+q14+q15+q16+q17+q18+q19+q20 as tot_score from iq_scores where applicant_id = '$applicant_id'");
		foreach($query->result() as $value)
		{
			$tot_score = $value->tot_score;
		}
		
		$data['title'] = 'Notice';
		$data['tot_score'] = $tot_score;
		$this->load->view('header/header',$data);
		$this->load->view('content/end_notice',$data);
		$this->load->view('footer/footer');
	}
	
	function existingNotice()
	{
		$data['title'] = 'Notice';
		$this->load->view('header/header',$data);
		$this->load->view('content/already_taken_test');
		$this->load->view('footer/footer');
	}
	
	//Displays the iq questions
	function iq()
	{
		
		//check if applicant has already taken the test
		$applicant_id = $this->session->userdata('userid');
		$query = $this->db->query("SELECT * FROM iq_scores WHERE applicant_id='$applicant_id' ");
		if($query->num_rows()>0)
		{
			foreach($query->result() as $value)
			{
				$submitted = $value->submitted;
				if($submitted == "yes")
				{
					redirect('app/existingNotice','refresh');
				}
				else
				{
					echo "You took this test but did not submit";
				}
				
			}
		}
		else
		{
			$random_no = rand(1,5);
			$data['title'] = 'Psychometric';
			$this->load->view('header/header',$data);
			$this->load->view('content/iq'.$random_no);
			//$this->load->view('content/iq5');
			$this->load->view('footer/footer');
		}
	}
	
	function insertQ1()
	{
		//check that a row has already been created on iq_scores table for currently logged in user
		$applicant_id = $this->session->userdata('userid');
		$query = $this->db->query("select applicant_id from iq_scores where applicant_id = '$applicant_id'");
		if($query->num_rows()>0)
		{
			$q1 = $this->input->post('q1');
			if($q1 == NULL) //if user didn't select any option and just clicks next
			{
					echo 5 ;
			}
			else if($q1 == 0 || $q1 == 5)
			{
				$insertId = $this->App_model->updateQ1();
				$num_inserts = $this->db->affected_rows();
				if($num_inserts=="1")
				{
					echo 3;
				}
				else
				{
					echo 5;
				}
			}
		}
		else
		{
			$insertId = $this->App_model->insertQ1();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ2()
	{
		$q2 = $this->input->post('q2');
		if($q2 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q2 == 0 || $q2 == 5)
		{
			$insertId = $this->App_model->updateQ2();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ3()
	{
		$q3 = $this->input->post('q3');
		if($q3 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q3 == 0 || $q3 == 5)
		{
			$insertId = $this->App_model->updateQ3();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ4()
	{
		$q4 = $this->input->post('q4');
		if($q4 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q4 == 0 || $q4 == 5)
		{
			$insertId = $this->App_model->updateQ4();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
		
	}
	
	function updateQ5()
	{
		$q5 = $this->input->post('q5');
		if($q5 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q5 == 0 || $q5 == 5)
		{
			$insertId = $this->App_model->updateQ5();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ6()
	{
		$q6 = $this->input->post('q6');
		if($q6 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q6 == 0 || $q6 == 5)
		{
			$insertId = $this->App_model->updateQ6();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ7()
	{
		
		$q7 = $this->input->post('q7');
		if($q7 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q7 == 0 || $q7 == 5)
		{
			$insertId = $this->App_model->updateQ7();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ8()
	{
		$q8 = $this->input->post('q8');
		if($q8 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q8 == 0 || $q8 == 5)
		{
			$insertId = $this->App_model->updateQ8();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
		
	}
	
	function updateQ9()
	{
		$q9 = $this->input->post('q9');
		if($q9 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q9 == 0 || $q9 == 5)
		{
			$insertId = $this->App_model->updateQ9();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
		
	}
	
	function updateQ10()
	{
		$q10 = $this->input->post('q10');
		if($q10 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q10 == 0 || $q10 == 5)
		{
			$insertId = $this->App_model->updateQ10();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
		
	}
	
	function updateQ11()
	{
		
		$q11 = $this->input->post('q11');
		if($q11 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q11 == 0 || $q11 == 5)
		{
			$insertId = $this->App_model->updateQ11();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
		
	}
	
	function updateQ12()
	{
		$q12 = $this->input->post('q12');
		if($q12 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q12 == 0 || $q12 == 5)
		{
			$insertId = $this->App_model->updateQ12();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
		
	}
	
	function updateQ13()
	{
		$q13 = $this->input->post('q13');
		if($q13 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q13 == 0 || $q13 == 5)
		{
			$insertId = $this->App_model->updateQ13();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ14()
	{
		$q14 = $this->input->post('q14');
		if($q14 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q14 == 0 || $q14 == 5)
		{
			$insertId = $this->App_model->updateQ14();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ15()
	{
		$q15 = $this->input->post('q15');
		if($q15 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q15 == 0 || $q15 == 5)
		{
			$insertId = $this->App_model->updateQ15();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
		
	}
	
	function updateQ16()
	{
		$q16 = $this->input->post('q16');
		if($q16 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q16 == 0 || $q16 == 5)
		{
			$insertId = $this->App_model->updateQ16();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ17()
	{
		$q17 = $this->input->post('q17');
		if($q17 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q17 == 0 || $q17 == 5)
		{
			$insertId = $this->App_model->updateQ17();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ18()
	{
		$q18 = $this->input->post('q18');
		if($q18 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q18 == 0 || $q18 == 5)
		{
			$insertId = $this->App_model->updateQ18();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
	}
	
	function updateQ19()
	{
		$q19 = $this->input->post('q19');
		if($q19 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q19 == 0 || $q19 == 5)
		{
			$insertId = $this->App_model->updateQ19();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}
		
	}
	
	function updateQ20()
	{
		$insertId = $this->App_model->updateQ20();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
			
		/*$q20 = $this->input->post('q20');
		if($q20 == NULL) //if user didn't select any option and just clicks next
		{
				echo 5 ;
		}
		else if($q20 == 0 || $q20 == 5)
		{
			$insertId = $this->App_model->updateQ20();
			$num_inserts = $this->db->affected_rows();
			if($num_inserts=="1")
			{
				echo 3;
			}
			else
			{
				echo 5;
			}
		}*/
		
	}

}
	ob_clean();
?>
