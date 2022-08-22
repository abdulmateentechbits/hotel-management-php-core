<?php  
session_start();  
if(!isset($_SESSION["user_name"]))
{
 header("location:index.php");
}
?>
<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Discovery Chitral  || Room Reservation</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
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
                <a class="navbar-brand" href="reservation.php"> <?php echo $_SESSION["user_name"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li><a href="booking.php"><i class="fa fa-gear fa-fw"></i> Booking</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../user/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu"  href="booking.php"><i class="fa fa-bar-chart-o"></i>Hotel Bookings</a>
                    </li>
                    <li>
                        <a href="tour_booking.php"><i class="fa fa-bar-chart-o"></i>Tour Bookings</a>
                    </li>
                    <li>
                        <a href="../user/logout.php"><i class="fa fa-home"></i>Logout</a>
                    </li>
        
                    </ul>

            </div>

        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Hotel Booking <small></small>
                        </h1>
                    </div>
             </div> 
<?php
             $tsql = "select * from roombook";                       
             $tre = mysqli_query($con,$tsql);                       
            $rowcount=mysqli_num_rows($tre);                      
?>
             <!-- Data Table  --> 
             <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                        
                        <div class="panel-body">
                        <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead style="background-color: #F9AD81; color: white;">
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Country</th>
                                            <th>Room</th>
                                            <th>Bedding</th>
                                            <th>Meal</th>
                                            <th>Check In</th>
                                            <th>Check Out</th>
                                            <th>No of Days</th>
                                            <th>Status</th>
                                            <th>Print</th>
                                            <th>Cancel Booking</th>

                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    <?php
                                    $user=$_SESSION["user_name"];
                                    $que="select * from users where user_name='$user'";
                                    $query=mysqli_query($con,$que);
                                    $row=mysqli_fetch_array($query);
                                    $id=$row["id"];
                                    $tsql = "select * from roombook where user_id='$id'";
                                    $tre = mysqli_query($con,$tsql);
                                    while($trow=mysqli_fetch_array($tre) )
                                    {   
                                        
                                            echo"<tr>
                                                <th>".$trow['id']."</th>
                                                <th>".$trow['FName']." ".$trow['LName']."</th>
                                                <th>".$trow['Email']."</th>
                                                <th>".$trow['Country']."</th>
                                                <th>".$trow['TRoom']."</th>
                                                <th>".$trow['Bed']."</th>
                                                <th>".$trow['Meal']."</th>
                                                <th>".$trow['cin']."</th>
                                                <th>".$trow['cout']."</th>
                                                <th>".$trow['nodays']."</th>"
                                                ?><th><a class="btn btn-primary" role="button"><?php echo $trow['stat'];
                                                ?></a></th>
                                               <th><a class="btn btn-success" href="show.php?sid=<?php echo $trow['id']  ?>" role="button">Print</a></th>
                                               <th><a class="btn btn-danger" href="cancel_room.php?sid=<?php echo $trow['id']  ?>" role="button">Cancel</a></th>
                                                </tr>
                                                <?php

                                            
                                                   
                                    
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
                                  
 <div class="col-sm-6 mt-5  mx-3">
    <p style="font-weight: bold">Check Your Request Status:</p>
  <form action="<?php $_SERVER['PHP_SELF'] ;?>" class="mt-3 form-inline d-print-none" method="POST">
    <div class="form-group mr-3">
      <label for="checkid">Check Status: </label>
      <input type="text" placeholder="Enter Your Id" class="form-control ml-3" id="checkid" name="checkid" onkeypress="isInputNumber(event)">
    </div>
    <button type="submit" class="btn btn-danger" name="search">Search </button>
  </form>



            </div>

             <!-- /. PAGE INNER  -->
        </div>

         <!-- /. PAGE WRAPPER  -->
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script> 
</body>
</html>
<?php

if(isset($_POST['search'])) {
    if ($_POST['checkid']=="") {

    echo "<script type='text/javascript'> alert('Please Enter Your Id')</script>";
      
    }
  else
  {

    $id= $_POST['checkid'];

    $search = "SELECT *FROM roombook WHERE id = '".$id."' AND stat = 'confirm'";
    $rst= mysqli_query($con,$search);
    if ($rst->num_rows == 1) {

       echo "<script type='text/javascript'> alert('Your Room Is Booked Successfully')</script>";
      
    }
    else
    {
           echo "<script type='text/javascript'> alert('Your Room Booking is Not Comfirm Yet')</script>";
    }
    }
}

?>