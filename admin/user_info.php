<?php  
session_start();  
if(!isset($_SESSION["user_name"]))
{
 header("location:index.php");
 include('db.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Your Detail || Print Out</title>
	 <link rel="stylesheet" href="../assets/css/style-with-prefix.css">
     <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="col-sm-5 mt-10 jumbotron">
  <!-- Main Content area Start Last -->
  <form class="" action="" method="POST">
  	 <h3 class="text-center">Room Confirmation</h3>
    <h5 class="text-center">Your Deatils</h5>
    <br>
<?php
     include('db.php');
 $usr= $_SESSION["user_name"];
 $select="select * from users where user_name='$usr'";
 $result=mysqli_query($con,$select);
 $row=mysqli_fetch_array($result);
 $id=$row["id"];
 $tsql = "select * from roombook where user_id='$id'";
 $tre1 = mysqli_query($con,$tsql);
 $row1=mysqli_fetch_array($tre1);

?>
    <div class="form-group">
      <label for="user_id">User id</label>
      <input type="text" class="form-control" id="User Id" name="user_id" value="<?php {echo $row1['id']; }?>"readonly>
    </div>
    <div class="form-group">
      <label for="First_Name">First Name</label>
      <input type="text" class="form-control" id="First_Name" name="fname" value="<?php {echo $row1['FName']; }?>">
    </div>
    <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control" id="last_name" name="lname" value="<?php {echo $row1['LName']; }?>">
    </div>
    <div class="form-group">
      <label for="email">User Email</label>
      <input type="email" class="form-control" id="email" name="email" value="<?php {echo $row1['Email']; }?>">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="Nationality">Nationality</label>
        <input type="text" class="form-control" id="Nationality" name="Nationality" value="<?php {echo $row1['National']; }?>">
      </div>
      <div class="form-group col-md-6">
        <label for="room">Phone No</label>
        <input type="text" class="form-control" id="room" name="address2" value="<?php {echo $row1['Phone']; }?>">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="requestercity">Room Type</label>
        <input type="text" class="form-control" id="requestercity" name="requestercity" value="<?php {echo $row1['TRoom']; }?>">
      </div>
      <div class="form-group col-md-4">
        <label for="requesterstate">Bed Type</label>
        <input type="text" class="form-control" id="requesterstate" name="" value="<?php {echo $row1['Bed']; }?>"> 
      </div>
      <div class="form-group col-md-4">
        <label for="requesterzip">No Of Days</label>
        <input type="text" class="form-control" id="requesterzip" name="requesterzip" value="<?php {echo $row1['nodays']; }?>">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="assigntech">Date In</label>
        <input type="date" class="form-control" id="assigntech" name="assigntech" value="<?php {echo $row1['cin']; }?>">
      </div>
      <div class="form-group col-md-6">
        <label for="inputDate">Date Out</label>
        <input type="date" class="form-control" id="inputDate" name="inputdate" value="<?php {echo $row1['cout']; }?>">
      </div>
    </div>
    <div class="float-right">
      <button type="submit" class="btn btn-success" name="assign" value="Print" onClick='window.print()'> Print</button>
     <a class ="btn btn-primary"href="booking.php">Back</a>
    </div>
        
    </div>


</body>
<script src="../assets/web/assets/jquery/jquery.min.js"></script> 
<script src="../assets/popper/popper.min.js"></script> 
 <script src="../assets/tether/tether.min.js"></script> 
<script src="../assets/bootstrap/js/bootstrap.min.js"></script> 
<script src="../assets/theme/js/script.js"></script> 
</html>