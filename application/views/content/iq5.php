<style>

	body{
				
		background: url(https://cdn.eadms.com/eadmsimages/signinpage/backgrounds/eadms-login-6_.jpg) no-repeat center center;
	}
	.wiz-header
	{
		width:5%;
		height:33px;
		color:#333;
		float:left;
		font-size:13px;
		text-align:center;
		padding:8px;
		font-weight:bold;
		
	}
	
	#pcont{
		
		padding-top:10px;
		padding-bottom:10px;
		margin-bottom:10px;
		
	}
	
	#cover{
		background:red;
		width:100%;
		height:40px;
		padding:5px;
	}
	.panel-heading{
		font-size:15px;
		color:#333 !important;
		font-weight:bold;
		
	}
	.panel-body{
		
		font-size:13px !important;
		/*font-weight:bold;*/
	}
	h3{
		color:#333;
	}
	
	#cont-1, #cont-2, #cont-3, #cont-4, #cont-5, #cont-6, #cont-7, #cont-8, #cont-9, #cont-10, #cont-11, #cont-12, #cont-13, #cont-14, #cont-15, #cont-16, #cont-17, #cont-18, #cont-19, #cont-20{
		background:#fff;
		/*opacity:0.8;*/
		padding:20px;
		border:2px solid #ddd;
		border-radius:10px;
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

</style>

<div class="container" id="pcont" style="background:; border-radius:50px;">
	
		<div class="wiz-header" style="border-bottom:2px solid #1A237E; color:#2a5290" id="wiz-q1"> 1 </div><div class="wiz-header" id="wiz-q2"> 2 </div><div class="wiz-header" id="wiz-q3"> 3 </div><div class="wiz-header" id="wiz-q4"> 4 </div><div class="wiz-header" id="wiz-q5"> 5 </div>
		<div class="wiz-header" id="wiz-q6"> 6 </div><div class="wiz-header" id="wiz-q7"> 7 </div><div class="wiz-header" id="wiz-q8"> 8 </div><div class="wiz-header" id="wiz-q9"> 9 </div><div class="wiz-header" id="wiz-q10"> 10 </div>
		<div class="wiz-header" id="wiz-q11"> 11 </div><div class="wiz-header" id="wiz-q12"> 12 </div><div class="wiz-header" id="wiz-q13"> 13 </div><div class="wiz-header" id="wiz-q14"> 14 </div><div class="wiz-header" id="wiz-q15"> 15 </div>
		<div class="wiz-header" id="wiz-q16"> 16 </div><div class="wiz-header" id="wiz-q17"> 17 </div><div class="wiz-header" id="wiz-q18"> 18 </div><div class="wiz-header" id="wiz-q19"> 19 </div><div class="wiz-header" id="wiz-q20"> 20 </div>
		<br style="clear:left">
</div>
<div class="container"><div id="error_" style="color:red; font-weight:bold"><?php echo validation_errors();?></div></div>

<div class="container" id="cont-1" >
		<form role="form" id="form-1" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 1</h3>
						<p>87 kg of potatoes are distributed in two boxes. One box weighs 11 kg less than the other one. How many kilograms of potatoes does the lighter box contain?</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/three/q1.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-4" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q1" value="0" > A 47</label></div>
							<div class="radio"><label><input type="radio" name="q1" value="5" > B 38</label></div>
							<div class="radio"><label><input type="radio" name="q1" value="0" > C 11</label></div>
							<div class="radio"><label><input type="radio" name="q1" value="0" > D 76</label></div>
							<div class="radio"><label><input type="radio" name="q1" value="0" > E 58</label></div>
							
					</div>
					<input type="hidden" id="insertId1" name="insertId1" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-primary btn-custom" id="btn-q1">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-1" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->

