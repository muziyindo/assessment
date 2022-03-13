<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?php echo $title ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?php echo base_url('assets/') ?>favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('assets/') ?>css/theme-default.css"/>
        <?php if($title == "New Customer"){ ?>
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url('assets/') ?>css/select2.min.css"/>
        <?php } ?>
        <!-- EOF CSS INCLUDE -->    

        <!--custom css-->
       <style>
            .x-navigation.x-navigation-horizontal {
                background: #EBF2F8; /*Top horizontal bar*/
				border-bottom: 1px #8cbae8 solid;
            }
            .x-navigation, .profile, .mCustomScrollBox{
               background: url(<?php echo base_url() ?>assets/img/bg_top_out.png);
			   background-repeat:no-repeat;
            }

			/*Side Nav background color */
			.x-navigation, .mCustomScrollBox{
                background: #fff;
				border-right: 1px #8cbae8 solid;
            }
			
			
            .x-navigation .xn-search input
            {
                background: #fff;
                border-radius: 0;
                border-color:#ddd;
                /*border:none;*/
            }
            .breadcrumb {
                background: background: url(<?php echo base_url() ?>assets/img/bg_top_out.png);
                
            }
            .breadcrumb li a{
                color:#333;
            }
            .breadcrumb li:last-child{
                color:#333;
            }
			/*Active Menu option in side NAV*/
             .x-navigation li.active > a{
                background: #EBF2F8;
				border:0;
				color:#333;
            }
			/*Other menu options not active*/
			.x-navigation li > a
			{
				color:#333;
				    border-bottom: none;
			}
			.x-navigation li > a .fa, .x-navigation li > a .glyphicon
			{
				color:#333;
			}
            .form-control{
                background: url(<?php echo base_url() ?>assets/img/form_field_bg.gif) repeat-x scroll 50% 0 #fff !important;
				border-color: #999 #C3C3C3 #DDD !important;
				border-style: solid !important;
				border-width: 1px !important;
				border-radius:0;
				height:29px;
				color:#000;
            }
            .x-navigation.x-navigation-horizontal .xn-icon-button > a .fa, .x-navigation.x-navigation-horizontal .xn-icon-button > a .glyphicon{
                color:#333;
            }
            .x-navigation > li.xn-logo > a:first-child{
               /*border-top:2px solid #575757;*/
            }
            .dropdown.active.open > a:hover{
                border-top: 2px solid !important;
            }
			.x-navigation > li.xn-logo > a:first-child {
				background-color: #f1f1f1;
			}
			.nav-tabs, .nav-tabs.nav-justified{
				
			}
			/*tabs background color*/
			.nav-tabs > li > a{
				background: url(<?php echo base_url() ?>assets/img/bg_tabs_shade_bl.gif);
				color:#fff !important;
			}
			/*Active Tabs text color*/
			.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus, .nav-tabs > .dropdown.active.open > a:hover
			{
				color:#333 !important;
			}
			/*Profile Title Text*/
			.profile .profile-data .profile-data-name{
				color:#333 !important;
			}
			.profile .profile-data .profile-data-title{
				color:#333 !important;
			}
			
			/*Glyphicon beside profile pic*/
			.profile .profile-controls a .fa, .profile .profile-controls a .glyphicon{
				color:#333;
			}
			
			.row [class^='col-xs-'], .row [class^='col-sm-'], .row [class^='col-md-'], .row [class^='col-lg-']{
				color:#333;
				font-weight:normal;
				font-size:10px;
			}
			
			/* Panel on customers page*/
			.panel-default .panel-heading, .panel-primary .panel-heading, .panel-success .panel-heading, .panel-info .panel-heading, .panel-warning .panel-heading, .panel-danger .panel-heading{
				background-color:#fff;
				box-shadow:none !important;
			}
        </style>                                
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo" style="background:none !important">
                        <a href="<?php echo site_url('customer/dashboard') ?>">NETCOM</a>
                        <a href="<?php echo base_url('assets/') ?>#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="<?php echo base_url('assets/') ?>#" class="profile-mini">
                            <img src="<?php echo base_url('assets/') ?>assets/images/users/user.png" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="<?php echo base_url().$this->session->userdata('profile_image') ?>" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name" style="color:#8cbae8 !important"><?php echo ucwords($this->session->userdata('name')); ?></div>
                                <div class="profile-data-title"><?php echo ucwords($this->session->userdata('designation')); ?> / <?php echo ucwords($this->session->userdata('dept')); ?></div>
                            </div>
                            <div class="profile-controls">
                                <a href="#" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="#" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="<?php echo site_url('customer') ?>"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>      

					<li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">Applicant</span></a>
                        <ul>
                            <li><a href="<?php echo site_url('admin/add') ?>"><span class="fa fa-plus"></span> Assessment Scores</a></li>
                            <li><a href="<?php echo base_url('assets/') ?>pages-profile.html"><span class="fa fa-eye"></span> Registered Applicants</a></li>               
                        </ul>
                    </li>
					
					<li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">ELearning</span></a>
                        <ul>
                            <li><a href="<?php echo site_url('admin/add') ?>"><span class="fa fa-plus"></span> Courses</a></li>
                            <li><a href="<?php echo base_url('assets/') ?>pages-profile.html"><span class="fa fa-eye"></span> Applied Courses</a></li>               
                        </ul>
                    </li>
                    
					<li class="xn-openable">
                        <a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Customer</span></a>
                        <ul>                            
                            <li class="xn-openable">
                                <a href="#">New</a>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('employee/add') ?>">Import</a>
                                    </li>
									<li>
                                        <a href="#">Export</a>
                                    </li>
                                </ul>
                            </li>  

							<li class="xn-openable">
                                <a href="#">View</a>
                                <ul>
                                    <li>
                                        <a href="<?php echo site_url('employee/customers') ?>">Import</a>
                                    </li>
									<li>
                                        <a href="#">Export</a>
                                    </li>
                                </ul>
                            </li>  
                        </ul>
                    </li>
					
					
					
					
					
					
					
					
					
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-user"></span> <span class="xn-text">User</span></a>
                        <ul>
                            <li><a href="<?php echo site_url('admin/add') ?>"><span class="fa fa-plus"></span> New</a></li>
                            <li><a href="<?php echo base_url('assets/') ?>pages-profile.html"><span class="fa fa-eye"></span> View</a></li>               
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-wrench"></span> <span class="xn-text">Profile</span></a>
                        <ul>
                            <li><a href="<?php echo site_url('user/userProfile') ?>"><span class="fa fa-eye"></span> View</a></li>
                            <li><a href="#"><span class="fa fa-lock"></span> Change Password</a></li>                
                        </ul>
                    </li>
                    
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->


            <!-- PAGE CONTENT -->
            <div class="page-content" style="background: #fff">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>                        
                    </li> 
                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       