<?php  
session_start();  
if(!isset($_SESSION["user_name"]))
{
 header("location:index.php");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Discovery Chitral || Tour_Reservation</title>
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
                        <li><a href="reservation.php"><i class="fa fa-user fa-fw"></i> Reservation</a>
                        </li>
                        <li><a href="booking.php"><i class="fa fa-gear fa-fw"></i> Booking</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../Tour_places/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a class="active-menu" href="reservation.php"><i class="fa fa-dashboard"></i> Reservation</a>
                    </li>
                    <li>
                        <a href="booking.php"><i class="fa fa-bar-chart-o"></i>Bookings</a>
                    </li>
                    <li>
                        <a href="../Tour_places/logout.php"><i class="fa fa-home"></i>Logout</a>
                    </li>
        
                    </ul>

            </div>

        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVATION <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="background-color: #F9AD81;border-color: black;">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
                        <form action="tour_reservation.php" method="post">
                           
                              <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname" class="form-control" required>
                                            
                               </div>
                         
                               <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname" class="form-control" required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" placeholder="@example.com" required>
                                            
                               </div>
                                <div class="form-group">
                                            <label>Address</label>
                                            <input name="address" type="text" class="form-control" placeholder="house No Street No " required>
                                            
                               </div>
                               <div class="form-group">
                                            <label>Nationality*</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Pakistani" checked="">Pakistani
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Non Pakistani">Non Pakistani 
                                            </label>
                         
                                </div>
                                <?php

                                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                                ?>
                                <div class="form-group">
                                            <label>Passport Country*</label>
                                            <select name="country" class="form-control" required>
                                                <option value selected ></option>
                                                <?php
                                                foreach($countries as $key => $value):
                                                echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                                endforeach;
                                                ?>
                                            </select>
                                </div>
                                <div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text" class="form-control" placeholder="00009999999" required>
                                            
                               </div>
                               
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="background-color: #F9AD81;border-color: black;">
                            BOOKING INFORMATION
                        </div>
                        <div class="panel-body">
                                <div class="form-group">
                                            <label>Tour Place*</label>
                                            <select name="tplaces"  class="form-control" required>
                                                <option value selected ></option>
                                <option value="Kalash Valley">Kalash Valley</option>
                                <option value="Chitral National Park">Chitral National Park</option>
                                <option value="Chitral National Park">Chitral National Park</option>
                                <option value="Chitral Muesuem">Chitral Muesuem</option>
                                <option value="Qaqlasht">Qaqlasht</option>
                                <option value="Garumchashma">Garumchashma</option>
                                <option value="Shandur Polo Ground">Shandur Polo Ground</option>
                                <option value="Boroghol Valley">Boroghol Valley</option>
                                <option value="Laspur Valley">Laspur Valley</option>
                                            </select>
                              </div>
                            
                            
                             
                             <div class="form-group">
                                            <label>Pick Up Address</label>
                                            <input name="paddress" class="form-control" placeholder="Complete Address" required>
                                            
                               </div>
                              <div class="form-group">
                                            <label>No of Person</label>
                                            <select name="nop" class="form-control"required>
                                                <option value selected ></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>        
                                             
                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>Date</label>
                                            <input name="date" type ="date" class="form-control">
                                            
                               </div>
                             
                       </div>
                        
                    </div>
                         <input class="btn btn-primary btn-block" name="go" type="submit" value="submit" />
                </div>
                
        
            </div>
           
                </div>
                    
            </form>
              
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
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
<?php
include('db.php');
 $user=$_SESSION["user_name"];
$que="select * from users where user_name='$user'";
$query=mysqli_query($con,$que);
$row=mysqli_fetch_array($query);
$id=$row["id"];
if (isset($_POST['go'])) {
   $new= "Not Confirm";
   $fname= $_POST['fname'];
   $lname= $_POST['lname'];
   $email= $_POST['email'];
   $address= $_POST['address'];
   $Nationality= $_POST['nation'];
   $pcountry= $_POST['country'];
   $phone= $_POST['phone'];
   $pod= $_POST['paddress'];
   $tour_places=$_POST['tplaces'];
   $nop= $_POST['nop'];
   $date=$_POST['date'];

 $query="INSERT INTO tour_request(first_name,last_name,email,address,nationality,p_countery,phone,
 tour_places,pu_address,persons,pdate,status,user_id) VALUES('$fname','$lname','$email','$address',
 '$Nationality','$pcountry','$phone','$tour_places','$pod','$nop','$date','$new','$id')";
   $run=mysqli_query($con,$query);
   if($run) {
    ?>
<script> alert('Your Booking application has been Submitted Successfully')</script>
         <?php
                 
}
   }
?>