<div class="container" id="cont-2" style="display:none">
		<form role="form" id="form-2" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 2</h3>
						<p>A pot and a lid costs N120, Pot cost N100 more than the lid. How much does the lid cost?</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/three/q2.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-4" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q2" value="0" > A N60</label></div>
							<div class="radio"><label><input type="radio" name="q2" value="0" > B N20</label></div>
							<div class="radio"><label><input type="radio" name="q2" value="0" > C N110</label></div>
							<div class="radio"><label><input type="radio" name="q2" value="5" > D N10 </label></div>
							<div class="radio"><label><input type="radio" name="q2" value="0" > E N100</label></div>
							
					</div>
					<input type="hidden" id="insertId2" name="insertId2" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q2-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q2">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-2" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->

<div class="container" id="cont-3" style="display:none">
		<form role="form" id="form-3" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 3</h3>
						<p>When a father had 31 year, his son had 8. Now father is two times older than his son. How old is the son now?</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/three/q3.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-4" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q3" value="0" > A 26</label></div>
							<div class="radio"><label><input type="radio" name="q3" value="0" > B 24</label></div>
							<div class="radio"><label><input type="radio" name="q3" value="0" > C 16</label></div>
							<div class="radio"><label><input type="radio" name="q3" value="5" > D 23</label></div>
							<div class="radio"><label><input type="radio" name="q3" value="0" > E 39</label></div>
							
					</div>
					<input type="hidden" id="insertId3" name="insertId3" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q3-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q3">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-3" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->

<div class="container" id="cont-4" style="display:none">
		<form role="form" id="form-4" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 4</h3>
						<p>Which number should come next? 64, 16, 4, 1, 1/4 ?</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/three/q4.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-4" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q4" value="5" > A 1/16</label></div>
							<div class="radio"><label><input type="radio" name="q4" value="0" > B 1/12</label></div>
							<div class="radio"><label><input type="radio" name="q4" value="0" > C 1/8</label></div>
							<div class="radio"><label><input type="radio" name="q4" value="0" > D 1/2 </label></div>
							<div class="radio"><label><input type="radio" name="q4" value="0" > E 1/4</label></div>
							
					</div>
					<input type="hidden" id="insertId4" name="insertId4" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q4-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q4">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-4" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->

<div class="container" id="cont-5" style="display:none">
		<form role="form" id="form-5" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 5</h3>
						<p>Ten people can paint 60 houses in 120 days, so five people can paint 30 houses in: </p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/three/q5.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-6" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q5" value="0" > A 15 </label></div>
							<div class="radio"><label><input type="radio" name="q5" value="0" > B 30</label></div>
							<div class="radio"><label><input type="radio" name="q5" value="5" > C 60.</label></div>
							<div class="radio"><label><input type="radio" name="q5" value="0" > D 90 </label></div>
							<div class="radio"><label><input type="radio" name="q5" value="0" > E 10 </label></div>
							
					</div>
					<input type="hidden" id="insertId5" name="insertId5" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q5-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q5">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-5" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->

<div class="container" id="cont-6" style="display:none">
		<form role="form" id="form-6" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 6</h3>
						<p>Two girls caught 25 frogs. Lisa caught four times as many as Jen did. How many frogs did Jen catch?</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q6.jpg" width="500" height="217"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-4" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q6" value="0" > A 4 </label></div>
							<div class="radio"><label><input type="radio" name="q6" value="5" > B 5</label></div>
							<div class="radio"><label><input type="radio" name="q6" value="0" > C 8</label></div>
							<div class="radio"><label><input type="radio" name="q6" value="0" > D 10 </label></div>
							<div class="radio"><label><input type="radio" name="q6" value="0" > E 12</label></div>
					</div>
					<input type="hidden" id="insertId6" name="insertId6" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q6-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q6">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-6" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->

