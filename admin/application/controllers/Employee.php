<?php

error_reporting(E_ERROR|E_WARNING);
ob_start();
class Employee extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('security');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ApplicantModel');
		$this->load->model('EmployeeModel');
		
		$ud = $this->session->userdata('userid');
        if ($ud < 1)
        {
              redirect('authenticate','refresh');
        }
		
	}
	
	function index()
	{
		$data['title'] = 'Dashboard';
		$data['userCount'] = $this->EmployeeModel->getUserCount();
		$data['dirSize'] = $this->dirSize();
		$data['customerCount'] = $this->EmployeeModel->getCustomerCount();
		$this->load->view('customer/header/header',$data);
		$this->load->view('customer/content/dashboard', $data);
		$this->load->view('customer/footer/footer');
	}
	
	function dirSize($dir = FCPATH."uploads/pfiles")
    {
        $dirSize = 0;
        if(!is_dir($dir)){return false;};
        $files = scandir($dir);if(!$files){return false;}
        $files = array_diff($files, array('.','..'));

        foreach ($files as $file) {
            if(is_dir("$dir/$file")){
                 $dirSize += dirSize("$dir/$file");
            }else{
                $dirSize += filesize("$dir/$file");
            }
        }
        return $dirSize;
    }

	function add() //display add customer form
	{
		$data['title'] = 'New user';
		$this->load->view('customer/header/header',$data);
		$this->load->view('admin/content/add', $data);
		$this->load->view('customer/footer/footer');
	}
	
	function customers() //display add customer form
	{
		$data['coded'] = $this ;
		$data['title'] = 'Customers';
		$data['data'] = $this->EmployeeModel->getCustomers();
		$this->load->view('customer/header/header',$data);
		$this->load->view('customer/content/customers', $data);
		$this->load->view('customer/footer/footer');
	}
	
	
	
	function edit($encrypted_key)
	{
		$customerId = decrypt_url($encrypted_key);
		$data['title'] = 'Edit Customer';
		$data['cus_data'] = $this->EmployeeModel->getCustomer($customerId);
		$data['doc_data_'] = $this->EmployeeModel->getDocuments($customerId);
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
			
			$insertId = $this->ApplicantModel->insertUser();
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
			$insertId = $this->EmployeeModel->updateCustomer();
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
