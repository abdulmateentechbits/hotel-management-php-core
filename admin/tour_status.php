
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small>Tour Booking </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
				<?php
						include ('db.php');
						$sql = "select * from tour_request";
						$re = mysqli_query($con,$sql);
						$c =0;
						while($row=mysqli_fetch_array($re) )
						{
								$new = $row['status'];
								$id = $row['req_id'];
								if($new=="Not Confirm")
								{
									$c = $c + 1;
									
								
								}
						
						}
							
				?>

					<div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
							
							<div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            
											<button class="btn btn-default" type="button">
												 New Tour Bookings  <span class="badge"><?php echo $c ; ?></span>
											</button>
											
                                        </h4>
                                    </div>
                                   
                                        <div class="panel-body">
                                           <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Country</th>
											<th>phone</th>
											<th>Tour Places</th>
											<th>Pick Up Add</th>
											<th>No Of Persons</th>
											<th>Status</th>
											<th>More</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
									$tsql = "select * from tour_request where status='Not Confirm'";
									$tre = mysqli_query($con,$tsql);
									while($trow=mysqli_fetch_array($tre) )
									{	
										
											echo"<tr>
												<th>".$trow['req_id']."</th>
												<th>".$trow['first_name']." ".$trow['last_name']."</th>
												<th>".$trow['email']."</th>
												<th>".$trow['p_countery']."</th>
												<th>".$trow['phone']."</th>
												<th>".$trow['tour_places']."</th>
												<th>".$trow['pu_address']."</th>
												<th>".$trow['persons']."</th>
												<th>".$trow['status']."</th>
												
												<th><a href='tourbook.php?rid=".$trow['req_id']." ' class='btn btn-primary'>Action</a></th>
												</tr>";
									
									}
									?>
                                        
                                    </tbody>
                                </table>
								
                            </div>
                        </div>
                    </div>
                      <!-- End  Basic Table  --> 
                                        </div>
                                    </div>
                                </div>
								<?php
								
								$rsql = "SELECT * FROM `tour_request`";
								$rre = mysqli_query($con,$rsql);
								$r =0;
								while($row=mysqli_fetch_array($rre) )
								{		
										$br = $row['status'];
										if($br=="Confirm")
										{
											$r = $r + 1;
											
											
											
										}
										
								
								}
						
								?>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                 
											<button class="btn btn-primary" type="button">
												 Booked Tour  <span class="badge"><?php echo $r ; ?></span>
											</button>
											
											</a>
                                        </h4>
                                    </div>
                                   
                                        <div class="panel-body">
										<?php
										$msql1 = "SELECT * FROM `tour_request`";
										$mre1 = mysqli_query($con,$msql1);
										
										while($mrow1=mysqli_fetch_array($mre1) )
										{		
											$br1 = $mrow1['status'];
											if($br1=="Confirm")
											{
												$fid1 = $mrow1['req_id'];
												 
											echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-blue'>
														<div class='panel-body'>
																<i class='fa fa-user fa-3x'></i>
															<h3>".$mrow1['first_name'].".".$mrow1['last_name']."</h3>
														</div>
														<div class='panel-footer back-footer-blue'>
														<a href=tour_invoice.php?sid=".$fid1 ."><button  class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
													Show
													</button></a>
															".$mrow1['tour_places']."
														</div>
													</div>	
											</div>";	
											}
											
										}
										?>
                                           
										</div>
										
                                    </div>
									
                                </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            