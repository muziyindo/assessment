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
                                                                <label class="col-md-1 control-label">Name:</label>
                                                                <label class="col-md-2 control-label"><?php echo $data['fullname'] ;  ?></label>
                                                            </div>
															<div class="form-group">
																<label class="col-md-1 control-label">Email:</label>
                                                                <label class="col-md-2 control-label">
																<?php 
																if(empty($data['email'])){ 
																 echo "Not Available"; } else{ echo $data['email'] ; } 
																
																?></label>
															</div>
                                                            <div class="form-group">
                                                                <label class="col-md-1 control-label">Department:</label>
                                                                <label class="col-md-2 control-label"><?php echo $data['dept'] ;  ?></label>
                                                            </div>                    
                                                            <div class="form-group">
																<label class="col-md-1 control-label">Designation:</label>
                                                                <label class="col-md-2 control-label"><?php echo $data['designation'] ;  ?></label>
															</div>
															<div class="form-group">
																<label class="col-md-1 control-label">Role:</label>
                                                                <label class="col-md-2 control-label"><?php echo $data['role'] ;  ?></label>
															</div>
                                                            
                                                            
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label" style="text-align:left">Change Profile Image:</label>
                                                                <div class="col-md-2">
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
                url: "<?php echo site_url(); ?>/user/changeProfileImage",
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                type: "POST",
                success: function(response) {
					if(response.trim()==("You must upload a file").trim() || response.trim()==("File is too large, max size is 10MB").trim())
                    {
                         $('#loader_doc').css("display","none");
						$('#doc_error').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#doc_error').hide();
                        },20000);
						
                     } 
                    else
                    {
						
                        $('#loader_doc').css("display","none");
						$('.profile-image').html(response);
						 alert("User successfully profiled"); 
						 
						 
                    } 
					
                    
                }
            });  
			
			
        }); 
		
		
	});

</script>
				
				
				
				
				
				
				
				
				
				
				