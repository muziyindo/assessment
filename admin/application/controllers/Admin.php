<?php

error_reporting(E_ERROR|E_WARNING);
ob_start();
class Customer extends CI_Controller
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
		$this->load->model('CustomerModel');
		
		$ud = $this->session->userdata('userid');
        if ($ud < 1)
        {
              redirect('authenticate','refresh');
        }
		
	}
	
	function index()
	{
		$data['title'] = 'Dashboard';
		$data['userCount'] = $this->CustomerModel->getUserCount();
		$data['dirSize'] = $this->dirSize();
		$data['customerCount'] = $this->CustomerModel->getCustomerCount();
		$this->load->view('customer/header/header',$data);
		$this->load->view('customer/content/dashboard', $data);
		$this->load->view('customer/footer/footer');
	}

	function dashboard()
	{
		
		$data['title'] = 'Dashboard';
		$data['userCount'] = $this->CustomerModel->getUserCount();
		$data['customerCount'] = $this->CustomerModel->getCustomerCount();
		$this->load->view('customer/header/header',$data);
		$this->load->view('customer/content/dashboard', $data);
		$this->load->view('customer/footer/footer');
	}

	function add() //display add customer form
	{
		$data['title'] = 'New Customer';
		$this->load->view('customer/header/header',$data);
		$this->load->view('customer/content/add', $data);
		$this->load->view('customer/footer/footer');
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
	
	function insertCustomer()
	{
		$this->form_validation->set_rules('file_no', 'File No', 'trim|required|is_unique[customer.file_no]');
		$this->form_validation->set_rules('status', 'File Status', 'trim|required');
		$this->form_validation->set_rules('customer_type', 'Customer Type', 'trim|required');
		$this->form_validation->set_rules('supplier', 'Supplier', 'trim|required');
		$this->form_validation->set_rules('bank', 'bank', 'trim|required');
		$this->form_validation->set_rules('item', 'Item', 'trim|required');
		$this->form_validation->set_rules('form_m_number', 'Form M Number', 'trim|required|is_unique[customer.form_m_number]');
		$this->form_validation->set_rules('company', 'Company', 'trim|required');
		$this->form_validation->set_rules('pfi_no', 'PFI No', 'trim|required');
		$this->form_validation->set_rules('quantity','Quantity', 'trim|required');
		$this->form_validation->set_rules('amount', 'Amount', 'trim|required');
		$this->form_validation->set_rules('currency', 'Amount Currency', 'trim|required');
		$this->form_validation->set_rules('bill_of_ladding_no', 'Bill of ladding', 'trim|is_unique[customer.bill_of_ladding_no]');
		$this->form_validation->set_rules('entry_no', 'Entry No', 'trim|is_unique[customer.entry_no]');
		$shipment_value = $this->input->post('shipment_value');
		if(!empty($shipment_value))
			$this->form_validation->set_rules('currency_ship_value', 'Shipment Value Currency', 'trim|required');
		
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
			$insertId = $this->CustomerModel->insertCustomer();
            $num_inserts = $this->db->affected_rows();
            if($num_inserts=="1")
            {
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
	
	function insertActionsTaken()
	{
		$mar_ins_paid = $this->input->post('mar_ins_paid');
		$orig_bl_rec = $this->input->post('orig_bl_rec');
		$naf_receipt_rec = $this->input->post('naf_receipt_rec');
		$copy_docs_rec = $this->input->post('copy_docs_rec');
		$paar_rec = $this->input->post('paar_rec');
		$escort_letter = $this->input->post('escort_letter');
		$copy_health_doc_rec = $this->input->post('copy_health_doc_rec');
		$fish_lic_rec = $this->input->post('fish_lic_rec');
		$tdo_rec = $this->input->post('tdo_rec');
		$soncap_rec = $this->input->post('soncap_rec');
		$docs_sent_nav = $this->input->post('docs_sent_nav');
		$cont_card_rec = $this->input->post('cont_card_rec');
		$fum_cert_rec = $this->input->post('fum_cert_rec');
		$docs_sent_agent = $this->input->post('docs_sent_agent');
		$ref_rec = $this->input->post('ref_rec');
		
		$this->form_validation->set_rules('insertId2', 'System ID', 'trim|required'); 
		if(!empty($mar_ins_paid)){
			$this->form_validation->set_rules('mar_ins_paid_date', 'Marine Insurance Paid Date', 'trim|required'); 
		}
		
		if(!empty($orig_bl_rec)){
		$this->form_validation->set_rules('orig_bl_rec_date', 'Original B/L Received Date', 'trim|required'); }
		
		if(!empty($naf_receipt_rec)){
		$this->form_validation->set_rules('naf_receipt_rec_date', 'Nafdac Receipt Received Date', 'trim|required'); }
		
		if(!empty($copy_docs_rec)){
		$this->form_validation->set_rules('copy_docs_rec_date', 'Copy Documents Received Date', 'trim|required'); }
		
		if(!empty($paar_rec)){
		$this->form_validation->set_rules('paar_rec_date', 'PAAR Received Date', 'trim|required'); }
		
		if(!empty($escort_letter)){
		$this->form_validation->set_rules('escort_letter_date', 'Escort Letter Received Date', 'trim|required'); }
		
		if(!empty($copy_health_doc_rec)){
		$this->form_validation->set_rules('copy_health_doc_rec_date', 'Copy Health Docs Received Date', 'trim|required'); }
		
		if(!empty($fish_lic_rec)){
		$this->form_validation->set_rules('fish_lic_rec_date', 'Fishing License Received Date', 'trim|required'); }
		
		else if(!empty($tdo_rec)){
		$this->form_validation->set_rules('tdo_rec_date', 'TDO Received Date', 'trim|required'); }
		
		else if(!empty($tdo_rec)){
		$this->form_validation->set_rules('tdo_rec_date', 'TDO Received Date', 'trim|required'); }
		
		if(!empty($soncap_rec)){
		$this->form_validation->set_rules('soncap_rec_date', 'SONCAP Received Date', 'trim|required'); }
		
		if(!empty($docs_sent_nav)){
		$this->form_validation->set_rules('docs_sent_nav_date', 'DOCS Sent For Navision Date', 'trim|required'); }
		
		if(!empty($cont_card_rec)){
		$this->form_validation->set_rules('cont_card_rec_date', 'Container Card Received Date', 'trim|required'); }
		
		if(!empty($fum_cert_rec)){
		$this->form_validation->set_rules('fum_cert_rec_date', 'Fumigation Certificate Received Date', 'trim|required'); }
		
		if(!empty($docs_sent_agent)){
		$this->form_validation->set_rules('docs_sent_agent_date', 'DOCS Sent to Clearing Agent Date', 'trim|required'); }
		
		if(!empty($ref_rec)){
		$this->form_validation->set_rules('ref_rec_date', 'Refund Received Date', 'trim|required'); } 
		
		
		
		if ($this->form_validation->run() === FALSE)
		{
			//$this->addPartner();
			echo validation_errors();
		}
		else
		{
			$insertId = $this->CustomerModel->insertActionsTaken();
            $num_inserts = $this->db->affected_rows();
            if($num_inserts=="1")
            {
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
	
	
	function insertDocuments()
	{	
			
			//error_reporting(E_ALL);
			$customer_id = $this->input->post('insertId3');
            $uploaded = 0 ;
            $storeFolder = './uploads/pfiles/';
			
			
			$doc_name = $this->input->post('doc_name');
			if (empty($doc_name))
			{
				//$this->addPartner();
				echo "Document Name is required";
				
			}
			else
			{
				if ($_FILES["doc_"]["error"]!=4)
				{
					$max_filesize=70000000 ; //70mb
					$base_uploadSize = $_FILES['doc_']['size'];
					if($base_uploadSize < $max_filesize)
					{
						
						echo '<link href="'.base_url().'assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">';
						echo '<link href="'.base_url().'assets/css/fontawesome/font-awesome.min.css" rel="stylesheet">';
						echo '<script src="'.base_url().'assets/js/jquery.min.js"> </script>';
						echo '<script src="'.base_url().'assets/js/bootstrap.min.js"> </script>';
						
						$base_tempFile = $_FILES['doc_']['tmp_name'];
						
						//moving the base image
						$targetPath =$storeFolder;
						$temp = explode(".", $_FILES["doc_"]["name"]);
						$base_filename = time().$_FILES["doc_"]["name"];
						$targetFile =  $targetPath. $base_filename;
	
						
						
						//move file to directory
						move_uploaded_file($base_tempFile,$targetFile); 
						$base_path=$file_name='uploads/pfiles/'.$base_filename;
	
						$data = array(
						'customer_id' => $customer_id,
						'doc_name' => $this->input->post('doc_name'),
						'path' =>$base_path,
						"date_added" => date('Y-m-d'),
						"date_modified" => date('Y-m-d'),
						"modified_by" => ""
							);
						$this->db->insert('documents', $data);
						$num_inserts = $this->db->affected_rows();
						if($num_inserts=="1")
						{
							$query = $this->db->query("select id,doc_name,path from documents where customer_id='$customer_id'");
							$count = 1 ;
							//echo $insertId;
							echo '<table class="table table-striped"><tr><th>S/N</th><th>Document Name</th><th>File Name</th><th>Delete</th><th>Download</th></tr>';
							foreach($query->result() as $value)
							{
								echo '<tr><td>'.$count.'</td><td>'.$value->doc_name.'</td><td>'.$value->path.'</td><td><a href="#" id='.'"aaa'.$value->id.'"><span  class="fa fa-trash-o"></span></a></td><td><a href="'.site_url().'/Customer/download_documents/'.encrypt_url($value->id).'"><span class="fa fa-download"></span></a></td></tr>';
								$count++ ;
							}
							echo '</table>';
							
							echo '<script>';
							echo '$(function() {';
							foreach($query->result() as $value2){
								echo '$("#aaa'.$value2->id.'").on("click",function(e){'.
									'$.post( "'.site_url().'/customer/removeDocument/'.encrypt_url($value2->id).'", function( data ) {'.
										'$("#doc_data").html(data);'.
										'alert("Document successfully deleted");'.
									'});'.
									
								'});';
								
							}
							echo '});';
							echo '</script>';
		
		
						}
					}
					else
					{
						echo "File is too large, max size is 70MB";
					}
				}
				else
				{
					echo "You must upload atleast one document";
				}
			}
			
	}
	
	
	function updateCustomer()
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
		if(!empty($shipment_value))
			$this->form_validation->set_rules('currency_ship_value', 'Shipment Value Currency', 'trim|required');
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
	
	function updateActionsTaken()
	{
		//checkboxes
		$mar_ins_paid = $this->input->post('mar_ins_paid');
		$orig_bl_rec = $this->input->post('orig_bl_rec');
		$naf_receipt_rec = $this->input->post('naf_receipt_rec');
		$copy_docs_rec = $this->input->post('copy_docs_rec');
		$paar_rec = $this->input->post('paar_rec');
		$escort_letter = $this->input->post('escort_letter');
		$copy_health_doc_rec = $this->input->post('copy_health_doc_rec');
		$fish_lic_rec = $this->input->post('fish_lic_rec');
		$tdo_rec = $this->input->post('tdo_rec');
		$soncap_rec = $this->input->post('soncap_rec');
		$docs_sent_nav = $this->input->post('docs_sent_nav');
		$cont_card_rec = $this->input->post('cont_card_rec');
		$fum_cert_rec = $this->input->post('fum_cert_rec');
		$docs_sent_agent = $this->input->post('docs_sent_agent');
		$ref_rec = $this->input->post('ref_rec');
		
		//dates
		$mar_ins_paid_date = $this->input->post('mar_ins_paid_date');
		$orig_bl_rec_date = $this->input->post('orig_bl_rec_date');
		$naf_receipt_rec_date = $this->input->post('naf_receipt_rec_date');
		$copy_docs_rec_date = $this->input->post('copy_docs_rec_date');
		$paar_rec_date = $this->input->post('paar_rec_date');
		$escort_letter_date = $this->input->post('escort_letter_date');
		$copy_health_doc_rec_date = $this->input->post('copy_health_doc_rec_date');
		$fish_lic_rec_date = $this->input->post('fish_lic_rec_date');
		$tdo_rec_date = $this->input->post('tdo_rec_date');
		$soncap_rec_date = $this->input->post('soncap_rec_date');
		$docs_sent_nav_date = $this->input->post('docs_sent_nav_date');
		$cont_card_rec_date = $this->input->post('cont_card_rec_date');
		$fum_cert_rec_date = $this->input->post('fum_cert_rec_date');
		$docs_sent_agent_date = $this->input->post('docs_sent_agent_date');
		$ref_rec_date = $this->input->post('ref_rec_date');
		
		$this->form_validation->set_rules('insertId2', 'System ID', 'trim|required'); 
		if(!empty($mar_ins_paid)){
			$this->form_validation->set_rules('mar_ins_paid_date', 'Marine Insurance Paid Date', 'trim|required'); 
		}
		
		if(!empty($orig_bl_rec)){
		$this->form_validation->set_rules('orig_bl_rec_date', 'Original B/L Received Date', 'trim|required'); }
		
		if(!empty($naf_receipt_rec)){
		$this->form_validation->set_rules('naf_receipt_rec_date', 'Nafdac Receipt Received Date', 'trim|required'); }
		
		if(!empty($copy_docs_rec)){
		$this->form_validation->set_rules('copy_docs_rec_date', 'Copy Documents Received Date', 'trim|required'); }
		
		if(!empty($paar_rec)){
		$this->form_validation->set_rules('paar_rec_date', 'PAAR Received Date', 'trim|required'); }
		
		if(!empty($escort_letter)){
		$this->form_validation->set_rules('escort_letter_date', 'Escort Letter Received Date', 'trim|required'); }
		
		if(!empty($copy_health_doc_rec)){
		$this->form_validation->set_rules('copy_health_doc_rec_date', 'Copy Health Docs Received Date', 'trim|required'); }
		
		if(!empty($fish_lic_rec)){
		$this->form_validation->set_rules('fish_lic_rec_date', 'Fishing License Received Date', 'trim|required'); }
		
		else if(!empty($tdo_rec)){
		$this->form_validation->set_rules('tdo_rec_date', 'TDO Received Date', 'trim|required'); }
		
		else if(!empty($tdo_rec)){
		$this->form_validation->set_rules('tdo_rec_date', 'TDO Received Date', 'trim|required'); }
		
		if(!empty($soncap_rec)){
		$this->form_validation->set_rules('soncap_rec_date', 'SONCAP Received Date', 'trim|required'); }
		
		if(!empty($docs_sent_nav)){
		$this->form_validation->set_rules('docs_sent_nav_date', 'DOCS Sent For Navision Date', 'trim|required'); }
		
		if(!empty($cont_card_rec)){
		$this->form_validation->set_rules('cont_card_rec_date', 'Container Card Received Date', 'trim|required'); }
		
		if(!empty($fum_cert_rec)){
		$this->form_validation->set_rules('fum_cert_rec_date', 'Fumigation Certificate Received Date', 'trim|required'); }
		
		if(!empty($docs_sent_agent)){
		$this->form_validation->set_rules('docs_sent_agent_date', 'DOCS Sent to Clearing Agent Date', 'trim|required'); }
		
		if(!empty($ref_rec)){
		$this->form_validation->set_rules('ref_rec_date', 'Refund Received Date', 'trim|required'); } 
		
		
		
		if ($this->form_validation->run() === FALSE)
		{
			//$this->addPartner();
			echo validation_errors();
		}
		else
		{
			$insertId = $this->CustomerModel->updateActionsTaken();
            $num_inserts = $this->db->affected_rows();
            if($num_inserts=="1")
            {
				//echo $insertId;
				echo 1;
				/*$this->session->set_flashdata('message', 'partner_added');
                redirect('admin/addPartner');*/
			}
			else
			{
				echo "No changes were made";
			}
		}
	}
			
	function download_documents($encrypted_key)
	{
		$docId = decrypt_url($encrypted_key);
		$query = $this->db->query("select path from documents where id = '$docId'");
		foreach($query->result() as $value)
		{
			$path = $value->path;
		}
		
		//replace white spaces in file name with html whitespaces
		$path = str_replace(' ','%20',$path);
		
		$filePAthArray = explode("/",$path) ;
		
		$this->load->helper('file');
		$this->load->helper('download');
		
		ob_clean();
		$data = file_get_contents(base_url().$path);
		
		$exten = explode(".",$filePAthArray[2]) ;
		
		//echo $filePAthArray[2] ;
		
	    if($exten[1]=="jpg")
		{
			$name = 'document.jpg';
		}
		else if($exten[1]=="png")
		{
			$name = 'document.png';
		}
		else if($exten[1]=="doc")
		{
			$name = 'document.doc';
		}
		else if($exten[1]=="docx")
		{
			$name = $exten[0].'.docx';
		}
		else if($exten[1]=="xlsx")
		{
			$name = 'document.xlsx';
		}
		else if($exten[1]=="pdf")
		{
			$name = 'document.pdf';
		}
		else if($exten[1]=="ppt")
		{
			$name = 'document.ppt';
		}
		else if($exten[1]=="pptx")
		{
			$name = 'document.pptx';
		}
		//$name = 'document.docx';
		force_download($name,$data); 
	}
			
	function removeDocument($encrypted_key)
	{
		echo '<link href="'.base_url().'assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">';
		echo '<link href="'.base_url().'assets/css/fontawesome/font-awesome.min.css" rel="stylesheet">';
		echo '<script src="'.base_url().'assets/js/jquery.min.js"> </script>';
		echo '<script src="'.base_url().'assets/js/bootstrap.min.js"> </script>';
		
		
		
		$docId = decrypt_url($encrypted_key);
		$query = $this->db->query("select path,customer_id from documents where id = '$docId'");
		
		foreach($query->result() as $value)
		{
			$path = $value->path;
			$customerId = $value->customer_id;
		}
		//remove file from folder and database
		unlink(FCPATH.$path);
		$query = $this->db->query("delete from documents where id = '$docId'");
		
		//fetch new documents record
		$query_ = $this->db->query("select id,customer_id,doc_name,path from documents where customer_id='$customerId'");
		$count = 1 ;
		//echo $insertId;
		echo '<table class="table table-striped"><tr><th>S/N</th><th>Document Name</th><th>File Name</th><th>Delete</th><th>Download</th></tr>';
		foreach($query_->result() as $value_)
		{
			echo '<tr><td>'.$count.'</td><td>'.$value_->doc_name.'</td><td>'.$value_->path.'</td><td><a href="#" id='.'"aaa'.$value_->id.'"><span  class="fa fa-trash-o"></span></a></td><td><a href="'.site_url().'/Customer/download_documents/'.encrypt_url($value_->id).'"><span class="fa fa-download"></span></a></td></tr>';
			$count++ ;
		}
		echo '</table>';
		
		echo '<script>';
		
		echo '$(function() {';
		
		foreach($query_->result() as $value2){
		
			echo '$("#aaa'.$value2->id.'").on("click",function(e){'.
				'$.post( "'.site_url().'/customer/removeDocument/'.encrypt_url($value2->id).'", function( data ) {'.
					'$("#doc_data").html(data);'.
					'alert("Document successfully deleted");'.
				'});'.
				
			'});';
			
		 }
		 
		echo '});';
		 
		echo '</script>';
		
	}
	
	function get_dir_size()
	{
		$size = 0;
		$files= glob($directory.'/*');
		foreach($files as $path){
			is_file($path) && $size += filesize($path);
			is_dir($path) && get_dir_size($path);
		}
		return $size;
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
	
}//end class
	ob_clean();
?>
