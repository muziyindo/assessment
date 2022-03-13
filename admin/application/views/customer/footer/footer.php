

</div>            
            <!-- END PAGE CONTENT -->
</div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="<?php echo site_url('authenticate/logout') ?>" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url('assets/') ?>audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url('assets/') ?>audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?php echo base_url('assets/') ?>js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

        <?php if($title == "Dashboard"){ ?>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?php echo base_url('assets/') ?>js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?php echo base_url('assets/') ?>js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>  
        <script type='text/javascript' src='<?php echo base_url('assets/') ?>js/plugins/bootstrap/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/owl/owl.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/daterangepicker/daterangepicker.js"></script>
        <?php } ?>
        
        <?php if($title == "New Customer" || $title == "Edit Customer" || $title == "New user"){ ?>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!--<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/select2.min.js"></script>-->

        <script>
        
            /* $(document).ready(function() {
            $('.doc_type').select2({
                width: 'resolve' // need to override the changed default
            });
            }); */
        </script>
        <?php } ?>
		
		<?php if($title == "Customers"){ ?>
        <script type='text/javascript' src='<?php echo base_url("assets/") ?>js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/tableexport/tableExport.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/tableexport/jquery.base64.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/tableexport/html2canvas.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/tableexport/jspdf/jspdf.js"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/tableexport/jspdf/libs/base64.js"></script><script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins/bootstrap/bootstrap-datepicker.js"></script>         
		<?php } ?>





        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/settings.js"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/plugins.js"></script>     
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/actions.js"></script>
        
        <?php if($title == "Dashboard"){ ?>
		
		<!--<script type="text/javascript" src="<?php echo base_url('assets/') ?>js/demo_charts_morris.js"></script>-->
        <script type="text/javascript" src="<?php echo base_url('assets/') ?>js/demo_dashboard.js"></script>
		
		<script>
			/* Donut dashboard chart */
			Morris.Donut({
				element: 'dashboard-donut-2',
				data: [
					{label: "Free (GB)", value: <?php echo number_format(disk_free_space("C:")/(1024*1024*1024),1); ?>},
					{label: "Used (GB)", value: <?php echo number_format((disk_total_space("C:")-disk_free_space("C:"))/(1024*1024*1024),1) ?>},
					//{label: "Registred", value: 311}
				],
				colors: ['#33414E', '#3FBAE4', '#FEA223'],
				resize: true
			});
			/* END Donut dashboard chart */
			
			
			/* Bar dashboard chart */
			Morris.Bar({
				element: 'dashboard-bar-2',
				data: [
					{ y: 'Import', a: 75, b: 35 },
					{ y: 'Export', a: 64, b: 26 },
					/* { y: 'Oct 12', a: 78, b: 39 },
					{ y: 'Oct 13', a: 82, b: 34 },
					{ y: 'Oct 14', a: 86, b: 39 },
					{ y: 'Oct 15', a: 94, b: 40 },
					{ y: 'Oct 16', a: 96, b: 41 } */
				],
				xkey: 'y',
				ykeys: ['a', 'b'],
				labels: ['Open Files', 'Closed FIles'],
				barColors: ['#33414E', '#3FBAE4'],
				gridTextSize: '10px',
				hideHover: true,
				resize: true,
				gridLineColor: '#E5E5E5'
			});
			/* END Bar dashboard chart */
			
			/* Line dashboard chart */
			Morris.Line({
			element: 'dashboard-line-2',
			data: [
				{ y: '2014-10-10', a: 2},
				{ y: '2014-10-11', a: 4},
				{ y: '2014-10-12', a: 7},
				/*{ y: '2014-10-13', a: 5},
				{ y: '2014-10-14', a: 6},
				{ y: '2014-10-15', a: 9},
				{ y: '2014-10-16', a: 18} */
			],
			xkey: 'y',
			ykeys: ['a','b'],
			labels: ['Sales','Event'],
			resize: true,
			hideHover: true,
			xLabels: 'day',
			gridTextSize: '10px',
			lineColors: ['#3FBAE4','#33414E'],
			gridLineColor: '#E5E5E5'
			});   
			/* EMD Line dashboard chart */
		
		</script>
		
        <?php } ?>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>
