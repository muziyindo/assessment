<!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <!-- START DATATABLE EXPORT -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Applicants IQ Scores</h3>
									<div class="pull-right">
                                        <button class="btn btn-default toggle" data-toggle="exportTable" style="margin-left:5px"><i class="fa fa-bars"></i> Advanced search</button>
                                    </div>
                                                                      
                                </div>
								
								
								
                                <div class="panel-body">
									<div class="horizontal" style="width: 100%; height: 700px; overflow: auto;">
                                    <table id="customers2" class="table table-striped table-hover datatable_" style="border:0">
                                        <thead>
                                            <tr class="info">
                                                <th>S/N</th>
                                                <th>Applicant Name</th>
												<th>Email</th>
                                                <th>IQ score (%)</th>
                                                <th>Date Submitted</th>
												
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php $i = 1 ; ?>
											<?php foreach($data as $value ){
												
											?>
                                            <tr>
                                                <td><?php echo $i ; ?></td>
                                                <td><?php echo $value->name ; ?></td>
                                                <td><?php echo $value->email ; ?></td>
                                                <td><?php echo $value->tot_score ; ?></td>
                                                <td><?php echo $value->last_modified ?></td>
                                            </tr>
											
											<?php $i++; } ?>
                                            
                                        </tbody>
                                    </table>
									</div>
                                    
                                </div>
								
								
								
                            </div>
                            <!-- END DATATABLE EXPORT -->                            
                            
                           
                        </div>
                    </div>

                </div>         
                <!-- END PAGE CONTENT WRAPPER -->