<div class="container" id="cont-7" style="display:none">
		<form role="form" id="form-7" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 7</h3>
						<p>The sum of all numbers from 1 to 11 is </p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q7.jpg" width="402" height="172"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-6" >
					<div class="panel-body" style="font-weight:bold_; font-size:15px !important;">
							<div class="radio"><label><input type="radio" name="q7" value="0" >	A Odd</label></div>
							<div class="radio"><label><input type="radio" name="q7" value="5" >	B Even</label></div>
							<div class="radio"><label><input type="radio" name="q7" value="0" >	C Prime Number</label></div>
							<div class="radio"><label><input type="radio" name="q7" value="0" >	D Negative  </label></div>
							<div class="radio"><label><input type="radio" name="q7" value="0" >	E 111</label></div>
							
					</div>
					<input type="hidden" id="insertId7" name="insertId7" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q7-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q7">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-7" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->

<div class="container" id="cont-8" style="display:none">
		<form role="form" id="form-8" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 8</h3>
						<p>Which number should come in the series: 1, 3, 6, 10, 15, ?</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q8.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="panel-body" style="font-weight:bold_; font-size:15px !important;">
							<div class="radio"><label><input type="radio" name="q8" value="0" > A 17</label></div>
							<div class="radio"><label><input type="radio" name="q8" value="0" > B 18</label></div>
							<div class="radio"><label><input type="radio" name="q8" value="0" > C 20</label></div>
							<div class="radio"><label><input type="radio" name="q8" value="5" > D 21</label></div>
							<div class="radio"><label><input type="radio" name="q8" value="0" > E 22</label></div>
							
					</div>
					<input type="hidden" id="insertId8" name="insertId8" value=""></input>
				</div>
				<div class="col-xs-12 col-sm-2 col-md-2" >
					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q8-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q8">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-8" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->

<div class="container" id="cont-9" style="display:none">
		<form role="form" id="form-9" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 9</h3>
						<p>Select the best description/application for the word: <b>Tangible</b>

						</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q9.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="panel-body" style="font-weight:bold_; font-size:15px !important;">
							<div class="radio"><label><input type="radio" name="q9" value="5" > A Something which can be touched</label></div>
							<div class="radio"><label><input type="radio" name="q9" value="0" > B Something imaginary</label></div>
							<div class="radio"><label><input type="radio" name="q9" value="0" > C Something which is capable of being seen</label></div>
							<div class="radio"><label><input type="radio" name="q9" value="0" > D  Something unreal</label></div>
							<div class="radio"><label><input type="radio" name="q9" value="0" > E Something which is possible</label></div>
							
					</div>
					<input type="hidden" id="insertId9" name="insertId9" value=""></input>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4" >
					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q9-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q9">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-9" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->



<div class="container" id="cont-10" style="display:none">
		<form role="form" id="form-10" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 10</h3>
						<p>Select the sentence with the INCORRECT word usage of <b>“assure/ensure/insure”:</b></p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q10.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-6" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q10" value="0" > A Assure me that you locked my car.</label></div>
							<div class="radio"><label><input type="radio" name="q10" value="0" > B I assure you I took every precaution.</label></div>
							<div class="radio"><label><input type="radio" name="q10" value="0" > C Ensure you have answered all of the questions.</label></div>
							<div class="radio"><label><input type="radio" name="q10" value="5" > D I ensure you I took every precaution.</label></div>
							<div class="radio"><label><input type="radio" name="q10" value="0" > E Please insure me that you won’t break that glass.</label></div>
							
					</div>
					<input type="hidden" id="insertId10" name="insertId10" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q10-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q10">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-10" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->


<div class="container" id="cont-11" style="display:none">
		<form role="form" id="form-11" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 11</h3>
						<p>Select the sentence with the correct punctuation</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q11.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="panel-body" style="font-weight:bold_; font-size:15px !important;">
							<div class="radio"><label><input type="radio" name="q11" value="0" > A – Both brother-in-laws trucks need repair.</label></div>
							<div class="radio"><label><input type="radio" name="q11" value="5" > B – Both brothers-in-law’s trucks need repair.</label></div>
							<div class="radio"><label><input type="radio" name="q11" value="0" > C – Both brother-in-law’s trucks need repair.</label></div>
							<div class="radio"><label><input type="radio" name="q11" value="0" > D – Both brother’s in-laws trucks need repair.</label></div>
							<div class="radio"><label><input type="radio" name="q11" value="0" > E – All of the above are correct.</label></div>
							
					</div>
					<input type="hidden" id="insertId11" name="insertId11" value=""></input>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4" >
					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q11-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q11">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-11" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->


