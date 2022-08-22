<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from tour_request where req_id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					$fname = $row['first_name'];
					$lname = $row['last_name'];
					$email = $row['email'];
					$address = $row['address'];
					$nationality = $row['nationality'];
					$p_country = $row['p_countery'];
					$phone= $row['phone'];
					$tour_places = $row['tour_places'];
					$pu_address = $row['pu_address'];
					$nop = $row['persons'];
					$date = $row['pdate'];
		            $status=$row['status'];
					
				
				
				}
					
					
				
		
	}
		
		
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">


                    <li>
                        <a  href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                   
					<li>
                        <a class="active-menu" href="roombook.php"><i class="fa fa-bar-chart-o"></i> Tour Booking</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
					
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                    


                    
					</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">

                            Tour Booking<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                           Booking Confirmation
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPTION</th>
                                            <th>INFORMATION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <th><?php echo $fname.$lname; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Address </th>
                                            <th><?php echo $address; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Nationality </th>
                                            <th><?php echo $nationality;  ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Passpord Country </th>
                                            <th><?php echo $p_country; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Phone No </th>
                                            <th><?php echo $phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Tour Places </th>
                                            <th><strong><?php echo $tour_places; ?></strong></th>
                                            
                                        </tr>
										
										<tr>
                                            <th>Pick Up Address</th>
                                            <th><?php echo $pu_address; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>No of Persons</th>
                                            <th><?php echo $nop; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Date of Request</th>
                                            <th><?php echo $date; ?></th>
                                            
                                        </tr>
										
										<tr>
                                            <th>Status Level</th>
                                            <th><?php echo $status; ?></th>
                                            
                                        </tr>
                                   
                                  
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Select the Confirmation</label>
														<select name="option"class="form-control">
															<option value selected>	</option>
															<option value="Confirm">Confirm</option>
															<option value="Reject">Reject</option>
														</select>
										 </div>
							<input type="submit" name="button" value="Confirm" class="btn btn-success">
							
							</form>
                        </div>
                    </div>
					</div>
					
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
						
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Tours Details
                        </div>
                        <div class="panel-body">
						<table width="200px">
						
							<tr>
								<td><b>Uncomfirmed Request</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								echo $c;
							?> </button></td> 
						</tr>
							<tr>
								<td><b>Comfirmed Request</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
										
								
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
						
							       echo $r;
							?> </button></td> 
							</tr>
							<tr>
								<td><b>Reject Request</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
									$sql = "SELECT * FROM `tour_request`";
								$result = mysqli_query($con,$sql);
								$reject =0;
								while($row1=mysqli_fetch_array($result) )
								{		
										$status = $row1['status'];
										if($status=="reject")
										{
											$reject = $reject + 1;
											
											
											
										}
										
								
								}
						
							       echo $reject;
							?> </button></td> 
						</tr>
							<tr>
								<td><b>Cancel Request</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
									$query = "SELECT * FROM `tour_request`";
								$run = mysqli_query($con,$query);
								$cancel =0;
								while($row4=mysqli_fetch_array($run) )
								{		
										$state = $row4['status'];
										if($state=="Cancel")
										{
											$cancel = $cancel + 1;
											
											
											
										}
										
								
								}
						
							       echo $cancel;
							?> </button></td> 
						</tr>
							<tr>
								<td><b>Total request	</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle"><?php 
								
								echo $c+$r+$reject+$cancel;
								
								 ?> </button></td> 
							</tr>
						</table>
						
						
						
                        
						
						</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
						if(isset($_POST['button']))
						{	
							$id = $_GET['rid'];
							$st = $_POST['option'];
							
							 
							
							if($st=="Confirm")
							{
									$urb2 = "UPDATE `tour_request` SET `status`='$st' WHERE req_id = '$id'";
									$result2=mysqli_query($con,$urb2);
									if ($result2) {
										
									
										echo' <script type="text/javascript"> alert("your tour Booked Successfully")  </script>';
										
									}
								}
									if ($st=="Reject") {
										$urb1 = "UPDATE `tour_request` SET `status`='reject' WHERE req_id = '$id'";
										$result1=mysqli_query($con,$urb1);
									if ($result1) {
										
										
										echo '<script type="text/javascript"> alert("tour Booked canceled Successfully")  </script>	';							}
									}
								}
?>