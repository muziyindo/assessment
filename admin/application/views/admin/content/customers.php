<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">DataTable Export</h3>
									<div class="pull-right">
                                        <button class="btn btn-default toggle" data-toggle="exportTable" style="margin-left:5px"><i class="fa fa-bars"></i> Advanced search</button>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                                        <ul class="dropdown-menu">
                                            
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'csv',escape:'false'});"><img src='<?php echo base_url("assets/") ?>img/icons/csv.png' width="24"/> CSV</a></li>
                                            <!--<li><a href="#" onClick ="$('#customers2').tableExport({type:'txt',escape:'false'});"><img src='<?php echo base_url("assets/") ?>img/icons/txt.png' width="24"/> TXT</a></li>-->
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='<?php echo base_url("assets/") ?>img/icons/xls.png' width="24"/> XLS</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'doc',escape:'false'});"><img src='<?php echo base_url("assets/") ?>img/icons/word.png' width="24"/> Word</a></li>
                                            <!--<li><a href="#" onClick ="$('#customers2').tableExport({type:'powerpoint',escape:'false'});"><img src='<?php echo base_url("assets/") ?>img/icons/ppt.png' width="24"/> PowerPoint</a></li>-->
                                            <li class="divider"></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'png',escape:'false'});"><img src='<?php echo base_url("assets/") ?>img/icons/png.png' width="24"/> PNG</a></li>
                                            <li><a href="#" onClick ="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='<?php echo base_url("assets/") ?>img/icons/pdf.png' width="24"/> PDF</a></li>
                                        </ul>
                                    </div>                                    
                                </div>
								
								<div class="panel-body" id="exportTable" style="display: none; background:#EBF2F8; ">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>Due Date</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>ETD (Estimated Time of Delivery)</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>ETA (Estimated Time of Arrival)</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>Date of Duty Paid</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
										
                                    </div>     
									<br>
									<div class="row">
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>Date Cleared</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>Custom Examination Date</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>Shipping Company Charges Applied Date:</h6>
											    <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp; <input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>Custom Release Date</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                    </div>                               