<div class="container" id="cont-12" style="display:none">
		<form role="form" id="form-12" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 12</h3>
						<p>Choose the phrase which best completes the conditional statement. I would get a new job</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q12.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-6">
					<!--<img src="<?php echo base_url(); ?>assets/images/psychometric/one/q12.jpg" width="400" height="297"></img>-->
					<div class="panel-body" style="font-weight:bold_; font-size:15px !important;">
							<div class="radio"><label><input type="radio" name="q12" value="0" > A if I was you.</label></div>
							<div class="radio"><label><input type="radio" name="q12" value="0" > B if I am you.</label></div>
							<div class="radio"><label><input type="radio" name="q12" value="5" > C  if I were you.</label></div>
							<div class="radio"><label><input type="radio" name="q12" value="0" > D if you were I.</label></div>
							<div class="radio"><label><input type="radio" name="q12" value="0" > E None of the above.</label></div>
							
					</div>
					<input type="hidden" id="insertId12" name="insertId12" value=""></input>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4" >
					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q12-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q12">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-12" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->



<div class="container" id="cont-13" style="display:none">
		<form role="form" id="form-13" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 13</h3>
						<p>Which of the following is correct?</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-8">
					<!--<img src="<?php echo base_url(); ?>assets/images/psychometric/one/q13.jpg" width="400" height="297"></img>-->
					<div class="panel-body" style="font-weight:bold_; font-size:15px !important;">
							<div class="radio"><label><input type="radio" name="q13" value="0" > A  You're CV is very good</label></div>
							<div class="radio"><label><input type="radio" name="q13" value="0" > B  Your'e CV is very good</label></div>
							<div class="radio"><label><input type="radio" name="q13" value="5" > C   Your CV is very good. </label></div>
							<div class="radio"><label><input type="radio" name="q13" value="0" > D    You’re CV are very good </label></div>
							<div class="radio"><label><input type="radio" name="q13" value="0" > E    None of the above</label></div>
							
					</div>
					<input type="hidden" id="insertId13" name="insertId13" value=""></input>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4" >
					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q13-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q13">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-13" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->
<br>
						<span style="font-weight:bold; color:gray">

<div class="container" id="cont-14" style="display:none">
		<form role="form" id="form-14" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 14</h3>
						<p> I think San Francisco is ___ exciting ___ New York.</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q14.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-4">
					<!--<img src="<?php echo base_url(); ?>assets/images/psychometric/one/q14.jpg" width="400" height="297"></img>-->
					<div class="panel-body" style="font-weight:bold_; font-size:15px !important;">
							<div class="radio"><label><input type="radio" name="q14" value="5" > A as … as </label></div>
							<div class="radio"><label><input type="radio" name="q14" value="0" > B so … than</label></div>
							<div class="radio"><label><input type="radio" name="q14" value="0" > C as … than   </label></div>
							<div class="radio"><label><input type="radio" name="q14" value="0" > D so … as</label></div>
							<div class="radio"><label><input type="radio" name="q14" value="0" > E as … more than</label></div>
							
					</div>
					<input type="hidden" id="insertId14" name="insertId14" value=""></input>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4" >
					
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q14-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q14">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-14" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->


<div class="container" id="cont-15" style="display:none">
		<form role="form" id="form-15" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 15</h3>
						<p>If Toyin ________ that he was coming, she would have prepared the guest room. </p>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-8" >
					<div class="panel-body" style="font-weight:bold_; font-size:15px !important;">
							<div class="radio"><label><input type="radio" name="q15" value="0" > A  knew</label></div>
							<div class="radio"><label><input type="radio" name="q15" value="0" > B  has known</label></div>
							<div class="radio"><label><input type="radio" name="q15" value="5" > C  had known</label></div>
							<div class="radio"><label><input type="radio" name="q15" value="0" > D  knows</label></div>
							<div class="radio"><label><input type="radio" name="q15" value="0" > E – Known</label></div>
							
					</div>
					<input type="hidden" id="insertId15" name="insertId15" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q15-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q15">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-15" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->


