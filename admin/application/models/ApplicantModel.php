<?php

class ApplicantModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function getIQScores()
	{
		$query = $this->db->query("select applicant_id, name, email, last_modified, q1+q2+q3+q4+q5+q6+q7+q8+q9+q10+q11+q12+q13+q14+q15+q16+q17+q18+q19+q20 as tot_score from iq_scores");
		
		return $query->result();
	}
	
	
	function insertUser()
	{
		$password = $this->input->post('password1');
		$hashed_password = password_hash($password,PASSWORD_DEFAULT);
		$data = array(
		"fullname" => $this->input->post('fullname'),
		"email" => $this->input->post('email'),
		"designation" => $this->input->post('designation'),
		"dept" => $this->input->post('dept'),
		"role" => $this->input->post('role'),
		"uname" => $this->input->post('uname'),
		"password" => $hashed_password,
		"status" => $this->input->post('status'),
		"date_added" => date('Y-m-d'),
		"date_modified" => date('Y-m-d'),
		"modified_by" => ""
		);
		$this->db->insert("users",$data);
		$insertId = $this->db->insert_id();
		//$this->session->set_userdata("insertId",$insertId);
		return $insertId ;
	}	
	
	
	
	function updateUser()
	{
		$cus_id = $this->input->post('insertId1');
		$data = array(
		"file_no" => $this->input->post('file_no'),
		"status" => $this->input->post('status'),
		"supplier" => $this->input->post('supplier'),
		"company" => $this->input->post('company'),
		"bank" => $this->input->post('bank'),
		"pfi_no" => $this->input->post('pfi_no'),
		"item" => $this->input->post('item'),
		"quantity" => $this->input->post('quantity'),
		"form_m_number" => $this->input->post('form_m_number'),
		"amount" => $this->input->post('amount'),
		"bill_no" => $this->input->post('bill_no'),
		"due_date" => $this->input->post('due_date'),
		"vessel_name_origin" => $this->input->post('vessel_name_origin'),
		"vessel_name_discharge" => $this->input->post('vessel_name_discharge'),
		"etd" => $this->input->post('etd'),
		"eta" => $this->input->post('eta'),
		"shipment_value" => $this->input->post('shipment_value'),
		"shipment_value_quantity" => $this->input->post('shipment_value_quantity'),
		"bill_of_ladding_no" => $this->input->post('bill_of_ladding_no'),
		"shipping_company" => $this->input->post('shipping_company'),
		"ship_com_charge_app_date" => $this->input->post('ship_com_charge_app_date'),
		"cus_exa_date" => $this->input->post('cus_exa_date'),
		"ship_com_rel_date" => $this->input->post('ship_com_rel_date'),
		"cus_rel_date" => $this->input->post('cus_rel_date'),
		"ship_charge_paid_date" => $this->input->post('ship_charge_paid_date'),
		"tdo_issuance_date" => $this->input->post('tdo_issuance_date'),
		"del_order_date" => $this->input->post('del_order_date'),
		"emp_cont_ret_date" => $this->input->post('emp_cont_ret_date'),
		"term_charges_app_date" => $this->input->post('term_charges_app_date'),
		"date_cont_card_rec" => $this->input->post('date_cont_card_rec'),
		"cust_book_date" => $this->input->post('cust_book_date'),
		"clearing_agent" => $this->input->post('clearing_agent'),
		"allocation" => $this->input->post('allocation'),
		"rotation_no" => $this->input->post('rotation_no'),
		"entry_no" => $this->input->post('entry_no'),
		"date_cleared" => $this->input->post('date_cleared'),
		"date_of_duty_paid" => $this->input->post('date_of_duty_paid'),
		"date_ecd_invoice_subm" => $this->input->post('date_ecd_invoice_subm'),
		"date_ecd_received" => $this->input->post('date_ecd_received'),
		"date_added" => date('Y-m-d'),
		"date_modified" => date('Y-m-d'),
		"modified_by" => ""
		);
		$this->db->where('customer_id',$cus_id);
		$this->db->update("customer",$data);
		//$insertId = $this->db->insert_id();
		//$this->session->set_userdata("insertId",$insertId);
		//return $insertId ;
	}	
	
	
	function getUsers()
	{
		$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id ");
		
		return $query->result();
	}
	
	function getUser($customerId)
	{
		$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.customer_id='$customerId'");
		return $query->row_array();
	}
	
}

?>
  