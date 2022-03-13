<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
					
                    <div class="row">
                        <div class="col-md-12">
                            
								<div class="panel-body">
													<h4>Profile a new user</h4> 
													<p>All fields with asterik (*) are </p>
													
													<p>
														<div id="doc_error" style="color:red; font-weight:bold; text-align:center"><?php echo validation_errors();?></div>
													</p>
								</div> 
                                                            
                                <div class="panel panel-default">   
								
                                    
                                        <div class="panel-body">
                                            
                                            <!--start row-->
											<form class="form-horizontal" role="form" id="form_user" enctype="multipart/form-data" accept-charset="utf-8">
                                            <div class="row">
												<div style="position:absolute; top:61%; left:47%; font-weight:bold; font-size:17px; 	display:none" id="loader_doc">
													<img src="<?php echo base_url()."assets/img/page-loader.gif" ?>" class="img-responsive" style="width:150px; ">
													PLEASE WAIT .....
												</div>
                                                
		
												<div class="col-md-6"> 
													<!-- START VALIDATIONENGINE PLUGIN -->
													<div class="block">          

															<div class="form-group">
                                                                <label class="col-md-3 control-label">Name:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="fullname" />
                                                                    <span class="help-block" >Required *</span>
                                                                </div>
                                                            </div>						
															
															<div class="form-group">
																<label class="col-md-3 control-label">Email:</label>
																<div class="col-md-9">
																	<input type="email" class="form-control" name="email" />
																	<span class="help-block" ></span>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label">Designation:</label>
																<div class="col-md-9">
																	<select class="form-control" name="designation">
																		<option value="">-Select-</option>
																		<option value="Staff">Staff</option>
																		<option value="Cashier">Cashier</option>
																		<option value="Manager">Manager</option>
																		<option value="Accountant">Accountant</option>
																	</select>
																	<span class="help-block" >Required *</span>
																</div>
															</div>    

															<div class="form-group">
																<label class="col-md-3 control-label">Department:</label>
																<div class="col-md-9">
																	<select class="form-control" name="dept">
																		<option value="">-Select-</option>
																		<option value="Import">Import</option>
																		<option value="Export">Export</option>
																		<option value="Account">Account</option>
																		<option value="Account">Clearing</option>
																	</select>
																	<span class="help-block" >Required *</span>
																</div>
															</div>
															<div class="form-group">
																<label class="col-md-3 control-label">Role:</label>
																<div class="col-md-9">
																	<select class="form-control" name="role">
																		<option value="">-Select-</option>
																		<option value="User">User</option>
																		<option value="Admin">Admin</option>
																		<option value="SAdmin">SAdmin</option>
																	</select>
																	<span class="help-block" >Required *</span>
																</div>
															</div>  
															
															                                                                     
													</div>                                               
													<!-- END VALIDATIONENGINE PLUGIN -->
												</div>


                                                 <div class="col-md-6">                        

                                                <!-- START JQUERY VALIDATION PLUGIN -->
                                                        <div class="block">                            
															<div class="form-group">
																<label class="col-md-3 control-label">Username:</label>
																<div class="col-md-9">
																	<input type="text" class="form-control" name="uname" />
																	<span class="help-block" >Required *</span>
																</div>
															</div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Password:</label>
                                                                <div class="col-md-9">
                                                                    <input type="password" class="form-control" name="password1" />
                                                                    <span class="help-block" >Required *, atleast 6 characters</span>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Confirm Password:</label>
                                                                <div class="col-md-9">
                                                                    <input type="password" class="form-control" id="password" name="password2" />
                                                                    <span class="help-block" >Required *</span>
                                                                </div>
                                                            </div>                    
                                                            <div class="form-group">
																<label class="col-md-3 control-label">Status:</label>
																<div class="col-md-9">
																	<select class="form-control" name="status">
																		<option value="">-Select-</option>
																		<option value="1">Active</option>
																		<option value="0">Inactive</option>
																	</select>
																	<span class="help-block" >Required *</span>
																</div>
															</div>                            
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label class="col-md-3 control-label">Profile Image:</label>
                                                                <div class="col-md-9">
                                                                    <input type="file" name="doc_" accept="image/*" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            

															                                                                        
															<input type="submit" class="btn btn-primary pull-right" id="btn_customer" value="Save"> </input>
                                    
                                                                                                                     
                                                    </div>                           
                                                </div>
												
                                            </div>
                                            <!--end row-->  
											</form>

                                    </div><!--end first panel body-->


                                    
                                    
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
		
	$('#form_user').submit(function(e) {
		e.preventDefault();
		 $('#loader_doc').css("display","block");
		
            var data = new FormData(this); // <-- 'this' is your form element
            $.ajax({
                url: "<?php echo site_url(); ?>/admin/insertUser",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                success: function(response) {
                    if(response.trim()>0)
                    {
                         $('#loader_doc').css("display","none");
						 alert("User successfully profiled");
						
                     } 
                    else
                    {
						
                         $('#loader_doc').css("display","none");
						$('#doc_error').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#doc_error').hide();
                        },20000);
                         
                    } 
                }
            });  
			
			
        }); 
		
		
	});

</script>
				
				
				
				
				
				
				
				
				
				
				