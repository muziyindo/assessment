<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
					
                    <div class="row">
                        <div class="col-md-12">
                            
                            
                                                            
                                <div class="panel panel-default tabs">                            
                                    <ul id="mytabs" class="nav nav-tabs" role="tablist">
                                        <li id="tabfirst" class="active"><a href="#tab-first" id="tabfirst_" role="tab" data-toggle="tab">Customer Data</a></li>
                                        <li id="tabsec"><a href="#tab-second" role="tab" id="tabsec_" data-toggle="tab">Actions Taken</a></li>
                                        <li id="tabthird"><a href="#tab-third" role="tab" id="tabthird_" data-toggle="tab">Documents</a></li>
                                    </ul>
                                    
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab-first">
                                            
                                            <!--start row-->
											<form class="form-horizontal" role="form" id="form_customer">
                                            <div class="row">
												<div style="position:absolute; top:61%; left:47%; font-weight:bold; font-size:17px; 	display:none" id="loader_customer">
													<img src="<?php echo base_url()."assets/img/page-loader.gif" ?>" class="img-responsive" style="width:150px; ">
													PLEASE WAIT .....
												</div>
                                                <div class="panel-body">
													<h4>Register new customer</h4> 
													<p>All fields with asterik (*) are </p>
													
													<p>
														<div id="customer_error" style="color:red; font-weight:bold; text-align:center"><?php echo validation_errors();?></div>
													</p>
												</div> 
		
												<div class="col-md-6"> 
													<!-- START VALIDATIONENGINE PLUGIN -->
													<div class="block">          

															<div class="form-group">
                                                                <label class="col-md-3 control-label">File No:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="file_no" value="<?php echo $cus_data['file_no'] ?>" />
                                                                    <span class="help-block" >Required *</span>
                                                                </div>
                                                            </div>	
															<div class="form-group">
                                                                <label class="col-md-3 control-label">Customer ID:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="company_id" value="<?php echo $cus_data['company_id'] ?>" />
                                                                    <span class="help-block" ></span>
                                                                </div>
                                                            </div>															
															<div class="form-group">
																<label class="col-md-3 control-label">Supplier:</label>
																<div class="col-md-9">
																	<input type="text" class="form-control" name="supplier" value="<?php echo $cus_data['supplier'] ?>" />
																	<span class="help-block" >Required *</span>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label">Bank:</label>
																<div class="col-md-9">
																	<select class="form-control" name="bank" value="<?php echo $cus_data['bank'] ?>" id="bank">
																		<option value="">-Select bank-</option>
																		<option value="Guaranty Trust Bank (GTB)">Guaranty Trust Bank (GTB)</option>
																		<option value="First Bank">First Bank</option>
																		<option value="Skye Bank">Skye Bank</option>
																		<option value="Diamond Bank">Diamond Bank</option>
																		<option value="Fidelity">Fidelity</option>
																		<option value="Access Bank">Access Bank</option>
																		<option value="Zenith Bank">Zenith Bank</option>
																		<option value="Wema Bank">Wema Bank</option>
																		<option value="Union Bank">Union Bank</option>
																		<option value="Heritage Bank">Heritage Bank</option>
																		<option value="Fidelity">Fidelity</option>
																		<option value="Fcmb">Fcmb</option>
																		<option value="Eco bank">Eco bank</option>
																		<option value="Stanbic Ibtc">Stanbic Ibtc</option>
																		<option value="Unity bank">Unity bank</option>
																		<option value="UBA">UBA united bank of africa</option>
																		<option value="Keystone Bank">Keystone Bank</option>
																	
																	</select>
																	<span class="help-block" >Required *</span>
																</div>
															</div>                    
															<div class="form-group">
																<label class="col-md-3 control-label">Item:</label>
																<div class="col-md-9">
																	<input type="text" class="form-control" name="item" value="<?php echo $cus_data['item'] ?>" />
																	<span class="help-block" >Required *</span>
																</div>
															</div>                            
															<div class="form-group">
																<label class="col-md-3 control-label">Form 'M'Number:</label>
																<div class="col-md-9    ">
																	<input type="text" class="form-control" name="form_m_number" value="<?php echo $cus_data['form_m_number'] ?>" />
																	<span class="help-block" >Required *</span>
																</div>                        
															</div>
															
															<div class="form-group">
																<label class="col-md-3 control-label">LC/DA Bill No:</label>
																<div class="col-md-9">
																	<input type="text" class="form-control" name="bill_no" value="<?php echo $cus_data['bill_no'] ?>" />
																	<span class="help-block"></span>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label">Vessel Name from port of origin:</label>
																<div class="col-md-9">
																	<input type="text" class="form-control" name="vessel_name_origin" value="<?php echo $cus_data['vessel_name_origin'] ?>" />
																	<span class="help-block">, Port of Loading</span>
																</div>
															</div>             
															<div class="form-group">
																<label class="col-md-3 control-label">ETD:</label>
																<div class="col-md-9">
																	<input type="text" class="form-control datepicker" name="etd" value="<?php echo $cus_data['etd'] ?>" />
																	<span class="help-block">, Estimated Time of Departure</span>
																</div>
															</div> 
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Shipment Value:</label>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control" name="shipment_value" value="<?php echo $cus_data['shipment_value'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
																
																<label class="col-md-3 control-label">Currency:</label>
                                                                <div class="col-md-2    ">
                                                                    <select type="text" class="form-control" name="currency_ship_value" />
																		<option value="">-select-</option>
																		<option value="USD" <?php if($cus_data['currency_ship_value']=="USD") echo "selected"; ?> >&#36; (USD)</option>
																		<option value="GBP" <?php if($cus_data['currency_ship_value']=="GBP") echo "selected"; ?>>&#163; (GBP)</option>
																		<option value="EUR" <?php if($cus_data['currency_ship_value']=="EUR") echo "selected"; ?>>&#128; (EUR)</option>
																		<option value="NGN" <?php if($cus_data['currency_ship_value']=="NGN") echo "selected"; ?>>&#8358; (NGN)</option>
																		
																		
																	</select>
                                                                    <span class="help-block" >Required *</span>
                                                                </div>  
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Bill of lading No:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="bill_of_ladding_no" value="<?php echo $cus_data['bill_of_ladding_no'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>   

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Shipping Company Charges Applied Date:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="ship_com_charge_app_date" value="<?php echo $cus_data['ship_com_charge_app_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Shipping Company Release Date :</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="ship_com_rel_date" value="<?php echo $cus_data['ship_com_rel_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>   
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Shipping Charges Paid Date:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="ship_charge_paid_date" value="<?php echo $cus_data['ship_charge_paid_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>   
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Delivery Order Date:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="del_order_date" value="<?php echo $cus_data['del_order_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>  
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Terminal Charges Applied Date:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="term_charges_app_date" value="<?php echo $cus_data['term_charges_app_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>  
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Custom Booking Date:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="cust_book_date" value="<?php echo $cus_data['cust_book_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>  

                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Allocation:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="allocation" value="<?php echo $cus_data['allocation'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>     
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Entry No:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="entry_no" value="<?php echo $cus_data['entry_no'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>        
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Date of Duty Paid:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="date_of_duty_paid" value="<?php echo $cus_data['date_of_duty_paid'] ?>"/>
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>  
                                                                            
															                                                         
													</div>                                               
													<!-- END VALIDATIONENGINE PLUGIN -->
												</div>


                                                 <div class="col-md-6">                        

                                                <!-- START JQUERY VALIDATION PLUGIN -->
                                                        <div class="block">    
															<div class="form-group">
                                                                <label class="col-md-3 control-label">Customer Type:</label>
                                                                <div class="col-md-9">
                                                                    <select class="form-control" name="customer_type">
																		<option value="">-select-</option>
																		<option value="New" <?php if($cus_data['customer_type']=="New"){ echo "selected" ; }  ?>>New</option>
																		<option value="Returning" <?php if($cus_data['customer_type']=="Returning"){ echo "selected" ; }  ?>>Returning</option>
																	</select>
                                                                    <span class="help-block" >Required *</span>
                                                                </div>
                                                            </div>
															<div class="form-group">
                                                                <label class="col-md-3 control-label">Status:</label>
                                                                <div class="col-md-9">
                                                                    <select class="form-control" name="status">
																		<option value="">-select-</option>
																		<option value="open" <?php if($cus_data['status']=="open"){ echo "selected" ; }  ?> >open</option>
																		<option value="closed" <?php if($cus_data['status']=="closed"){ echo "selected" ; }  ?>>closed</option>
																	</select>
                                                                    <span class="help-block" >Required *</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Company:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="company" value="<?php echo $cus_data['company'] ?>" />
                                                                    <span class="help-block" >Required *</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">PFI No:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" id="password" name="pfi_no" value="<?php echo $cus_data['pfi_no'] ?>" />
                                                                    <span class="help-block" >Required *</span>
                                                                </div>
                                                            </div>                    
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Quantity:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="quantity" value="<?php echo $cus_data['quantity'] ?>" />
                                                                    <span class="help-block">Required *</span>
                                                                </div>
                                                            </div>                            
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Amount:</label>
                                                                <div class="col-md-4    ">
                                                                    <input type="number" class="form-control" name="amount" value="<?php echo $cus_data['amount'] ?>" />
                                                                    <span class="help-block" >Required *</span>
                                                                </div>    

																<label class="col-md-3 control-label">Currency:</label>
                                                                <div class="col-md-2    ">
                                                                    <select type="text" class="form-control" name="currency" />
																		<option value="">-select-</option>
																		<option value="USD" <?php if($cus_data['currency']=="USD") echo "selected"; ?> >&#36; (USD)</option>
																		<option value="GBP" <?php if($cus_data['currency']=="GBP") echo "selected"; ?>>&#163; (GBP)</option>
																		<option value="EUR" <?php if($cus_data['currency']=="EUR") echo "selected"; ?>>&#128; (EUR)</option>
																		<option value="NGN" <?php if($cus_data['currency']=="NGN") echo "selected"; ?>>&#8358; (NGN)</option>
																		
																		
																	</select>
                                                                    <span class="help-block" >Required *</span>
                                                                </div>  
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Due Date:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="due_date" value="<?php echo $cus_data['due_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Vessel Name for port of discharge:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="vessel_name_discharge" value="<?php echo $cus_data['vessel_name_discharge'] ?>" />
                                                                    <span class="help-block">Port of Discharge</span>
                                                                </div>
                                                            </div>             
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">ETA:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="eta" value="<?php echo $cus_data['eta'] ?>" />
                                                                    <span class="help-block">, Estimated Time of Arrival</span>
                                                                </div>
                                                            </div> 
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Quantity:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="shipment_value_quantity" value="<?php echo $cus_data['shipment_value_quantity'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Shipping Company:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="shipping_company" value="<?php echo $cus_data['shipping_company'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>    
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Custom Examination Date:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="cus_exa_date" value="<?php echo $cus_data['cus_exa_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Custom Release Date:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="cus_rel_date" value="<?php echo $cus_data['cus_rel_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">TDO Issuance Date:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="tdo_issuance_date" value="<?php echo $cus_data['tdo_issuance_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Empty Container Return Date:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="emp_cont_ret_date" value="<?php echo $cus_data['emp_cont_ret_date'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Date Container Card Received:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="date_cont_card_rec" value="<?php echo $cus_data['date_cont_card_rec'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Clearing Agent:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="clearing_agent" value="<?php echo $cus_data['clearing_agent'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>     
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Rotation No:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="rotation_no" value="<?php echo $cus_data['rotation_no'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>        
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Date Cleared:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="date_cleared" value="<?php echo $cus_data['date_cleared'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>  
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Date of ECD Received:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="date_ecd_received" value="<?php echo $cus_data['date_ecd_received'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>   
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Date ECD / Final Invoice Submitted:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control datepicker" name="date_ecd_invoice_subm" value="<?php echo $cus_data['date_ecd_invoice_subm'] ?>" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>  

															<input type="hidden" id="insertId1" name="insertId1" value="<?php echo $cus_data['cus_id'] ?>" ></input>                                                                        
															<button type="button" class="btn btn-primary pull-right" id="btn_customer">Save Changes <span class="fa fa-save"></span></button>
                                    
                                                                                                                     
                                                    </div>                           
                                                </div>
												
                                            </div>
                                            <!--end row-->  
											</form>

                                    </div><!--end first tab-->


                                    <div class="tab-pane" id="tab-second">
                                            
                                            <!--start row-->
                                            <div class="row">
												<div style="position:absolute; top:61%; left:47%; font-weight:bold; font-size:17px; 	display:none" id="loader_actions">
													<img src="<?php echo base_url()."assets/img/page-loader.gif" ?>" class="img-responsive" style="width:150px; ">
													PLEASE WAIT .....
												</div>
												<form class="form-horizontal" role="form" id="form_actions" method="post">
                                                <div class="panel-body">
                                                    <h4>Completed Processes</h4> 
                                                    <p>Flag Accomplished process</p>
													
													<p>
														<div id="actions_error" style="color:red; font-weight:bold; text-align:center"><?php echo validation_errors();?></div>
													</p>
													
                                                </div> 

                                                <div class="col-md-6"> 
                                                    <!-- START VALIDATIONENGINE PLUGIN -->
                                                    <div class="block">                            
                                                                                    
                                                            <div class="form-group">
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="mar_ins_paid" value="yes" <?php if($cus_data['mar_ins_paid']=="yes"){ echo "checked" ; }  ?> /> Marine Insurance Paid</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="mar_ins_paid_date" value="<?php echo $cus_data['mar_ins_paid_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                               
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" value="yes" name="orig_bl_rec" <?php if($cus_data['orig_bl_rec']=="yes"){ echo "checked" ; }  ?> /> Original B/L Received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="orig_bl_rec_date" value="<?php echo $cus_data['orig_bl_rec_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="naf_receipt_rec" value="yes" <?php if($cus_data['naf_receipt_rec']=="yes"){ echo "checked" ; }  ?> /> Nafdac Receipt received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" style="border:0" name="naf_receipt_rec_date" value="<?php echo $cus_data['naf_receipt_rec_date'] ?>" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="copy_docs_rec" value="yes" <?php if($cus_data['copy_docs_rec']=="yes"){ echo "checked" ; }  ?> /> Copy Docs Received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="copy_docs_rec_date" value="<?php echo $cus_data['copy_docs_rec_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="paar_rec" value="yes" <?php if($cus_data['paar_rec']=="yes"){ echo "checked" ; }  ?> /> PAAR Received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="paar_rec_date" value="<?php echo $cus_data['paar_rec_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                               
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="escort_letter" value="yes" <?php if($cus_data['escort_letter']=="yes"){ echo "checked" ; }  ?> /> Escort/PCA Letter</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="escort_letter_date" value="<?php echo $cus_data['escort_letter_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="copy_health_doc_rec" value="yes" <?php if($cus_data['copy_health_doc_rec']=="yes"){ echo "checked" ; }  ?> /> Copy Health Docs Received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="copy_health_doc_rec_date" value="<?php echo $cus_data['copy_health_doc_rec_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="fish_lic_rec" value="yes" <?php if($cus_data['fish_lic_rec']=="yes"){ echo "checked" ; }  ?> /> Fishing License Received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="fish_lic_rec_date" value="<?php echo $cus_data['fish_lic_rec_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" value="yes" class="icheckbox" name="tdo_rec" <?php if($cus_data['tdo_rec']=="yes"){ echo "checked" ; }  ?> /> TDO Received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="tdo_rec_date" value="<?php echo $cus_data['tdo_rec_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="soncap_rec" value="yes" <?php if($cus_data['soncap_rec']=="yes"){ echo "checked" ; }  ?> /> SONCAP Received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="soncap_rec_date" value="<?php echo $cus_data['soncap_rec_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>
															
															<button type="button" class="btn btn-primary pull-right" id="btn_actions">Save Changes <span class="fa fa-save"></span></button>
												
															
															<input type="hidden" id="insertId2" name="insertId2" value="<?php echo $cus_data['cus_id'] ?>"></input>
                                                                                                                     
                                                    </div>                                               
                                                    <!-- END VALIDATIONENGINE PLUGIN -->
                                                </div>


                                                 <div class="col-md-6">                        

                                                <!-- START JQUERY VALIDATION PLUGIN -->
                                                        <div class="block">                            
                                                                                    
                                                            
                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="docs_sent_nav" value="yes" <?php if($cus_data['docs_sent_nav']=="yes"){ echo "checked" ; }  ?> /> DOCS Sent for Navision</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="docs_sent_nav_date" value="<?php echo $cus_data['docs_sent_nav_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>   

                                                            <div class="form-group">
                                                               
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="cont_card_rec" value="yes" <?php if($cus_data['cont_card_rec']=="yes"){ echo "checked" ; }  ?> /> Container Card Received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="cont_card_rec_date" value="<?php echo $cus_data['cont_card_rec_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>     

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="fum_cert_rec" value="yes" <?php if($cus_data['fum_cert_rec']=="yes"){ echo "checked" ; }  ?> /> Fumigation Certificate Received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="fum_cert_rec_date" value="<?php echo $cus_data['fum_cert_rec_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>        

                                                            <div class="form-group">
                                                                
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="docs_sent_agent" value="yes" <?php if($cus_data['docs_sent_agent']=="yes"){ echo "checked" ; }  ?> /> DOCs sent to Clearing Agent</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="docs_sent_agent_date" value="<?php echo $cus_data['docs_sent_agent_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                               
                                                                <div class="col-md-5">
                                                                    <label class="check"><input type="checkbox" class="icheckbox" name="ref_rec" value="yes" <?php if($cus_data['ref_rec']=="yes"){ echo "checked" ; }  ?> /> Refund Received</label>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input type="text" class="form-control datepicker" placeholder="Date recieved" name="ref_rec_date" value="<?php echo $cus_data['ref_rec_date'] ?>" style="border:0" />
                                                                </div>
                                                            </div>                                                          
                                                    </div>

                                                </div>
												
												</form>
                                            </div>
                                            <!--end row-->
                                    </div>        

                                    <div class="tab-pane" id="tab-third">
										<form class="form-horizontal" role="form" id="form_doc" method="post" enctype="multipart/form-data" accept-charset="utf-8">
										
										<div style="position:absolute; top:31%; left:47%; font-weight:bold; font-size:17px; 	display:none" id="loader_doc">
													<img src="<?php echo base_url()."assets/img/page-loader.gif" ?>" class="img-responsive" style="width:150px; ">
													PLEASE WAIT .....
										</div>
										
                                        <div class="panel-body">
                                                    <h4></h4> 
                                                    <p>Upload all related documents to this customer</p>
													
													<p>
														<div id="doc_error" style="color:red; font-weight:bold; text-align:center"></div>
													</p>
                                        </div> 

                                            <div class="form-group">                                        
                                                <label class="col-md-3 col-xs-12 control-label">Document type</label>
                                                <div class="col-md-9 col-xs-12">
                                                    <select class="doc_type form-control" id="doc_name" name="doc_name" style="width:65% !important">
                                                        <option value="">--Select--</option>
                                                        <option value="Form M">Form M</option>
                                                        <option value="PFI">PFI</option>
                                                        <option value="Marine Insurance">Marine Insurance</option> 
                                                        <option value="Suncap Certificate">Suncap Certificate</option>
                                                        <option value="Nafdac Import Permit">Nafdac Import Permit</option>
                                                        <option value="Bill of Lading">Bill of Lading</option>  
                                                        <option value="Commercial Invoice">Commercial Invoice</option>
                                                        <option value="Packing List">Packing List</option>
                                                        <option value="CCVO_Form_C16">CCVO_Form_C16</option>     
                                                        <option value="Manufacturer Certificate of production">Manufacturer Certificate of production</option>
                                                        <option value="Custom Assessment Notice">Custom Assessment Notice</option>
                                                        <option value="Custom Duty Receipt">Custom Duty Receipt</option>
                                                        <option value="Shipping Changes">Shipping Changes</option>
                                                        <option value="Terminal Changes">Terminal Changes</option>
                                                        <option value="Transport Changes">Transport Changes</option>  
                                                        <option value="Goods Exit Note">Goods Exit Note</option>
                                                        <option value="Custom Inspection Act">Custom Inspection Act</option>
                                                        <option value="EIR_TDO_Terminal Delivery Order">EIR_TDO_Terminal Delivery Order</option>
                                                        <option value="INTA Card">INTA Card</option>
                                                        <option value="PAAR">PAAR</option>
                                                        <option value="Clearing Estimate">Clearing Estimate</option> 
                                                        <option value="Health Documents">Health Documents</option>
                                                        <option value="Radiation Certificate">Radiation Certificate</option>
                                                        <option value="Certificate of Analysis">Certificate of Analysis</option>
                                                        <option value="Manufacture and Free Sale certificate">Manufacture and Free Sale certificate</option>
                                                        <option value="Origin Certificate">Origin Certificate</option>
                                                        <option value="Radio Active Certificate">Radio Active Certificate</option> 

                                                    </select>
                                                </div>                                            
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label">Select File</label>
                                                <div class="col-md-6 col-xs-12">                                                                              <input type="hidden" id="insertId3" name="insertId3" value="<?php echo $cus_data['cus_id'] ?>"></input>                            
                                                    <input type="file" name="doc_" class="form-control_"/>
                                                </div>
                                            </div>
											
											<div class="form-group">
                                                <label class="col-md-3 col-xs-12 control-label"></label>
                                                <div class="col-md-6 col-xs-12">                                                                              <input type="submit" class="btn btn-warning" id="btn_upload" value="Upload"> </input>
                                                </div>
                                            </div>
											<div class="panel panel-default" style="border:0; box-shadow:none;">
												<div class="panel-body" id="doc_data">
													<table class="table table-striped">
														<tr>
															<th>S/N</th>
															<th>Document Name</th>
															<th>File Name</th>
															<th>Delete</th>
															<th>Download</th>
														</tr>
														<?php $i = 1 ; ?>
														<?php foreach($doc_data_ as $value){  ?>
														<tr>
															<td><?php  echo $i ; ?></td>
															<td><?php echo $value->doc_name ; ?></td>
															<td><?php echo $value->path ; ?></td>
															
															
															<td><a href="#" id="aaa<?php echo $value->id ?>"><span  class="fa fa-trash-o"></span></a></td>
															<td><a href="<?php echo site_url('Customer/download_documents/'.encrypt_url($value->id));  ?>"><span class="fa fa-download"></span></a></td>
														</tr>
														<?php $i++; } ?>
													</table>
														
												</div>
										   </div>
											<a href="<?php echo site_url('Customer/customers') ?>" class="btn btn-primary pull-right">Finish </a>
											
											
                                           </form>
										   
										   
                                    </div>

                                </div>


                                    <!--<div class="panel-footer">                                                                        
                                        <button class="btn btn-primary pull-right">Save Changes <span class="fa fa-floppy-o fa-right"></span></button>
                                    </div>-->
                                </div>                                
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->        

				
				
<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/jquery/jquery.min.js"></script>
				
				
<script>
	
	$(function() {
		
		$('#bank option[value="<?php echo $cus_data['bank'] ?>"]').attr("selected", "selected");
		
		/* //disable inactive tabs
		$("#tabsec").addClass("disabled"); //second tab
		$("#tabsec_").attr("data-toggle", "tab_"); //second tab
		$("#tabthird").addClass("disabled"); //third tab
		$("#tabthird_").attr("data-toggle", "tab_"); //third tab */
		
		$("#btn_customer").on("click",function(){
			//e.preventDefault();
			$('#loader_customer').show();
            $.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/customer/updateCustomer',
                data: $('#form_customer').serialize(),
                success: function(response)
                {
                    if(response.trim()>0)
                    {
                        $('#loader_customer').hide();
						alert("Changes successfully updated");
						
						//toggle to second tab
						//$('#mytabs a[href="#tab-second"]').tab('show');
						
						//disable inactive tabs
						/* $("#tabfirst").addClass("disabled"); //first tab
						$("#tabfirst_").attr("data-toggle", "tab_"); //first tab */
						
						//pass return id value to textbox in tab 2
						//$('#insertId2').val(response.trim()); 
						
                    }
                    else
                    {
                        $('#loader_customer').hide();
                        $('#customer_error').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#customer_error').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn_actions").on("click",function(){
			//e.preventDefault();
			$('#loader_actions').show();
            $.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/customer/updateActionsTaken',
                data: $('#form_actions').serialize(),
                success: function(response)
                {
                    if(response.trim()>0)
                    {
						
                        $('#loader_actions').hide();
						alert("Changes successfully updated");
						 
						
						//toggle to third tab
						//$('#mytabs a[href="#tab-third"]').tab('show');
						
						//disable inactive tabs
						/* $("#tabsec").addClass("disabled"); //second tab
						$("#tabsec_").attr("data-toggle", "tab_"); //second tab */
						
						//pass return id value to textbox in tab 3
						//$('#insertId3').val(response.trim()); 
						
                    }
                    else
                    {
						//alert("error");
                         $('#loader_actions').hide();
                        $('#actions_error').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#actions_error').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	
	
	$('#form_doc').submit(function(e) {
		e.preventDefault();
		 $('#loader_doc').css("display","block");
		
            var data = new FormData(this); // <-- 'this' is your form element
            $.ajax({
                url: "<?php echo site_url(); ?>/customer/insertDocuments",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                success: function(response) {
                    if(response.trim()==("Document Name is required").trim() || response.trim()==("You must upload atleast one document").trim() || response.trim()==("File is too large max size is 70MB").trim())
                    {
                         $('#loader_doc').css("display","none");
						$('#doc_error').html(response);
						setTimeout(function(){
                           $('#doc_error').hide();
                        },20000);
						
                     } 
                    else
                    {
						
                         $('#loader_doc').css("display","none");
						$('#doc_data').html(response);
						alert("Document Uploaded Successfully");
						$('#form_doc')[0].reset();
						$("#doc_name").prop("selectedIndex", 0);
						//$('#doc_error').show().html(response);
                         
                    } 
                }
            }); 
        }); 
		
		
		<?php foreach($doc_data_ as $value){  ?>
		
			$("#aaa<?php echo $value->id ?>").on("click",function(){
				
				$.post( "<?php echo site_url(); ?>/customer/removeDocument/<?php echo encrypt_url($value->id) ?>", function( data ) {
					$('#doc_data').html(data);
					alert("Document successfully deleted");
				});
				
			});
			
		<?php } ?>
		
	});

</script>
				
				
				
				
				
				
				
				
				
				
				