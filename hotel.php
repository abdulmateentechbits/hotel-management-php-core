
<?php

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
    $message = '<div class = "d-inline-flex alert alert-danger mt-3" role "alert"> Room ALready Booked Sorry </div>';
}
else{
    $message = '<div class = "d-inline-flex alert alert-success mt-3 " role "alert"> Room Is Free Please Booked </div>';

    header("location: user/");
}



    }
    
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Hotel , booking , Reservation , Travel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>HOTEL booking || Discovery chitral</title>
    
    <!--Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
        
    <!--CSS Files-->
 
</head>
<body>
     <!-- Page Preloder -->
     <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section" >
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a style="text-decoration: none;color: white;font-size: 25px" href="hotel.php">Discovery Chitral</a>
                   
    
                </div>
                <div class="nav-right">
                    <a class="btn btn-warning mt-3 btn-sm" href="user/" >Sign In</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><a href="hotel.php">Rooms</a></li>
                       
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Area Section Begin -->
    <div class="hero-area set-bg other-page" data-setbg="img/home.jpg" > 
    </div>
    <!-- Hero Area Section End -->

    <!-- Search Filter Section Begin -->
    <section class="search-filter other-page-filter" id="check_form">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <form action="hotel.php" class="check-form" method="POST">
                        <?php  
                         if (isset($message)) {
                        echo "$message";
                         }
                         ?>
                        <h4>Check Availability</h4>
                        <div class="datepicker">
                            <p>From</p>
                            <input type="text" class="datepicker-1" name="date_in" placeholder="mm-dd-yy">
                            <img src="img/calendar.png">
                        </div>
                        <div class="datepicker">
                            <p>To</p>
                            <input type="text" class="datepicker-2" name="date_out" placeholder="mm-dd-yy" >
                            <img src="img/calendar.png">
                        </div>
                         <div class="room-selector">
                            <p>Room</p>
                            <select class="suit-select form-control" name="room" >
                                <option >Select Room</option>
                                <option value="Superior Room">Superior Room</option>
                                <option value="Deluxe Room">Deluxe Room</option>
                                <option value="Guest Room">Guest Room</option>
                                 <option value="Single Room">Single Room</option>
                            </select>
                        </div>
                      
                        <div class="room-selector">
                            <p>Room Type</p>
                            <select class="suit-select form-control" name="room_type">
                                 <option >Select Room Type</option>
                                <option value="Single">Single</option>
                                <option value="Double">Double</option>
                                <option value="Triple">Triple</option>
                                 <option value="Quad">Quad</option>
                            </select>
                        </div>


                        <button type="submit" name="check">GO</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Filter Section End -->

    <!-- Room Section Begin -->
    <section class="room-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ri-slider-item">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block" src="img/rooms/pexels-pixabay-164595 (1).jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block" src="img/rooms/room-3.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block" src="img/rooms/pexels-donald-tong-189333.jpg" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2>Superior Room</h2>
                            </div>
                            <p>
                                Stay at our superior room. Our superior rooms are either double or twin and are particularly spacious and include some little extras to make your stay at our rooms extra special including bathrobes. All bedrooms have crisp cotton sheets, en-suite bathrooms, large flat screen televisions and free Wi-Fi.
                            </p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>High Wi-fii</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Parking</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Pool</p>
                                </div>
                                <br>
                                <br>
                               <strong> Rating :</strong> <h6 class="btn btn-info btn-sm"> 4.4 <i class="fa fa-star"> </i></h6>
                                   <strong>Per night :</strong> <h6 class="btn btn-success btn-sm"> 6500 pkr<i class=""> </i></h6>
                            </div>
                            <a href="#check_form" class="primary-btn">Make a Reservation</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="ri-slider-item">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block" src="img/rooms/pexels-pixabay-271643.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block" src="img/rooms/pexels-donald-tong-189333.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block" src="img/rooms/pexels-cottonbro-6466281.jpg" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                        </div>  
                    </div>
                </div>


                <div class="col-lg-6 order-lg-1">
                    <div class="ri-text left-side">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2>Deluxe Room</h2>
                            </div>
                            <p>
                                Step into an oasis of tranquillity and calm in the Deluxe Room, with views over the hotel’s beautifully landscaped gardens and beyond to the city.
                                It offers the choice of a comfortable king or twin bed. With a working desk, safety deposit box and generously proportioned bathroom with luxurious bath amenities, this room ensures a truly relaxing stay. Smoke-free rooms are also available upon request and availability.
                            </p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>High Wi-fii</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                                 <br>
                                <br>
                            <strong> Rating :</strong>  <h6 class="btn btn-primary btn-sm"> 4.5 <i class="fa fa-star"> </i></h6>
                                  <strong>  Per night :</strong> <h6 class="btn btn-success btn-sm"> 4500 pkr<i class=""> </i></h6>
                            </div>

                            <a href="#check_form" class="primary-btn">Make a Reservation</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-6">
                    <div class="ri-slider-item">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block" src="img/rooms/pexels-pixabay-271672.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block" src="img/rooms/pexels-cats-coming-707581.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block" src="img/rooms/pexels-burst-545046.jpg" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ri-text">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2>Guest Room</h2>
                            </div>
                            <p>
                               All units at the room are equipped with a seating area, a flat-screen TV with satellite channels and a private bathroom with free toiletries and a shower. 
                            </p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>High Wi-fii</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Parking</p>
                                </div>
                                 <br>
                                <br>
                             <strong>   Rating :</strong> <h6 class="btn btn-primary btn-sm"> 4.2 <i class="fa fa-star"> </i></h6>
                                   <strong> Per night :</strong> <h6 class="btn btn-success btn-sm"> 3500 pkr<i class=""> </i></h6>
                            </div>
                            <a href="#check_form" class="primary-btn btn-sm">Make a Reservation</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6 order-lg-2">
                    <div class="ri-slider-item">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block" src="img/rooms/pexels-suhel-vba-3659683.jpg" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block" src="img/rooms/room-1.jpg" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block" src="img/rooms/room-4.jpg" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>
                </div>

                <div class="col-lg-6 order-lg-1">
                    <div class="ri-text left-side">
                        <div class="section-title">
                            <div class="section-title">
                                <span>a memorable holliday</span>
                                <h2>Single Room</h2>
                            </div>
                            <p>
                                King size bed, queen size sofa sleeper, and a bathroom with shower and air jet bath tub. Can be rented with adjoining Hospitality Suite.
                            </p>
                            <div class="ri-features">
                                <div class="ri-info">
                                    <i class="flaticon-019-television"></i>
                                    <p>Smart TV</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-029-wifi"></i>
                                    <p>High Wi-fii</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-003-air-conditioner"></i>
                                    <p>AC</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-036-parking"></i>
                                    <p>Parking</p>
                                </div>
                                <div class="ri-info">
                                    <i class="flaticon-007-swimming-pool"></i>
                                    <p>Pool</p>
                                </div>
                                  <br>
                                <br>
                                <strong> Rating :</strong> <h6 class="btn btn-primary btn-sm"> 4.3 <i class="fa fa-star"> </i></h6>
                                  <strong> Per night :</strong> <h6 class="btn btn-success btn-sm"> 3000 pkr<i class=""> </i></h6>
                            </div>
                            <a href="#check_form" class="primary-btn btn-sm">Make a Reservation</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Room Section End -->


    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="footer-item">
                        <div class="footer-logo">
                                <h5>Discovery Chitral</h5>
                           
                        </div>
                        <p>Chitral is the most beautiful and peaceful district of Pakistan situated at the North most in KPK.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Subscribe</h5>
                        <div class="newslatter-form">
                            <input type="text" placeholder="Your Email Here">
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="footer-item">
                        <h5>Contact Info</h5>
                        <ul>
                            <li><img src="img/placeholder.png">District Chitral Kpk<br/>
                                Itizaz Ur Rehman</li>
                            <li><img src="img/phone.png">+92 (345)2117099</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!--JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/main.js"></script>

</body> 
</html>
