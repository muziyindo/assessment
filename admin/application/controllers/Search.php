<?php

error_reporting(E_ERROR|E_WARNING);
ob_start();
class Search extends CI_Controller
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
		$this->load->model('CustomerModel');
		
		$ud = $this->session->userdata('userid');
        if ($ud < 1)
        {
              redirect('authenticate','refresh');
        }
		
	}
	
	function search()
	{
		$btn_search = $this->input->post('btn_search');
		$date_option = $this->input->post('date_option');
		$keyword = $this->input->post('keyword');
		
		if($btn_search=="Search")
		{
			
			if(empty($date_option) && empty($keyword))
			{
				$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id ");
			}
			else if(empty($date_option) && !empty($keyword))
			{
				$data['keyword'] = $keyword;
				
				$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
			}
			else if(!empty($date_option) && empty($keyword))
			{
				
				//get the textfields contents
				$due_date_start = $this->input->post('due_date_start'); $due_date_end = $this->input->post('due_date_end');
			    $etd_start = $this->input->post('etd_start'); $etd_end = $this->input->post('etd_end');
				$eta_start = $this->input->post('eta_start'); $eta_end = $this->input->post('eta_end');
				$duty_paid_start = $this->input->post('duty_paid_start'); $duty_paid_end = $this->input->post('duty_paid_end');
				$date_cleared_start = $this->input->post('date_cleared_start'); $date_cleared_end = $this->input->post('date_cleared_end');
				$cus_exa_date_start = $this->input->post('cus_exa_date_start'); $cus_exa_date_end = $this->input->post('cus_exa_date_end');
				$ship_com_app_date_start = $this->input->post('ship_com_app_date_start'); $ship_com_app_date_end = $this->input->post('ship_com_app_date_end');
				$cus_rel_date_start = $this->input->post('cus_rel_date_start'); $cus_rel_date_end = $this->input->post('cus_rel_date_end');
				$ship_com_rel_start = $this->input->post('ship_com_rel_start'); $ship_com_rel_end = $this->input->post('ship_com_rel_end');
				$tdo_issuance_start = $this->input->post('tdo_issuance_start'); $tdo_issuance_end = $this->input->post('tdo_issuance_end');
				$ship_chrg_paid_start = $this->input->post('ship_chrg_paid_start'); $ship_chrg_paid_end = $this->input->post('ship_chrg_paid_end');
				$emp_cont_ret_start = $this->input->post('emp_cont_ret_start'); $emp_cont_ret_end = $this->input->post('emp_cont_ret_end');
				
				//due date
				if($date_option=="due_date" && !empty($due_date_start) && empty($due_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.due_date>='$due_date_start'");
				}
				else if($date_option=="due_date" && empty($due_date_start) && !empty($due_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.due_date<='$due_date_end'");
				}
				else if($date_option=="due_date" && !empty($due_date_start) && !empty($due_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.due_date>='$due_date_start' and customer.due_date<='$due_date_end'");
				}
				//etd
				else if($date_option=="etd" && !empty($etd_start) && empty($etd_end))
				{
					
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.etd>='$etd_start'");
				}
				else if($date_option=="etd" && empty($etd_start) && !empty($etd_end))
				{ 
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.etd<='$etd_end'");
				}
				else if($date_option=="etd" && !empty($etd_start) && !empty($etd_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.etd>='$etd_start' and customer.etd<='$etd_end'");
				}
				//eta
				else if($date_option=="eta" && !empty($eta_start) && empty($eta_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.eta>='$eta_start'");
				}
				else if($date_option=="eta" && empty($eta_start) && !empty($eta_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.eta<='$eta_end'");
				}
				else if($date_option=="eta" && !empty($eta_start) && !empty($eta_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.eta>='$eta_start' and customer.eta<='$eta_end'");
				}
				//duty_paid
				else if($date_option=="duty_paid" && !empty($duty_paid_start) && empty($duty_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_of_duty_paid>='$duty_paid_start'");
				}
				else if($date_option=="duty_paid" && empty($duty_paid_start) && !empty($duty_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_of_duty_paid<='$duty_paid_end'");
				}
				else if($date_option=="duty_paid" && !empty($duty_paid_start) && !empty($duty_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_of_duty_paid>='$duty_paid_start' and customer.date_of_duty_paid<='$duty_paid_end'");
				}
				//date_cleared
				else if($date_option=="date_cleared" && !empty($date_cleared_start) && empty($date_cleared_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_cleared>='$date_cleared_start'");
				}
				else if($date_option=="date_cleared" && empty($date_cleared_start) && !empty($date_cleared_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_cleared<='$date_cleared_end'");
				}
				else if($date_option=="date_cleared" && !empty($date_cleared_start) && !empty($date_cleared_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_cleared>='$date_cleared_start' and customer.date_cleared<='$date_cleared_end'");
				}
				//cus_exa_date
				else if($date_option=="cus_exa_date" && !empty($cus_exa_date_start) && empty($cus_exa_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_exa_date>='$cus_exa_date_start'");
				}
				else if($date_option=="cus_exa_date" && empty($cus_exa_date_start) && !empty($cus_exa_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_exa_date<='$cus_exa_date_end'");
				}
				else if($date_option=="cus_exa_date" && !empty($cus_exa_date_start) && !empty($cus_exa_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_exa_date>='$cus_exa_date_start' and customer.cus_exa_date<='$cus_exa_date_end'");
				}
				//ship_com_app_date
				else if($date_option=="ship_com_app_date" && !empty($ship_com_app_date_start) && empty($ship_com_app_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_charge_app_date>='$cus_exa_date_start'");
				}
				else if($date_option=="ship_com_app_date" && empty($ship_com_app_date_start) && !empty($ship_com_app_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_charge_app_date<='$cus_exa_date_end'");
				}
				else if($date_option=="ship_com_app_date" && !empty($ship_com_app_date_start) && !empty($ship_com_app_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_charge_app_date>='$cus_exa_date_start' and customer.ship_com_charge_app_date<='$cus_exa_date_end'");
				}
				//cus_rel_date
				else if($date_option=="cus_rel_date" && !empty($cus_rel_date_start) && empty($cus_rel_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_rel_date>='$cus_rel_date_start'");
				}
				else if($date_option=="cus_rel_date" && empty($cus_rel_date_start) && !empty($cus_rel_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_rel_date<='$cus_rel_date_end'");
				}
				else if($date_option=="cus_rel_date" && !empty($cus_rel_date_start) && !empty($cus_rel_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_rel_date>='$cus_rel_date_start' and customer.cus_rel_date<='$cus_rel_date_end'");
				}
				//ship_com_rel
				else if($date_option=="ship_com_rel" && !empty($ship_com_rel_start) && empty($ship_com_rel_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_rel_date>='$ship_com_rel_start'");
				}
				else if($date_option=="ship_com_rel" && empty($ship_com_rel_start) && !empty($ship_com_rel_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_rel_date<='$ship_com_rel_end'");
				}
				else if($date_option=="ship_com_rel" && !empty($ship_com_rel_start) && !empty($ship_com_rel_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_rel_date>='$ship_com_rel_start' and customer.ship_com_rel_date<='$ship_com_rel_end'");
				}
				//tdo_issuance
				else if($date_option=="tdo_issuance" && !empty($tdo_issuance_start) && empty($tdo_issuance_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.tdo_issuance_date>='$tdo_issuance_start'");
				}
				else if($date_option=="tdo_issuance" && empty($tdo_issuance_start) && !empty($tdo_issuance_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.tdo_issuance_date<='$tdo_issuance_end'");
				}
				else if($date_option=="tdo_issuance" && !empty($tdo_issuance_start) && !empty($tdo_issuance_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.tdo_issuance_date>='$tdo_issuance_start' and customer.tdo_issuance_date<='$tdo_issuance_end'");
				}
				//ship_chrg_paid
				else if($date_option=="ship_chrg_paid" && !empty($ship_chrg_paid_start) && empty($ship_chrg_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_charge_paid_date>='$ship_chrg_paid_start'");
				}
				else if($date_option=="ship_chrg_paid" && empty($ship_chrg_paid_start) && !empty($ship_chrg_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_charge_paid_date<='$ship_chrg_paid_end'");
				}
				else if($date_option=="ship_chrg_paid" && !empty($ship_chrg_paid_start) && !empty($ship_chrg_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_charge_paid_date>='$ship_chrg_paid_start' and customer.ship_charge_paid_date<='$ship_chrg_paid_end'");
				}
				//emp_cont_ret
				else if($date_option=="emp_cont_ret" && !empty($emp_cont_ret_start) && empty($emp_cont_ret_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.emp_cont_ret_date>='$emp_cont_ret_start'");
				}
				else if($date_option=="emp_cont_ret" && empty($emp_cont_ret_start) && !empty($emp_cont_ret_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.emp_cont_ret_date<='$emp_cont_ret_end'");
				}
				else if($date_option=="emp_cont_ret" && !empty($emp_cont_ret_start) && !empty($emp_cont_ret_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.emp_cont_ret_date>='$emp_cont_ret_start' and customer.emp_cont_ret_date<='$emp_cont_ret_end'");
				}
				else
				{
					
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id ");
				}
				
			}
			else if(!empty($date_option) && !empty($keyword))
			{
				
				//get the textfields contents
				$due_date_start = $this->input->post('due_date_start'); $due_date_end = $this->input->post('due_date_end');
			    $etd_start = $this->input->post('etd_start'); $etd_end = $this->input->post('etd_end');
				$eta_start = $this->input->post('eta_start'); $eta_end = $this->input->post('eta_end');
				$duty_paid_start = $this->input->post('duty_paid_start'); $duty_paid_end = $this->input->post('duty_paid_end');
				$date_cleared_start = $this->input->post('date_cleared_start'); $date_cleared_end = $this->input->post('date_cleared_end');
				$cus_exa_date_start = $this->input->post('cus_exa_date_start'); $cus_exa_date_end = $this->input->post('cus_exa_date_end');
				$ship_com_app_date_start = $this->input->post('ship_com_app_date_start'); $ship_com_app_date_end = $this->input->post('ship_com_app_date_end');
				$cus_rel_date_start = $this->input->post('cus_rel_date_start'); $cus_rel_date_end = $this->input->post('cus_rel_date_end');
				$ship_com_rel_start = $this->input->post('ship_com_rel_start'); $ship_com_rel_end = $this->input->post('ship_com_rel_end');
				$tdo_issuance_start = $this->input->post('tdo_issuance_start'); $tdo_issuance_end = $this->input->post('tdo_issuance_end');
				$ship_chrg_paid_start = $this->input->post('ship_chrg_paid_start'); $ship_chrg_paid_end = $this->input->post('ship_chrg_paid_end');
				$emp_cont_ret_start = $this->input->post('emp_cont_ret_start'); $emp_cont_ret_end = $this->input->post('emp_cont_ret_end');
				
				//due date
				if($date_option=="due_date" && !empty($due_date_start) && empty($due_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.due_date>='$due_date_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="due_date" && empty($due_date_start) && !empty($due_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.due_date<='$due_date_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="due_date" && !empty($due_date_start) && !empty($due_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.due_date>='$due_date_start' and customer.due_date<='$due_date_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//etd
				else if($date_option=="etd" && !empty($etd_start) && empty($etd_end))
				{
					
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.etd>='$etd_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="etd" && empty($etd_start) && !empty($etd_end))
				{ 
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.etd<='$etd_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="etd" && !empty($etd_start) && !empty($etd_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.etd>='$etd_start' and customer.etd<='$etd_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//eta
				else if($date_option=="eta" && !empty($eta_start) && empty($eta_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.eta>='$eta_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="eta" && empty($eta_start) && !empty($eta_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.eta<='$eta_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="eta" && !empty($eta_start) && !empty($eta_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.eta>='$eta_start' and customer.eta<='$eta_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//duty_paid
				else if($date_option=="duty_paid" && !empty($duty_paid_start) && empty($duty_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_of_duty_paid>='$duty_paid_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="duty_paid" && empty($duty_paid_start) && !empty($duty_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_of_duty_paid<='$duty_paid_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="duty_paid" && !empty($duty_paid_start) && !empty($duty_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_of_duty_paid>='$duty_paid_start' and customer.date_of_duty_paid<='$duty_paid_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//date_cleared
				else if($date_option=="date_cleared" && !empty($date_cleared_start) && empty($date_cleared_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_cleared>='$date_cleared_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="date_cleared" && empty($date_cleared_start) && !empty($date_cleared_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_cleared<='$date_cleared_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="date_cleared" && !empty($date_cleared_start) && !empty($date_cleared_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.date_cleared>='$date_cleared_start' and customer.date_cleared<='$date_cleared_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//cus_exa_date
				else if($date_option=="cus_exa_date" && !empty($cus_exa_date_start) && empty($cus_exa_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_exa_date>='$cus_exa_date_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="cus_exa_date" && empty($cus_exa_date_start) && !empty($cus_exa_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_exa_date<='$cus_exa_date_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="cus_exa_date" && !empty($cus_exa_date_start) && !empty($cus_exa_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_exa_date>='$cus_exa_date_start' and customer.cus_exa_date<='$cus_exa_date_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//ship_com_app_date
				else if($date_option=="ship_com_app_date" && !empty($ship_com_app_date_start) && empty($ship_com_app_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_charge_app_date>='$cus_exa_date_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="ship_com_app_date" && empty($ship_com_app_date_start) && !empty($ship_com_app_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_charge_app_date<='$cus_exa_date_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="ship_com_app_date" && !empty($ship_com_app_date_start) && !empty($ship_com_app_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_charge_app_date>='$cus_exa_date_start' and customer.ship_com_charge_app_date<='$cus_exa_date_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//cus_rel_date
				else if($date_option=="cus_rel_date" && !empty($cus_rel_date_start) && empty($cus_rel_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_rel_date>='$cus_rel_date_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="cus_rel_date" && empty($cus_rel_date_start) && !empty($cus_rel_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_rel_date<='$cus_rel_date_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="cus_rel_date" && !empty($cus_rel_date_start) && !empty($cus_rel_date_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.cus_rel_date>='$cus_rel_date_start' and customer.cus_rel_date<='$cus_rel_date_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//ship_com_rel
				else if($date_option=="ship_com_rel" && !empty($ship_com_rel_start) && empty($ship_com_rel_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_rel_date>='$ship_com_rel_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="ship_com_rel" && empty($ship_com_rel_start) && !empty($ship_com_rel_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_rel_date<='$ship_com_rel_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="ship_com_rel" && !empty($ship_com_rel_start) && !empty($ship_com_rel_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_com_rel_date>='$ship_com_rel_start' and customer.ship_com_rel_date<='$ship_com_rel_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//tdo_issuance
				else if($date_option=="tdo_issuance" && !empty($tdo_issuance_start) && empty($tdo_issuance_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.tdo_issuance_date>='$tdo_issuance_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="tdo_issuance" && empty($tdo_issuance_start) && !empty($tdo_issuance_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.tdo_issuance_date<='$tdo_issuance_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="tdo_issuance" && !empty($tdo_issuance_start) && !empty($tdo_issuance_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.tdo_issuance_date>='$tdo_issuance_start' and customer.tdo_issuance_date<='$tdo_issuance_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//ship_chrg_paid
				else if($date_option=="ship_chrg_paid" && !empty($ship_chrg_paid_start) && empty($ship_chrg_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_charge_paid_date>='$ship_chrg_paid_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="ship_chrg_paid" && empty($ship_chrg_paid_start) && !empty($ship_chrg_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_charge_paid_date<='$ship_chrg_paid_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="ship_chrg_paid" && !empty($ship_chrg_paid_start) && !empty($ship_chrg_paid_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.ship_charge_paid_date>='$ship_chrg_paid_start' and customer.ship_charge_paid_date<='$ship_chrg_paid_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				//emp_cont_ret
				else if($date_option=="emp_cont_ret" && !empty($emp_cont_ret_start) && empty($emp_cont_ret_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.emp_cont_ret_date>='$emp_cont_ret_start' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="emp_cont_ret" && empty($emp_cont_ret_start) && !empty($emp_cont_ret_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.emp_cont_ret_date<='$emp_cont_ret_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else if($date_option=="emp_cont_ret" && !empty($emp_cont_ret_start) && !empty($emp_cont_ret_end))
				{
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id where customer.emp_cont_ret_date>='$emp_cont_ret_start' and customer.emp_cont_ret_date<='$emp_cont_ret_end' and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				else
				{
					
					$query = $this->db->query("select *, customer.customer_id as cus_id from customer join actions_taken on actions_taken.customer_id = customer.customer_id and (customer.file_no like '%$keyword%' or customer.customer_type like '%$keyword%' or customer.supplier like '%$keyword%' or customer.company like '%$keyword%' or customer.bank like '%$keyword%' or customer.pfi_no like '%$keyword%' or customer.item like '%$keyword%' or customer.quantity like '%$keyword%' or customer.form_m_number like '%$keyword%' or customer.bill_no like '%$keyword%' or customer.vessel_name_origin like '%$keyword%' or customer.vessel_name_discharge like '%$keyword%' or customer.shipment_value like '%$keyword%' or customer.bill_of_ladding_no like '%$keyword%' or customer.shipping_company like '%$keyword%' or customer.clearing_agent like '%$keyword%' or customer.allocation like '%$keyword%' or customer.rotation_no like '%$keyword%' or customer.entry_no like '%$keyword%' or customer.status like '%$keyword%' or customer.company_id like '%$keyword%' or customer.shipment_value_quantity like '%$keyword%' )");
				}
				
			}
			
			
		
			
			$data['title'] = 'Customers';
			$data['data'] = $query->result();
			$this->load->view('customer/header/header',$data);
			$this->load->view('customer/content/customers', $data);
			$this->load->view('customer/footer/footer');
		}
		else if($btn_search=="Spool")
		{
			echo "spool";
			
		}
		
		if($date_option == "due_date")
		{
			
			
		}
		
	}
	
}//end class
	ob_clean();
?>