<div class="container" id="cont-16" style="display:none">
		<form role="form" id="form-16" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 16</h3>
						<p>Which of the following words can be spelled from the letters in the word <b>“inconsequence”</b></p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q16.jpg" width="428" height="231"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-4" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q16" value="5" > A in</label></div>
							<div class="radio"><label><input type="radio" name="q16" value="0" > B f</label></div>
							<div class="radio"><label><input type="radio" name="q16" value="0" > C a</label></div>
							<div class="radio"><label><input type="radio" name="q16" value="0" > D iunccnneseqoe</label></div>
							<div class="radio"><label><input type="radio" name="q16" value="0" > E equnce</label></div>
							
					</div>
					<input type="hidden" id="insertId16" name="insertId16" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q16-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q16">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-16" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->



<div class="container" id="cont-17" style="display:none">
		<form role="form" id="form-17" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 17</h3>
						<p>If the word ION is written above the word TAO and the word OAK is written above ION, then which of the following is true?
						<br>
						
						</p>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-8" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q17" value="0" > A - The word ANT is formed vertically</label></div>
							<div class="radio"><label><input type="radio" name="q17" value="0" > B - The word PEONY is formed horizontally</label></div>
							<div class="radio"><label><input type="radio" name="q17" value="5" > C - O’s take the board, on the diagonal!</label></div>
							<div class="radio"><label><input type="radio" name="q17" value="0" > D - The Da Vinci Code is cracked wide open.</label></div>
							<div class="radio"><label><input type="radio" name="q17" value="0" > E - Voila! a word puzzle is formed </label></div>
							
					</div>
					<input type="hidden" id="insertId17" name="insertId17" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q17-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q17">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-17" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->


<div class="container" id="cont-18" style="display:none">
		<form role="form" id="form-18" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 18</h3>
						<p>How many letters are there between A and Z?
						<br>
						<span style="font-weight:bold; color:gray">Uchenna mustered up enough to go to the horror film</span></p>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-8" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q18" value="0" > A - 26</label></div>
							<div class="radio"><label><input type="radio" name="q18" value="0" > B - 25</label></div>
							<div class="radio"><label><input type="radio" name="q18" value="5" > C - 24  </label></div>
							<div class="radio"><label><input type="radio" name="q18" value="0" > D - few </label></div>
							<div class="radio"><label><input type="radio" name="q18" value="0" > E - a few</label></div>
							
					</div>
					<input type="hidden" id="insertId18" name="insertId18" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q18-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q18">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-18" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->



<div class="container" id="cont-19" style="display:none">
		<form role="form" id="form-19" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 19</h3>
						<p>Sue and Jennifer are fair. Brian and Robyn are dark. Sue and Robyn are tall. Who is fair and tall? </p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q19.jpg" width="406" height="237"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-4" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q19" value="5" > A Sue</label></div>
							<div class="radio"><label><input type="radio" name="q19" value="0" > B Jennifer </label></div>
							<div class="radio"><label><input type="radio" name="q19" value="0" > C Brian</label></div>
							<div class="radio"><label><input type="radio" name="q19" value="0" > D Robyn</label></div>
							<div class="radio"><label><input type="radio" name="q19" value="0" > E Sue and Robyn</label></div>
					</div>
					<input type="hidden" id="insertId19" name="insertId19" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q19-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q19">Next <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-19" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->



