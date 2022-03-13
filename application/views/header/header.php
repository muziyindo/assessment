<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title><?php echo $title ; ?></title>
		
        <!--<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>-->
		
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel='stylesheet' type='text/css' />
		
		<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
		
		<style>
			#topmost-div{
				background: #1A237E; /*rgb(0, 78, 140)*/ ;
				height:20px;
				color:#fff;
			}
			body{
				font-family: 'Merriweather Sans', sans-serif !important;
				background:#fff;
				font-size:13px !important;
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
			
			
		
			
			
			
		
		</style>
	</head>
    <body>
	
	<div class="container-fluid" id="topmost-div">
		<div class="container">
			<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-4">
				<i class="fa fa-phone" aria-hidden="true"></i> +234.1.271.8888  &nbsp; &nbsp; <i class="fa fa-envelope" aria-hidden="true"></i> support@netcomafrica.com
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4"></div>
			<div class="col-xs-12 col-sm-6 col-md-4" style="text-align:right">Hi <i class="fa fa-user" aria-hidden="true"></i> <?php echo $this->session->userdata('name'); ?> , <a href="<?php echo site_url(); ?>/site/logout" style="color:#fff"><i>Logout</i></a></div>
			</div>
		</div>
		
	
	
	</div>
	<div class="container-fluid" style="background:#fff; "><!--opacity:0.9; height:50px; box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);-->
		<div class="container-fluid" >
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<img src="<?php echo base_url(); ?>assets/images/logo.png" width="150" height="40"></img>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4"></div>
				<div class="col-xs-12 col-sm-6 col-md-4" style="text-align:right !important; padding-top:10px">
					<?php if($title=="Psychometric"){ ?>
						<h6 align="right">Test ends in <span id="time">20:00</span> minutes!</h6>
					<?php } ?>
					
				</div>
			</div>
		</div>
	</div>