<?php

error_reporting(E_ERROR|E_WARNING);
ob_start();
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->library('session');
		$this->load->model('AdminModel');
		
		$ud = $this->session->userdata('userid');
        if ($ud < 1)
        {
              redirect('authenticate','refresh');
        }
		
	}

	function add() //display add customer form
	{
		$data['title'] = 'New user';
		$this->load->view('customer/header/header',$data);
		$this->load->view('admin/content/add', $data);
		$this->load->view('customer/footer/footer');
	}
	
	function userProfile() //display add customer form
	{
		$data['title'] = 'userProfile';
		$data['data'] = $this->getUserProfile();
		$this->load->view('customer/header/header',$data);
		$this->load->view('user/content/userProfile', $data);
		$this->load->view('customer/footer/footer');
	}
	
	function getUserProfile()
	{
		$userid = $this->session->userdata('userid');
		$query = $this->db->query("select * from users where id='$userid'");
		return $query->row_array();
	}
	
	function changeProfileImage()
	{
				$storeFolder = './uploads/pimages/';
				if ($_FILES["doc_"]["error"]!=4)
				{
					$max_filesize=10000000 ; //10mb
					$base_uploadSize = $_FILES['doc_']['size'];
					if($base_uploadSize < $max_filesize)
					{
						//remove existing image
						$userid = $this->session->userdata('userid');
						$path = $this->session->userdata('profile_image');
						unlink(FCPATH.$path);
						//$query = $this->db->query("delete from documents where id = '$docId'");
		
						$base_tempFile = $_FILES['doc_']['tmp_name'];
						
						//moving the base image
						$targetPath =$storeFolder;
						$temp = explode(".", $_FILES["doc_"]["name"]);
						$base_filename = time().$_FILES["doc_"]["name"];
						$targetFile =  $targetPath. $base_filename;
	
						//move file to directory
						move_uploaded_file($base_tempFile,$targetFile); 
						$base_path=$file_name='uploads/pimages/'.$base_filename;
						$this->db->query("update users set profile_image='$base_path' where id='$userid'");
						$this->session->set_userdata('profile_image', $base_path);
						
						echo '<img src="'.base_url().$base_path.'" alt="John Doe"/>';
					}
					else
					{
						echo "File is too large, max size is 10MB";
					}
				}
				else
				{
					echo "You must upload a file";
				}
	}
	
	
	function edit($encrypted_key)
	{
		$customerId = decrypt_url($encrypted_key);
		$data['title'] = 'Edit Customer';
		$data['cus_data'] = $this->CustomerModel->getCustomer($customerId);
		$data['doc_data_'] = $this->CustomerModel->getDocuments($customerId);
		$this->load->view('customer/header/header',$data);
		$this->load->view('customer/content/edit', $cus_data);
		$this->load->view('customer/footer/footer',$data);
	}
	
	function insertUser()
	{
		$this->form_validation->set_message('matches', 'Passwords do not match');
		$this->form_validation->set_rules('fullname', 'Name', 'trim|required');
		$this->form_validation->set_rules('designation', 'Designation', 'trim|required');
		$this->form_validation->set_rules('dept', 'Department', 'trim|required');
		$this->form_validation->set_rules('role', 'Role', 'trim|required');
		$this->form_validation->set_rules('uname', 'Username', 'trim|required|is_unique[users.uname]');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			//$this->addPartner();
			echo validation_errors();
		}
		else
		{
			
			$insertId = $this->AdminModel->insertUser();
            $num_inserts = $this->db->affected_rows();
            if($num_inserts=="1")
            {
				$storeFolder = './uploads/pimages/';
				if ($_FILES["doc_"]["error"]!=4)
				{
					$max_filesize=10000000 ; //10mb
					$base_uploadSize = $_FILES['doc_']['size'];
					if($base_uploadSize < $max_filesize)
					{
						$base_tempFile = $_FILES['doc_']['tmp_name'];
						
						//moving the base image
						$targetPath =$storeFolder;
						$temp = explode(".", $_FILES["doc_"]["name"]);
						$base_filename = time().$_FILES["doc_"]["name"];
						$targetFile =  $targetPath. $base_filename;
	
						//move file to directory
						move_uploaded_file($base_tempFile,$targetFile); 
						$base_path=$file_name='uploads/pimages/'.$base_filename;
						$this->db->query("update users set profile_image='$base_path' where id='$insertId'");
					}
				}
				echo $insertId;
				//echo "success";
				/*$this->session->set_flashdata('message', 'partner_added');
                redirect('admin/addPartner');*/
			}
			else
			{
				echo "There is an issue";
			}
		}
	}
	
	function updateUser()
	{
		$this->form_validation->set_rules('file_no', 'File No', 'trim|required');
		$this->form_validation->set_rules('status', 'File Status', 'trim|required');
		$this->form_validation->set_rules('supplier', 'Supplier', 'trim|required');
		$this->form_validation->set_rules('bank', 'bank', 'trim|required');
		$this->form_validation->set_rules('item', 'Item', 'trim|required');
		$this->form_validation->set_rules('form_m_number', 'Form M Number', 'trim|required');
		$this->form_validation->set_rules('company', 'Company', 'trim|required');
		$this->form_validation->set_rules('pfi_no', 'PFI No', 'trim|required');
		$this->form_validation->set_rules('quantity','Quantity', 'trim|required');
		$this->form_validation->set_rules('amount', 'Amount', 'trim|required');
		//$this->form_validation->set_rules('bill_of_ladding_no', 'Bill of ladding', 'trim|is_unique[customer.bill_of_ladding_no]');
		//$this->form_validation->set_rules('entry_no', 'Entry No', 'trim|is_unique[customer.entry_no]'); 
		
		/*$this->form_validation->set_rules('comp_feel_part', 'Question 9', 'trim|required');
		$this->form_validation->set_rules('comp_emp_manager', 'Question 10', 'trim|required');
		$this->form_validation->set_rules('comp_manager_emp', 'Question 11', 'trim|required');*/
		if ($this->form_validation->run() == FALSE)
		{
			//$this->addPartner();
			echo validation_errors();
		}
		else
		{
			$insertId = $this->CustomerModel->updateCustomer();
            $num_inserts = $this->db->affected_rows();
            if($num_inserts=="1")
            {
				//echo $insertId;
				echo 1 ;
				/*$this->session->set_flashdata('message', 'partner_added');
                redirect('admin/addPartner');*/
			}
			else
			{
				echo "No changes were made";
			}
		}
	}
	
}//end class
	ob_clean();
?>