<div class="container" id="cont-20" style="display:none">
		<form role="form" id="form-20" method="post">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel-heading">
						<h3 style="font-weight:bold">Question 20</h3>
						<p>. Sue and Jennifer are fair. Brian and Robyn are dark. Sue and Robyn are tall. Who is fair and tall?</p>
					</div>
				</div>
				<!--<div class="col-xs-12 col-sm-6 col-md-8">
					<img src="<?php echo base_url(); ?>assets/images/psychometric/two/q20.jpg" width="400" height="297"></img>
				</div>-->
				<div class="col-xs-12 col-sm-6 col-md-4" >
					<div class="panel-body" style="font-weight:bold; font-size:20px !important;">
							<div class="radio"><label><input type="radio" name="q20" value="0" > A Sue</label></div>
							<div class="radio"><label><input type="radio" name="q20" value="0" > B Jennifer</label></div>
							<div class="radio"><label><input type="radio" name="q20" value="0" > C Brian </label></div>
							<div class="radio"><label><input type="radio" name="q20" value="5" > D Robyn</label></div>
							<div class="radio"><label><input type="radio" name="q20" value="0" > E None</label></div>
							
					</div>
					<input type="hidden" id="insertId20" name="insertId20" value=""></input>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<div class="panel panel-default">
					<div class="panel-footer">
						<center>
						<button type="button" class="btn btn-warning btn-custom2" id="btn-q20-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>&nbsp;&nbsp;&nbsp;
						<button type="button" class="btn btn-primary btn-custom" id="btn-q20">Finish <i class="fa fa-check" aria-hidden="true"></i></button>
						</center>
					</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12" >
					<center>
						<div style="font-weight:bold; font-size:15px; display:none; margin-top:20px" id="loader-20" >
										<img src="<?php echo base_url()."assets/images/page-loader.gif" ?>" class="img-responsive" style="width:50px; ">
										Please Wait .....
						</div>
					</center>
				</div>
			</div>
		</form>
</div><!--end cont-1-->



<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->

<script src="<?php echo base_url(); ?>assets/survey/js/jquery.min.js"> </script>

<script>
		
