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
                                                
                                                                     

                                                <!-- START JQUERY VALIDATION PLUGIN -->
                                                        <div class="block">                            
															
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
                                                                <label class="col-md-3 control-label">Change Profile Image:</label>
                                                                <div class="col-md-9">
                                                                    <input type="file" name="doc_" accept="image/*" />
                                                                    <span class="help-block"></span>
                                                                </div>
                                                            </div>
                                                            

															                                                                        
															<input type="submit" class="btn btn-primary pull-right" id="btn_customer" value="Save"> </input>
                                    
                                                                                                                     
                                                    </div>                           
                                                
												
                                            
                                             
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
				
				
				
				
				
				
				
				
				
				
				