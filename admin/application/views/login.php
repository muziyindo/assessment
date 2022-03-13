<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('assets/') ?>css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->      
		
		<style>
		.login-container{
			background:#f1f1f1 !important;	
			color:#333;
		}
		.login-body{
			background:#fff !important;	
			color:#333 !important;
		}
		.login-container .login-box .login-body .form-control {
			
			background: #f1f1f1;
			color: #333;	
		}
		.login-container .login-box .login-body .login-title {
			color: #333;
			font-size: 19px;
			font-weight: 300;
			margin-bottom: 20px;
		}
		.login-container .login-box .login-body .btn-link {
			color: #333;
		}
		.login-container .login-box .login-footer {
			color: #333;
		}
		.login-container .login-box .login-footer a {
			color: #333;
		}
		

		</style>
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Welcome</strong>, Please login</div>
					<div><p id="login-error" style="color:red"></p></div>
                    <form class="form-horizontal" id="form-login" role="form">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Username" name="username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control" placeholder="Password" name="password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-info btn-block" id="btn-login">Log In</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2019 Filebase
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
		
		<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/jquery/jquery.min.js"></script>
		
		<script>
	
		$(function() {
			
			$("#btn-login").on("click",function(e){
			e.preventDefault();
			//$('#loader_customer').show();
             $.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/authenticate/authenticate',
                data: $('#form-login').serialize(),
                success: function(response)
                {
                    if(response.trim()==1)
                    {
						//alert("success");
                        //$('#loader_customer').hide();
						window.location.href="<?php echo site_url('Applicant'); ?>";
                    }
                    else
                    {
                        //$('#loader_customer').hide();
                        $('#login-error').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#login-error').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function 
	});
			
			
		});
		
		</script>
        
    </body>
</html>






