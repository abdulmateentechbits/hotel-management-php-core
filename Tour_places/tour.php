    <!DOCTYPE html>
    <html>
    <head>
    	<title>Discovery Chitral || Tour Places</title>
    	<?php

    	include('../includes/links.php');
    	?>
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="../admin/assets/css/font-awesome.css">
<style>
    
    .style{
      color: red;
      font-size: 20px;
    }

  </style>
   </head>
   <body>
    <?php
    include('../includes/navbar.php');
    ?>
    <section class="header1 cid-sgMEg8JO1Y mbr-fullscreen" id="header1-l">
        <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(250, 250, 250);"></div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Tour Chitral</strong></h1>
                    
                    <p class="mbr-text mbr-fonts-style display-4">Chitral is full of natural beauty. Chitral is the most attracted place of tourists as because People of Chitral welcomes all the Tourists from all over the world. People just love Chitral Tour just to see the real beauty with their own eyes.</p>         
           </div>
            </div>
        </div>
    </section>
    <section>
         <div id="main-content">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Our Tour Places</strong></h4><hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- post-container -->
                        <div class="post-container">
                            <div class="post-content">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="post-img" href="Kalash.php"><img src="images/0_G-ISx2zyNdDekzts.jpg" alt=""/></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="inner-content clearfix">
                                            <h3><a href='Kalash.php'>Kalash Valley</a></h3>
                                            <?php 
                                            include('../includes/post.php')
                                            ?>
                                            <p class="description">
                                             The Kalasha Valleys are valleys in Chitral District in northern Pakistan. The valleys are surrounded by the Hindu Kush mountain range...
                                         </p>
                                         <a class='read-more pull-right ml-2 btn btn-info btn-sm' href='Kalash.php'>read more >></a>
                                         <a class='read-more pull-right btn btn-warning btn-sm' href='index.php'>Book Tour!</a>
                                         

                                     </div>
                                 </div>
                           
                             </div> 
                                
                         </div>
 
                     </div>
 <div class="post-container">
  <div class="post-content">
    <div class="row">
    <div class="col-md-4">
        <a class="post-img" href="park.php"><img src="images/D7mV8hcW4AAThUJ.jpg" alt=""/></a> </div>
        <div class="col-md-8">
         <div class="inner-content clearfix">
             <h3><a href='park.php'>Chitral National park</a></h3>
        <?php include('../includes/post.php')?>
                                        
 <p class="description">
 Chitral Gol National Park is one of the National Parks of Pakistan. It is located in Chitral District in Khyber-Pakhtunkhwa province of Pakistan beside the Chitral River, at a distance of two hours drive from Chitral town. The park is also known as Chitral National Park...
      </p>
<a class='read-more pull-right ml-2 btn btn-info btn-sm' href='park.php'>read more >></a>
        <a class='read-more pull-right btn btn-warning btn-sm' href='index.php'>Book Tour!</a>
</div>
 </div>
    </div> 
        </div>
            </div>
<div class="post-container">
  <div class="post-content">
    <div class="row">
     <div class="col-md-4">
 <a class="post-img" href="fort.php"><img src="images/Chitral-Fort.jpg" alt=""/></a>
</div>
<div class="col-md-8">
<div class="inner-content clearfix">
     <!-- Chitral Fort -->
 <h3><a href='fort.php'>Chitral Fort || Shahi Qila </a></h3>

 <?php  include('../includes/post.php') ?>
                                       
    <p class="description">
    The Chitral Fort is a fortification in Chitral town, Khyber Pakhtunkhwa, Pakistan. The fort is situated on the banks of the Chitral River. The fort has a commanding position on the river and is believed to have been built in 1774 ...</p>
                                      
 <a class='read-more pull-right ml-2 btn btn-info btn-sm' href='fort.php'>read more >></a>
  <a class='read-more pull-right btn btn-warning btn-sm' href='index.php'>Book Tour!</a>

 </div>

 </div>

 </div> 
 </div>
</div><!-- /post-container -->
</div>
 <?php include 'sidebar.php'; ?>
          </div>
      </div>
  </div>
</section>
<?php

include('../includes/contact.php');
include('../includes/follow.php');
include('../includes/map.php');


include('../includes/footer.php');
?>
</body>
<?php
include('../includes/js.php');
?>
</html>