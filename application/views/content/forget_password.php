
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title><?php echo $title ?></title>
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
		<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
		<style>
			body {
				color: #000;
				overflow-x: hidden;
				height: 100%;
				background-color: #fff; /*#B0BEC5;*/
				background-repeat: no-repeat
				font-family: 'Merriweather Sans', sans-serif !important;
				/*background: url(https://cdn.eadms.com/eadmsimages/signinpage/backgrounds/eadms-login-6.jpg) no-repeat center center;*/
				font-size:13px !important;
			}
			
			
			
			.card0 {
				/*box-shadow: 0px 4px 8px 0px #757575;*/
				border-radius: 0px
				
			}
			
			.card2 {
				margin: 0px 40px
			}
			
			.logo {
				width: 180px;
				height: 49px;
				margin-top: 20px;
				margin-left: 35px
			}
			
			.image {
				width: 400px;
				height: 224px
			}
			
			.border-line {
				border-right: 1px solid #EEEEEE
			}
			
			.facebook {
				background-color: #3b5998;
				color: #fff;
				font-size: 18px;
				padding-top: 5px;
				border-radius: 50%;
				width: 35px;
				height: 35px;
				cursor: pointer
			}
			
			.twitter {
				background-color: #1DA1F2;
				color: #fff;
				font-size: 18px;
				padding-top: 5px;
				border-radius: 50%;
				width: 35px;
				height: 35px;
				cursor: pointer
			}
			
			.linkedin {
				background-color: #2867B2;
				color: #fff;
				font-size: 18px;
				padding-top: 5px;
				border-radius: 50%;
				width: 35px;
				height: 35px;
				cursor: pointer
			}
			
			.line {
				height: 1px;
				width: 45%;
				background-color: #E0E0E0;
				margin-top: 10px
			}
			
			.or {
				width: 10%;
				font-weight: bold
			}
			
			.text-sm {
				font-size: 14px !important;
			}
			
			::placeholder {
				color: #BDBDBD;
				opacity: 1;
				font-weight: 300
			}
			
			:-ms-input-placeholder {
				color: #BDBDBD;
				font-weight: 300
			}
			
			::-ms-input-placeholder {
				color: #BDBDBD;
				font-weight: 300
			}
			
			input,
			textarea {
				padding: 10px 12px 10px 12px;
				border: 1px solid lightgrey;
				border-radius: 2px;
				margin-bottom: 5px;
				margin-top: 2px;
				width: 100%;
				box-sizing: border-box;
				color: #2C3E50;
				font-size: 14px;
				letter-spacing: 1px
				
				border: 1px solid #C7C7C7;
				box-shadow: inset 0 3px 6px 0 rgba(0,0,0,0.10);
				height: 28px;
			}
			
			input:focus,
			textarea:focus {
				-moz-box-shadow: none !important;
				-webkit-box-shadow: none !important;
				box-shadow: none !important;
				border: 1px solid #304FFE;
				outline-width: 0
			}
			
			button:focus {
				-moz-box-shadow: none !important;
				-webkit-box-shadow: none !important;
				box-shadow: none !important;
				outline-width: 0
			}
			
			a {
				/*color: inherit;*/
				cursor: pointer
				color:blue !important;
			}
			
			.btn-blue {
				background: #1A237E;
				width: 150px;
				color: #fff;
				border-radius: 0;
				
				box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
				transition-duration: .2s;
				transition-timing-function: cubic-bezier(.4,0,.2,1);
				transition-property: max-height,box-shadow;
				border: 0;
			}
			
			.btn-blue:hover {
				/*background-color: #000;*/
				cursor: pointer;
				color:#fff;
			}
			
			.bg-blue {
				color: #fff;
				background-color: #1A237E;
			}
			
			label{
				width:100%; /*Mueez added this*/
			}
			.text-muted{
				color:#333 !important;
				font-family: 'Merriweather Sans', sans-serif !important;
				
				font-size:13px;
			}
			
			/* Sticky footer styles
			-------------------------------------------------- */
			html {
			position: relative;
			min-height: 100%;
			}
			body {
			margin-bottom: 60px; /* Margin bottom by footer height */
			}
			.footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 60px; /* Set the fixed height of the footer here */
			line-height: 60px; /* Vertically center the text there */
			background-color: #f5f5f5;
			
			
			}
			
			@media screen and (max-width: 991px) {
				.logo {
					margin-left: 0px
				}
			
				.image {
					width: 300px;
					height: 220px
				}
			
				.border-line {
					border-right: none
				}
			
				.card2 {
					border-top: 1px solid #EEEEEE !important;
					margin: 0px 15px
				}
			}
		</style>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
        <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
        <script type='text/javascript'></script>
    </head>
    <body oncontextmenu='return false' class='snippet-body'>
	<div class="container-fluid" style="margin-top:0"><img src="<?php echo base_url(); ?>assets/images/logo.png" class="logo"  ></div>
		<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto" style="opacity:0.8 !important; width:80%; ">
			<div class="card card0 border-0">
				<div class="row d-flex">
					<div class="col-lg-6">
						<div class="card1 pb-5">
							<!--<div class="row"> <img src="<?php echo base_url(); ?>assets/images/logo.png" class="logo"  > </div>-->
							
							<div class="row px-3 justify-content-center mt-4 mb-5 border-line"> 
								<img src="<?php echo base_url(); ?>assets/images/stud2.jpg" class="image" style="margin-bottom:10px !important"> 
								
								<h4 style="color:#1A237E">APPLICANT ASSESSMENT PORTAL</h4>
								<p>The applicant assessment is the second phase of the job application process. Create an account and <a href="<?php echo site_url('site/index'); ?>" style="color:blue">sign in to take the test.</a></p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<form action="<?php echo site_url('site/forgetPasswordI'); ?>" method="post">
						
						<div class="card2 card border-0 px-4 py-5">
							<?php 
								if(validation_errors()) 
									echo '<div style="color:red">'.validation_errors().'</div>';
							?>
									
							<?php
								$message=$this->session->flashdata('message');
								if($message=="invalid_password")
								{
							?>
							<div class="alert alert-block alert-warning">
								<button data-dismiss="alert" class="close close-sm" type="button">
									
								</button>
								Incorrect Login details - password
							</div>
							<?php
								}
							?>
						
							<?php
								$message=$this->session->flashdata('message');
								if($message=="invalid_user")
								{
								?>
									<div class="alert alert-block alert-warning">
										<button data-dismiss="alert" class="close close-sm" type="button">
											
										</button>
										The email address you entered is invalid
									</div>
								<?php
								}
							?>
							<div class="row mb-4 px-3">
								
								<div class="col-xs-12 col-md-12 col-xl-12" style="padding-left:0">
									<h3>Forgot your Password ?</h3>
									<p>Don't have an account ? <a href="<?php echo site_url('site/register'); ?>" style="color:blue"><i class="fa fa-user" aria-hidden="true"></i> Sign up</p></a>
								</div>
								
							</div>
							<div class="row px-3 mb-4">
								
							</div>
							<div class="row px-3"> <label class="mb-1">
									<h6 class="mb-0 text-sm">Enter your email address</h6>
								</label> <input class="mb-4" autocomplete="off" type="email" name="email" placeholder="Enter a valid email address" > </div>
							
							
							<div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Submit</button> </div>
							
						</div>
						</form>
					</div>
				</div>
				<!--<div class="bg-blue py-4">
					<div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
						<div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
					</div>
				</div>-->
			</div>
		</div>
		
		
		<footer class="footer" style="background:#1A237E /*rgb(0, 78, 140);*/">
      <div class="container">
        <center><span class="text-muted" style="color:#fff !important;">© 2018 Netcom Africa Limited. All rights reserved. | Terms & Conditions</span></center>
      </div>
    </footer>
    </body>
</html>
