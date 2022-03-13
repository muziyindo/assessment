<?php

class EmployeeModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	
	function insertCustomer()
	{
		$data = array(
		"file_no" => $this->input->post('file_no'),
		"customer_type" => $this->input->post('customer_type'),
		"company_id" => $this->input->post('company_id'),
		"status" => $this->input->post('status'),
		"supplier" => $this->input->post('supplier'),
		"company" => $this->input->post('company'),
		"bank" => $this->input->post('bank'),
		"pfi_no" => $this->input->post('pfi_no'),
		"item" => $this->input->post('item'),
		"quantity" => $this->input->post('quantity'),
		"form_m_number" => $this->input->post('form_m_number'),
		"amount" => $this->input->post('amount'),
		"currency" => $this->input->post('currency'),
		"bill_no" => $this->input->post('bill_no'),
		"due_date" => ($this->input->post('due_date') != FALSE) ? $this->input->post('due_date') : NULL,
		"vessel_name_origin" => $this->input->post('vessel_name_origin'),
		"vessel_name_discharge" => $this->input->post('vessel_name_discharge'),
		"etd" => ($this->input->post('etd') != FALSE) ? $this->input->post('etd') : NULL,
		"eta" => ($this->input->post('eta') != FALSE) ? $this->input->post('eta') : NULL,
		"shipment_value" => $this->input->post('shipment_value'),
		"currency_ship_value" => $this->input->post('currency_ship_value'),
		"shipment_value_quantity" => $this->input->post('shipment_value_quantity'),
		"bill_of_ladding_no" => $this->input->post('bill_of_ladding_no'),
		"shipping_company" => $this->input->post('shipping_company'),
		"ship_com_charge_app_date" => ($this->input->post('ship_com_charge_app_date') != FALSE) ? $this->input->post('ship_com_charge_app_date') : NULL,
		"cus_exa_date" => ($this->input->post('cus_exa_date') != FALSE) ? $this->input->post('cus_exa_date') : NULL,
		"ship_com_rel_date" => ($this->input->post('ship_com_rel_date') != FALSE) ? $this->input->post('ship_com_rel_date') : NULL,
		"cus_rel_date" => ($this->input->post('cus_rel_date') != FALSE) ? $this->input->post('cus_rel_date') : NULL,
		"ship_charge_paid_date" => ($this->input->post('ship_charge_paid_date') != FALSE) ? $this->input->post('ship_charge_paid_date') : NULL,
		"tdo_issuance_date" => ($this->input->post('tdo_issuance_date') != FALSE) ? $this->input->post('tdo_issuance_date') : NULL,
		"del_order_date" => ($this->input->post('del_order_date') != FALSE) ? $this->input->post('del_order_date') : NULL,
		"emp_cont_ret_date" => ($this->input->post('emp_cont_ret_date') != FALSE) ? $this->input->post('emp_cont_ret_date') : NULL,
		"term_charges_app_date" => ($this->input->post('term_charges_app_date') != FALSE) ? $this->input->post('term_charges_app_date') : NULL,
		"date_cont_card_rec" => ($this->input->post('date_cont_card_rec') != FALSE) ? $this->input->post('date_cont_card_rec') : NULL,
		"cust_book_date" => ($this->input->post('cust_book_date') != FALSE) ? $this->input->post('cust_book_date') : NULL,
		"clearing_agent" => $this->input->post('clearing_agent'),
		"allocation" => $this->input->post('allocation'),
		"rotation_no" => $this->input->post('rotation_no'),
		"entry_no" => $this->input->post('entry_no'),
		"date_cleared" => ($this->input->post('date_cleared') != FALSE) ? $this->input->post('date_cleared') : NULL,
		"date_of_duty_paid" => ($this->input->post('date_of_duty_paid') != FALSE) ? $this->input->post('date_of_duty_paid') : NULL,
		"date_ecd_invoice_subm" => ($this->input->post('date_ecd_invoice_subm') != FALSE) ? $this->input->post('date_ecd_invoice_subm') : NULL,
		"date_ecd_received" => ($this->input->post('date_ecd_received') != FALSE) ? $this->input->post('date_ecd_received') : NULL,
		"date_added" => date('Y-m-d'),
		"date_modified" => date('Y-m-d'),
		"modified_by" => ""
		);
		$this->db->insert("customer",$data);
		$insertId = $this->db->insert_id();
		//$this->session->set_userdata("insertId",$insertId);
		return $insertId ;
	}	
	
	function insertActionsTaken()
	{
		$customer_id = $this->input->post('insertId2');
		$data = array(
		"customer_id" => $customer_id,
		"mar_ins_paid" => $this->input->post('mar_ins_paid'),
		"mar_ins_paid_date" => ($this->input->post('mar_ins_paid_date') != FALSE) ? $this->input->post('mar_ins_paid_date') : NULL,
		"orig_bl_rec" => $this->input->post('orig_bl_rec'),
		"orig_bl_rec_date" => ($this->input->post('orig_bl_rec_date') != FALSE) ? $this->input->post('orig_bl_rec_date') : NULL,
		"naf_receipt_rec" => $this->input->post('naf_receipt_rec'),
		"naf_receipt_rec_date" => ($this->input->post('naf_receipt_rec_date') != FALSE) ? $this->input->post('naf_receipt_rec_date') : NULL,
		"copy_docs_rec" => $this->input->post('copy_docs_rec'),
		"copy_docs_rec_date" => ($this->input->post('copy_docs_rec_date') != FALSE) ? $this->input->post('copy_docs_rec_date') : NULL,
		"paar_rec" => $this->input->post('paar_rec'),
		"paar_rec_date" => ($this->input->post('paar_rec_date') != FALSE) ? $this->input->post('paar_rec_date') : NULL,
		"escort_letter" => $this->input->post('escort_letter'),
		"escort_letter_date" => ($this->input->post('escort_letter_date') != FALSE) ? $this->input->post('escort_letter_date') : NULL,
		"copy_health_doc_rec" => $this->input->post('copy_health_doc_rec'),
		"copy_health_doc_rec_date" => ($this->input->post('copy_health_doc_rec_date') != FALSE) ? $this->input->post('copy_health_doc_rec_date') : NULL,
		"fish_lic_rec" => $this->input->post('fish_lic_rec'),
		"fish_lic_rec_date" => ($this->input->post('fish_lic_rec_date') != FALSE) ? $this->input->post('fish_lic_rec_date') : NULL,
		"tdo_rec" => $this->input->post('tdo_rec'),
		"tdo_rec_date" => ($this->input->post('tdo_rec_date') != FALSE) ? $this->input->post('tdo_rec_date') : NULL,
		"soncap_rec" => $this->input->post('soncap_rec'),
		"soncap_rec_date" => ($this->input->post('soncap_rec_date') != FALSE) ? $this->input->post('soncap_rec_date') : NULL,
		"docs_sent_nav" => $this->input->post('docs_sent_nav'),
		"docs_sent_nav_date" => ($this->input->post('docs_sent_nav_date') != FALSE) ? $this->input->post('docs_sent_nav_date') : NULL,
		"cont_card_rec" => $this->input->post('cont_card_rec'),
		"cont_card_rec_date" => ($this->input->post('cont_card_rec_date') != FALSE) ? $this->input->post('cont_card_rec_date') : NULL,
		"fum_cert_rec" => $this->input->post('fum_cert_rec'),
		"fum_cert_rec_date" => ($this->input->post('fum_cert_rec_date') != FALSE) ? $this->input->post('fum_cert_rec_date') : NULL,
		"docs_sent_agent" => $this->input->post('docs_sent_agent'),
		"docs_sent_agent_date" => ($this->input->post('docs_sent_agent_date') != FALSE) ? $this->input->post('docs_sent_agent_date') : NULL,
		"ref_rec" => $this->input->post('ref_rec'),
		"ref_rec_date" => ($this->input->post('ref_rec_date') != FALSE) ? $this->input->post('ref_rec_date') : NULL,
		"date_added" => date('Y-m-d'),
		"date_modified" => date('Y-m-d'),
		"modified_by" => ""
		);
		$this->db->insert("actions_taken",$data);
		
		return $customer_id ;
	}
	
	function updateCustomer()
	{
		$cus_id = $this->input->post('insertId1');
		$data = array(
		"file_no" => $this->input->post('file_no'),
		"customer_type" => $this->input->post('customer_type'),
		"company_id" => $this->input->post('company_id'),
		"status" => $this->input->post('status'),
		"supplier" => $this->input->post('supplier'),
		"company" => $this->input->post('company'),
		"bank" => $this->input->post('bank'),
		"pfi_no" => $this->input->post('pfi_no'),
		"item" => $this->input->post('item'),
		"quantity" => $this->input->post('quantity'),
		"form_m_number" => $this->input->post('form_m_number'),
		"amount" => $this->input->post('amount'),
		"currency" => $this->input->post('currency'),
		"bill_no" => $this->input->post('bill_no'),
		"due_date" => ($this->input->post('due_date') != FALSE) ? $this->input->post('due_date') : NULL,
		"vessel_name_origin" => $this->input->post('vessel_name_origin'),
		"vessel_name_discharge" => $this->input->post('vessel_name_discharge'),
		"etd" => ($this->input->post('etd') != FALSE) ? $this->input->post('etd') : NULL,
		"eta" => ($this->input->post('eta') != FALSE) ? $this->input->post('eta') : NULL,
		"shipment_value" => $this->input->post('shipment_value'),
		"currency_ship_value" => $this->input->post('currency_ship_value'),
		"shipment_value_quantity" => $this->input->post('shipment_value_quantity'),
		"bill_of_ladding_no" => $this->input->post('bill_of_ladding_no'),
		"shipping_company" => $this->input->post('shipping_company'),
		"ship_com_charge_app_date" => ($this->input->post('ship_com_charge_app_date') != FALSE) ? $this->input->post('ship_com_charge_app_date') : NULL,
		"cus_exa_date" => ($this->input->post('cus_exa_date') != FALSE) ? $this->input->post('cus_exa_date') : NULL,
		"ship_com_rel_date" => ($this->input->post('ship_com_rel_date') != FALSE) ? $this->input->post('ship_com_rel_date') : NULL,
		"cus_rel_date" => ($this->input->post('cus_rel_date') != FALSE) ? $this->input->post('cus_rel_date') : NULL,
		"ship_charge_paid_date" => ($this->input->post('ship_charge_paid_date') != FALSE) ? $this->input->post('ship_charge_paid_date') : NULL,
		"tdo_issuance_date" => ($this->input->post('tdo_issuance_date') != FALSE) ? $this->input->post('tdo_issuance_date') : NULL,
		"del_order_date" => ($this->input->post('del_order_date') != FALSE) ? $this->input->post('del_order_date') : NULL,
		"emp_cont_ret_date" => ($this->input->post('emp_cont_ret_date') != FALSE) ? $this->input->post('emp_cont_ret_date') : NULL,
		"term_charges_app_date" => ($this->input->post('term_charges_app_date') != FALSE) ? $this->input->post('term_charges_app_date') : NULL,
		"date_cont_card_rec" => ($this->input->post('date_cont_card_rec') != FALSE) ? $this->input->post('date_cont_card_rec') : NULL,
		"cust_book_date" => ($this->input->post('cust_book_date') != FALSE) ? $this->input->post('cust_book_date') : NULL,
		"clearing_agent" => $this->input->post('clearing_agent'),
		"allocation" => $this->input->post('allocation'),
		"rotation_no" => $this->input->post('rotation_no'),
		"entry_no" => $this->input->post('entry_no'),
		"date_cleared" => ($this->input->post('date_cleared') != FALSE) ? $this->input->post('date_cleared') : NULL,
		"date_of_duty_paid" => ($this->input->post('date_of_duty_paid') != FALSE) ? $this->input->post('date_of_duty_paid') : NULL,
		"date_ecd_invoice_subm" => ($this->input->post('date_ecd_invoice_subm') != FALSE) ? $this->input->post('date_ecd_invoice_subm') : NULL,
		"date_ecd_received" => ($this->input->post('date_ecd_received') != FALSE) ? $this->input->post('date_ecd_received') : NULL,
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
	
	function updateActionsTaken()
	{
		$customer_id = $this->input->post('insertId2');
		$data = array(
		//"customer_id" => $customer_id,
		"mar_ins_paid" => $this->input->post('mar_ins_paid'),
		"mar_ins_paid_date" => ($this->input->post('mar_ins_paid_date') != FALSE) ? $this->input->post('mar_ins_paid_date') : NULL,
		"orig_bl_rec" => $this->input->post('orig_bl_rec'),
		"orig_bl_rec_date" => ($this->input->post('orig_bl_rec_date') != FALSE) ? $this->input->post('orig_bl_rec_date') : NULL,
		"naf_receipt_rec" => $this->input->post('naf_receipt_rec'),
		"naf_receipt_rec_date" => ($this->input->post('naf_receipt_rec_date') != FALSE) ? $this->input->post('naf_receipt_rec_date') : NULL,
		"copy_docs_rec" => $this->input->post('copy_docs_rec'),
		"copy_docs_rec_date" => ($this->input->post('copy_docs_rec_date') != FALSE) ? $this->input->post('copy_docs_rec_date') : NULL,
		"paar_rec" => $this->input->post('paar_rec'),
		"paar_rec_date" => ($this->input->post('paar_rec_date') != FALSE) ? $this->input->post('paar_rec_date') : NULL,
		"escort_letter" => $this->input->post('escort_letter'),
		"escort_letter_date" => ($this->input->post('escort_letter_date') != FALSE) ? $this->input->post('escort_letter_date') : NULL,
		"copy_health_doc_rec" => $this->input->post('copy_health_doc_rec'),
		"copy_health_doc_rec_date" => ($this->input->post('copy_health_doc_rec_date') != FALSE) ? $this->input->post('copy_health_doc_rec_date') : NULL,
		"fish_lic_rec" => $this->input->post('fish_lic_rec'),
		"fish_lic_rec_date" => ($this->input->post('fish_lic_rec_date') != FALSE) ? $this->input->post('fish_lic_rec_date') : NULL,
		"tdo_rec" => $this->input->post('tdo_rec'),
		"tdo_rec_date" => ($this->input->post('tdo_rec_date') != FALSE) ? $this->input->post('tdo_rec_date') : NULL,
		"soncap_rec" => $this->input->post('soncap_rec'),
		"soncap_rec_date" => ($this->input->post('soncap_rec_date') != FALSE) ? $this->input->post('soncap_rec_date') : NULL,
		"docs_sent_nav" => $this->input->post('docs_sent_nav'),
		"docs_sent_nav_date" => ($this->input->post('docs_sent_nav_date') != FALSE) ? $this->input->post('docs_sent_nav_date') : NULL,
		"cont_card_rec" => $this->input->post('cont_card_rec'),
		"cont_card_rec_date" => ($this->input->post('cont_card_rec_date') != FALSE) ? $this->input->post('cont_card_rec_date') : NULL,
		"fum_cert_rec" => $this->input->post('fum_cert_rec'),
		"fum_cert_rec_date" => ($this->input->post('fum_cert_rec_date') != FALSE) ? $this->input->post('fum_cert_rec_date') : NULL,
		"docs_sent_agent" => $this->input->post('docs_sent_agent'),
		"docs_sent_agent_date" => ($this->input->post('docs_sent_agent_date') != FALSE) ? $this->input->post('docs_sent_agent_date') : NULL,
		"ref_rec" => $this->input->post('ref_rec'),
		"ref_rec_date" => ($this->input->post('ref_rec_date') != FALSE) ? $this->input->post('ref_rec_date') : NULL,
		"date_added" => date('Y-m-d'),
		"date_modified" => date('Y-m-d'),
		"modified_by" => ""
		);
		
		$this->db->where('customer_id',$customer_id);
		$this->db->update("actions_taken",$data);
		//return $customer_id ;
	}
	
	function getCustomers()
	{
		$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id ");
		
		return $query->result();
	}
	
	function getCustomer($customerId)
	{
		$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.customer_id='$customerId'");
		return $query->row_array();
	}
	
	function getDocuments($customerId)
	{
		$query = $this->db->query("select id,customer_id,doc_name,path from documents where customer_id='$customerId' ");
		return $query->result();
	}
	
	function getUserCount()
	{
		$query = $this->db->query("select id from users ");
		return $query->num_rows();
	}
	
	function getCustomerCount()
	{
		$query = $this->db->query("select customer_id from customer");
		return $query->num_rows();
	}
	
	
	
}

?>
  