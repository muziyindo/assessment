<style>

			body{
				
				background: url(https://cdn.eadms.com/eadmsimages/signinpage/backgrounds/eadms-login-6.jpg) no-repeat center center;
			}
			.btn-custom{
				border-radius:0 !important;
				background:#1A237E !important; /*rgb(0, 78, 140)*/ 
				width:150px;
				
				box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
				transition-duration: .2s;
				transition-timing-function: cubic-bezier(.4,0,.2,1);
				transition-property: max-height,box-shadow;
				border: 0;
				
			}
			
			.btn-custom2{
				border-radius:0 !important;
				width:150px;
				
				box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);
    transition-duration: .2s;
    transition-timing-function: cubic-bezier(.4,0,.2,1);
    transition-property: max-height,box-shadow;
    border: 0;
				
			}
			
			
			.info-box{
				
				margin-left:auto; 
				margin-right:auto; 
				margin-top:50px;
				font-size:14px;
				color:#333;
				width:60%;
				background:#fff;
				opacity:0.8;
				border-radius:0;
				padding:10px;
			}
			.info-box-body{
				padding:5px;
				text-align:justify;
				/*border:1px solid #ddd; */
				line-height:2.0;
				
			}
			.info-box-header{
				text-align:center;
				color:#000;
			}
			#psyco-notice{
				display:none;
			}
			h3{
				font-weight:bold;
			}

</style>

<div class="container">


	<div class="panel panel-default info-box" id="general-notice">
		<div class="panel-heading info-box-header"></div>
		<div class="panel-body info-box-body">
		<p><!--This assessment test comprises of two parts. First part is a Psychometric test made up of 20 multiple choice questions, while the second part is an intelligent quotient test which is also made up of 20 multiple choice questions. You have 20 minutes to complete each test. Ensure you have stable internet connection and take the test in an environment where you will not be disturbed.--> 
		This assessment test comprises 20 Intelligent quotient related questions. You have 20 minutes to complete the test. Ensure you have stable internet connection and take the test in an environment where you will not be disturbed. </p></div>
		<div class="panel-footer">
			<center><a href="<?php echo site_url(); ?>/site/logout" class="btn btn-warning btn-custom2 ">Logout</a>
			<button type="button" class="btn btn-primary btn-custom" id="btn-general-notice">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button></center>
		</div>
	</div>
	
	<div class="panel panel-default info-box" id="psyco-notice">
		<div class="panel-heading info-box-header"><h3>IQ Test</h3></div>
		<div class="panel-heading info-box-header"><span>20 Questions | 20 Minutes</span></div>
		<div class="panel-body info-box-body">
		<br>
		<p>All questions are multiple choice and there is only one correct answer. Try to take the test in an environment where you will not be disturbed.</p></div>
		<div class="panel-footer">
			<center><button type="button" class="btn btn-warning btn-custom2 " id="btn-back"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button>
			<a role="button" class="btn btn-primary btn-custom" href="<?php echo site_url('app/iq'); ?>">Start Test <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
		
		</div>
	</div>

</div>


<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"> </script>
<script>
		
$(function() {
	 
	
    $("#btn-general-notice").on("click",function(){
		
		$("#general-notice").css("display","none");
		$("#psyco-notice").css("display","block");
	});
	
	$("#btn-back").on("click",function(){
		
		$("#psyco-notice").css("display","none");
		$("#general-notice").css("display","block");
		
	});
	
});

</script>