$(function() {
	 
    $("#btn-q1").on("click",function(){
		
		 $('#loader-1').show();
		 
		 //$('#loader-1').hide();
		
          $.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/insertQ1',
                data: $('#form-1').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
                        $('#loader-1').hide();
						
						//hide question-1 form
						$("#cont-1").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q1").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q2").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-2").css("display","block");
						
                    }
                    else
                    {
                        $('#loader-1').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
		
	});
	
	$("#btn-q2").on("click",function(){
		
		 $('#loader-2').show();
		               
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ2',
                data: $('#form-2').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-2').hide();
                        //hide question-1 form
						$("#cont-2").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q2").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q3").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-3").css("display","block");
						//$('#insertId3').val(response.trim());
                    }
                    else
                    {
                        $('#loader-2').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q2-prev").on("click",function(){
		
		$('#loader-2').hide();
        //hide question-1 form
		$("#cont-2").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q2").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q1").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-1").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q3").on("click",function(){
		
		 $('#loader-3').show();
		 
		
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ3',
                data: $('#form-3').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
                        $('#loader-3').hide();
                        //hide question-1 form
						$("#cont-3").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q3").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q4").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-4").css("display","block");
						//$('#insertId4').val(response.trim());
                    }
                    else
                    {
                        $('#loader-3').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q3-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-3").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q3").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q2").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-2").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q4").on("click",function(){
		
		 $('#loader-4').show();
		                
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ4',
                data: $('#form-4').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-4').hide();
                        //hide question-1 form
						$("#cont-4").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q4").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q5").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-5").css("display","block");
						//$('#insertId5').val(response.trim());
                    }
                    else
                    {
                        $('#loader-4').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q4-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-4").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q4").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q3").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-3").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q5").on("click",function(){
		
		 $('#loader-5').show();
		
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ5',
                data: $('#form-5').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-5').hide();
                        //hide question-1 form
						$("#cont-5").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q5").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q6").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-6").css("display","block");
						//$('#insertId6').val(response.trim());
                    }
                    else
                    {
                        $('#loader-5').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q5-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-5").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q5").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q4").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-4").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	
	$("#btn-q6").on("click",function(){
		
		 $('#loader-6').show();
		
                $.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ6',
                data: $('#form-6').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-6').hide();
                        //hide question-1 form
						$("#cont-6").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q6").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q7").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-7").css("display","block");
						//$('#insertId7').val(response.trim());
                    }
                    else
                    {
                        $('#loader-6').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q6-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-6").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q6").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q5").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-5").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q7").on("click",function(){
		
				$('#loader-7').show();
		 
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ7',
                data: $('#form-7').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-7').hide();
                        //hide question-1 form
						$("#cont-7").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q7").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q8").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-8").css("display","block");
						//$('#insertId8').val(response.trim());
                    }
                    else
                    {
                        $('#loader-7').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q7-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-7").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q7").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q6").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-6").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q8").on("click",function(){
		
		 $('#loader-8').show();
		 
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ8',
                data: $('#form-8').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-8').hide();
                        //hide question-1 form
						$("#cont-8").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q8").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q9").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-9").css("display","block");
						//$('#insertId9').val(response.trim());
                    }
                    else
                    {
                        $('#loader-8').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q8-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-8").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q8").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q7").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-7").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	
	$("#btn-q9").on("click",function(){
		
		 $('#loader-9').show();
		 
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ9',
                data: $('#form-9').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-9').hide();
                        //hide question-1 form
						$("#cont-9").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q9").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q10").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-10").css("display","block");
						//$('#insertId10').val(response.trim());
                    }
                    else
                    {
                        $('#loader-9').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q9-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-9").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q9").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q8").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-8").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q10").on("click",function(){
		
		 $('#loader-10').show();
		            
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ10',
                data: $('#form-10').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-10').hide();
                        //hide question-1 form
						$("#cont-10").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q10").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q11").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-11").css("display","block");
						//$('#insertId11').val(response.trim());
                    }
                    else
                    {
                        $('#loader-10').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q10-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-10").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q10").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q9").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-9").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	
	$("#btn-q11").on("click",function(){
		
				$('#loader-11').show();
		                
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ11',
                data: $('#form-11').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-11').hide();
                        //hide question-1 form
						$("#cont-11").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q11").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q12").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-12").css("display","block");
						//$('#insertId12').val(response.trim());
                    }
                    else
                    {
                        $('#loader-11').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q11-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-11").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q11").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q10").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-10").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q12").on("click",function(){
		
		 $('#loader-12').show();
		 
          $.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ12',
                data: $('#form-12').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-12').hide();
                        //hide question-1 form
						$("#cont-12").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q12").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q13").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-13").css("display","block");
						//$('#insertId13').val(response.trim());
                    }
                    else
                    {
                        $('#loader-12').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q12-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-12").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q12").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q11").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-11").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q13").on("click",function(){
		
		 $('#loader-13').show();
		      
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ13',
                data: $('#form-13').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-13').hide();
                        //hide question-1 form
						$("#cont-13").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q13").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q14").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-14").css("display","block");
						//$('#insertId14').val(response.trim());
                    }
                    else
                    {
                        $('#loader-13').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q13-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-13").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q13").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q12").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-12").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q14").on("click",function(){
		
		 $('#loader-14').show();
		    
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ14',
                data: $('#form-14').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
                        $('#loader-14').hide();
                        //hide question-1 form
						$("#cont-14").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q14").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q15").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-15").css("display","block");
						//$('#insertId15').val(response.trim());
                    }
                    else
                    {
                        $('#loader-14').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q14-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-14").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q14").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q13").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-13").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q15").on("click",function(){
		
		 $('#loader-15').show();
		 
		 //$('#loader-1').hide();
		
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ15',
                data: $('#form-15').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-15').hide();
                        //hide question-1 form
						$("#cont-15").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q15").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q16").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-16").css("display","block");
						//$('#insertId16').val(response.trim());
                    }
                    else
                    {
                        $('#loader-15').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q15-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-15").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q15").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q14").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-14").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q16").on("click",function(){
		
		 $('#loader-16').show();
		 
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ16',
                data: $('#form-16').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-16').hide();
                        //hide question-1 form
						$("#cont-16").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q16").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q17").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-17").css("display","block");
						//$('#insertId17').val(response.trim());
                    }
                    else
                    {
                        $('#loader-16').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q16-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-16").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q16").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q15").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-15").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q17").on("click",function(){
		
		 $('#loader-17').show();
		 
                        
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ17',
                data: $('#form-17').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
                        $('#loader-17').hide();
                        //hide question-1 form
						$("#cont-17").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q17").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q18").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-18").css("display","block");
						//$('#insertId18').val(response.trim());
                    }
                    else
                    {
                        $('#loader-17').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q17-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-17").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q17").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q16").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-16").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q18").on("click",function(){
		
		 $('#loader-18').show();
		 
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ18',
                data: $('#form-18').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
                        $('#loader-18').hide();
                        //hide question-1 form
						$("#cont-18").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q18").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q19").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-19").css("display","block");
						//$('#insertId19').val(response.trim());
                    }
                    else
                    {
                        $('#loader-18').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q18-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-18").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q18").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q17").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-17").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q19").on("click",function(){
		
		 $('#loader-19').show();
		 
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ19',
                data: $('#form-19').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						
                        $('#loader-19').hide();
                        //hide question-1 form
						$("#cont-19").css("display","none");
						//revert styling of questioning numbering at the top
						$("#wiz-q19").css({"border-bottom":"none","color":"#333"});
						//Set styling on numbering for next question - 2
						$("#wiz-q20").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
						//display question-2 form
						$("#cont-20").css("display","block");
						//$('#insertId20').val(response.trim());
                    }
                    else
                    {
                        $('#loader-19').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q19-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-19").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q19").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q18").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-18").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	$("#btn-q20").on("click",function(){
		
		 $('#loader-20').show();
		 
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ20',
                data: $('#form-20').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						window.location.href='<?php echo site_url('App/endNotice') ?>';
                        
                    }
                    else
                    {
                        $('#loader-19').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
            }); //end ajax function
	});
	
	$("#btn-q20-prev").on("click",function(){
		
        //hide question-1 form
		$("#cont-20").css("display","none");
		//revert styling of questioning numbering at the top
		$("#wiz-q20").css({"border-bottom":"none","color":"#333"});
		//Set styling on numbering for next question - 2
		$("#wiz-q19").css({"border-bottom":"2px solid #1A237E", "color":"#2a5290"});
		//display question-2 form
		$("#cont-19").css("display","block");
		//$('#insertId3').val(response.trim());
	});
	
	
});
		
		
</script>

