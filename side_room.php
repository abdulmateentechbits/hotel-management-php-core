<?php
ob_start();
include('user/db_conn.php');
if (isset($_POST['room_type'])) {

    if (($_POST['date_in'] == "") || ($_POST['date_out'] == "") || ($_POST['room'] == "") ||  ($_POST['room'] == "")) {
      
      $message = '<div class = "d-inline-flex alert alert-warning mt-3" role "alert"> Must Fill All Fields </div>';

    }

    else
    {

$date_in = $_POST['date_in'];
$date_out= $_POST['date_out'];
$room=  $_POST['room'];
$room_type= $_POST['room_type'];

$query = "SELECT *FROM roombook where TRoom = '".$room."' AND Bed = '".$room_type."'";
$result= mysqli_query($conn,$query);

if ($result->num_rows == 1) {
     echo'<script> alert("Room is Already Booked Sorry!") </script>';
}

else{
    header("location: user/"); 
   echo'<script> alert("Room is free Please Booked") </script>';

  
}
}
    
}
ob_end_flush();
?>
<div id="sidebar" class="col-md-4">
    <!-- search box -->
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action="search.php" method ="GET"id="check">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-success ml-2">Search</button>
                </span>
            </div>
        </form>
    </div>
    <br>
    <br>

    <!-- /search box -->
    <!-- recent posts box -->
    <div class="recent-post-container" >
          <button  class="btn btn-sm btn-dark btn-block">Check Avaibility</button>
          <br> <br>
         <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" >
           <?php  
                         if (isset($message)) {
                        echo "$message";
                         }
                         ?>
            <div class="form-group">
               <label for="lodging"><i class="fa fa-home"></i> Rooms</label > 
               <select class="form-control" name="room" >
                <option >Select Room</option>
                  <option value="Superior Room">Superior Room</option>
                  <option value="Deluxe Room">Diluxe Room</option>
                  <option value="Guest House">Single Room</option>
                  <option value="Single Room">Guest Room</option>
                 
               </select>
            </div>
             <div class="form-group">
               <label for="lodging"><i class="fa fa-bed"></i> Room Type</label> 
               <select class="form-control" name="room_type" >
                  <option >Select Room Type</option>
                  <option value="Single">Single</option>
                  <option value="Double">Double</option>
                  <option value="Triple">Triple</option>
                  <option value="Quad">Quad</option>
                 
               </select>
            </div>
            <!--check in element-->
            <div class="form-group">
               <label for="check-in"><i class="fas fa-calender"></i> Check In</label> <!-- <input type="textfield" class="form-control" id="check-in" placeholder="12.20.2014"> -->
               <input type="date"  class="form-control" id="start-date" name="date_in" placeholder="mm/dd/yyyy" >
            </div>
            <!--check out element-->
            <div class="form-group">
               <label for="date">Check Out</label> <!-- <input type="textfield" class="form-control" id="check-out" placeholder="12.27.2014"> -->
               <input type="date" class="form-control" id="end-date" name="date_out" placeholder="mm/dd/yyyy" >
            </div>
            <!--submit-->
            <div class="form-group">
               <button class="btn btn-sm btn-primary btn-block"name="check" >Check</button>
            </div>
         </form>
      
    <!-- /recent posts box -->
</div>
