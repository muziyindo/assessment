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
		<p>Thank you for taking the assessment test. Your score is <b><?php echo $tot_score ?></b> If you are qualified, our Human Resource department will reach out to you </p></div>
		<div class="panel-footer">
			<center><a href="<?php echo site_url(); ?>/site/logout" class="btn btn-warning btn-custom2 ">Logout</a>
			</center>
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