<script type="text/javascript">
	//This script controls the test timing
	function startTimer(duration, display) {
	var timer = duration, minutes, seconds;
	setInterval(function () {
		minutes = parseInt(timer / 60, 10);
		seconds = parseInt(timer % 60, 10);
	
		minutes = minutes < 10 ? "0" + minutes : minutes;
		seconds = seconds < 10 ? "0" + seconds : seconds;
	
		display.textContent = minutes + ":" + seconds;
	
		if (--timer < 0) {
		timer = duration;
		}
	}, 1000);
	}
	
	window.onload = function () {
		var Minutes = 60 * 20,
		display = document.querySelector('#time');
		startTimer(Minutes, display);
		window.setTimeout(
			function() { 
				//window.location.href='<?php echo site_url('App/endNotice') ?>';
				$.ajax({
                type:"POST",
                url: '<?php echo site_url(); ?>/App/updateQ20',
                data: $('#form-20').serialize(),
                success: function(response)
                {
                    if(response.trim()>1)
                    {
						window.location.href='<?php echo site_url('App/endNotice') ?>';
                        
                    }
                    else
                    {
                        $('#loader-19').hide();
                        $('#error_').show().html(response);
						window.scroll(0,0);
                        setTimeout(function(){
                            $('#error_').hide();
                        },20000);
                    }
                    //alert(response)
                }
				}); //end ajax function
			
				}, 1000 * 60 * 20 );
	};
</script>