`									<br>
									<div class="row">
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>Shipping Company Release Date</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>TDO Issuance Date</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>Shipping Charges Paid Date</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <h6>Empty Container Return Date</h6>
											   <input type="radio" name="date_option" value="yes">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="start date">  <input type="text" placeholder="end date">
                                            </div>
                                        </div>
                                    </div>    
									<br>
									<div class="row">
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                               <!--<h6>Shipping Company Release Date</h6>-->
											   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="Enter search keyword">  <input type="submit" value="Search">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="list-group border-bottom">
                                              <!-- <h6>TDO Issuance Date</h6>-->
											   
                                            </div>
                                        </div>
                                        
                                    </div>   

                                </div>
								
                                <div class="panel-body">
									<div class="horizontal" style="width: 100%; height: 700px; overflow: auto;">
                                    <table id="customers2" class="table table-striped table-hover datatable" style="border:0">
                                        <thead>
                                            <tr class="info">
                                                <th>S/N</th>
                                                <th>File No</th>
												<th>Status</th>
                                                <th>Company</th>
                                                <th>Supplier</th>
                                                <th>PFI No</th>
                                                <th>Bank</th>
												
												<th>Quantity</th>
                                                <th>Item</th>
                                                <th>Amount</th>
                                                <th>Form 'M' No</th>
                                                <th>Due Date</th>
												
												<th>LC/DA Bill No</th>
                                                <th>Vessel Name(discharge)</th>
                                                <th>Vessel Name(Origin)</th>
                                                <th>ETA</th>
                                                <th>ETD</th>
											
												<th>Shipment Value</th>
												<th>Shipment Value/Qty</th>
                                                <th>Shipping Company</th>
                                                <th>Bill of Ladding</th>
                                                <th>Custom Examination Date</th>
                                                <th>Shipping Company Charges Applied Date</th>
												
												<th>Custom Release Date</th>
                                                <th>Shipping Company Release Date</th>
                                                <th>TDO Issuance Date</th>
                                                <th>Shipping Charges Paid Date</th>
                                                <th>Empty Container Return Date</th>
                                                <th>Date Container Card Received</th>
												
												
                                                <th>Clearing Agent</th>
                                                <th>Terminal Charges Applied Date</th>
                                                <th>Rotation No</th>
												
												
                                                
												
												<th>Custom Booking Date</th>
                                                <th>Date Cleared</th>
                                                <th>Allocation</th>
                                                <th>Date of ECD Received:</th>
                                                <th>Date of Duty Paid</th>
												<th>Date ECD / Final Invoice Submitted</th>
												<th></th>
												
												
												
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php $i = 1 ; ?>
											<?php foreach($data as $value ){
												
											?>
                                            <tr>
                                                <td><?php echo $i ; ?></td>
                                                <td><?php echo $value->file_no ; ?></td>
												<td>
												<?php $status = $value->status ; 
													if($status=="closed"){ ?>
													<span class="fa fa-check label label-success"> <?php echo $value->status ; ?></span>
												<?php } else { ?>
													<span class="fa fa-exclamation-circle label label-info"> <?php echo $value->status ; ?>..</span>
												<?php } ?>
												</td>
                                                <td><?php echo $value->company ; ?></td>
                                                <td><?php echo $value->supplier ; ?></td>
                                                <td><?php echo $value->pfi_no ; ?></td>
                                                <td><?php echo $value->bank ; ?></td>
												
												<td><?php echo $value->quantity ; ?></td>
                                                <td><?php echo $value->item ; ?></td>
                                                <td><?php echo $value->currency." ".$value->amount ; ?></td>
                                                <td><?php echo $value->form_m_number ; ?></td>
                                                <td><?php echo $value->due_date ; ?></td>
												
												<td><?php echo $value->bill_no ; ?></td>
                                                <td><?php echo $value->vessel_name_origin ; ?></td>
                                                <td><?php echo $value->vessel_name_discharge ; ?></td>
                                                <td><?php echo $value->eta ; ?></td>
                                                <td><?php echo $value->etd ; ?></td>
												
												<td><?php echo $value->shipment_value ; ?></td>
                                                <td><?php echo $value->shipment_value_quantity ; ?></td>
                                                <td><?php echo $value->shipping_company ; ?></td>
                                                <td><?php echo $value->bill_of_ladding_no ; ?></td>
                                                <td><?php echo $value->cus_exa_date ; ?></td>
												<td><?php echo $value->ship_com_charge_app_date ; ?></td>
												
												<td><?php echo $value->cus_rel_date ; ?></td>
                                                <td><?php echo $value->ship_com_rel_date ; ?></td>
                                                <td><?php echo $value->tdo_issuance_date ; ?></td>
                                                <td><?php echo $value->ship_charge_paid_date ; ?></td>
                                                <td><?php echo $value->emp_cont_ret_date ; ?></td>
												<td><?php echo $value->date_cont_card_rec ; ?></td>
												
												<td><?php echo $value->clearing_agent ; ?></td>
                                                <td><?php echo $value->term_charges_app_date ; ?></td>
                                                <td><?php echo $value->rotation_no ; ?></td>
												
												
                                                <td><?php echo $value->cust_book_date ; ?></td>
                                                <td><?php echo $value->date_cleared ; ?></td>
												<td><?php echo $value->allocation ; ?></td>
												
												<td><?php echo $value->date_ecd_received ; ?></td>
                                                <td><?php echo $value->date_of_duty_paid ; ?></td>
												<td><?php echo $value->date_ecd_invoice_subm ; ?></td>
												<td> <a class="btn btn-default btn-rounded" href="<?php echo site_url('Customer/edit/'.encrypt_url($value->cus_id)); ?>" >View</a></td>
                                            </tr>
											
											<?php $i++; } ?>
                                            
                                        </tbody>
                                    </table>   
									</div><!--end horizontal scroll-->
                                    
                                </div>
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                            
                           
                        </div>
                    </div>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->