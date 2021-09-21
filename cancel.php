<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css">
	<script type="text/javascript" src="assets/js/lightbox-plus-jquery.min.js"></script>

    <title>Cancellation - Rangsharda Resort</title>
	
	
	 <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="assets/css/style1.css" rel="stylesheet">
<!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/booking.css">

	<link rel="stylesheet" href="assets/css/responsive.css">

	<link rel="stylesheet" href="assets/css/style.css">
	
	<!--Rooms-->
	
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	<!-- Rooms CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/tooplate-main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
	
	<!-- Additional Scripts -->
    <script src="assets/js/custom1.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
	
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">r<em>$</em></a>
                        <!-- ***** Logo End ***** -
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="index.php #features">About</a></li>
                            <li class="scroll-to-section"><a href="index.php #our-classes">Gallery</a></li>
                            <li class="scroll-to-section"><a href="index.php #schedule">Rooms</a></li>
							<li class="scroll-to-section"><a href="index.php #trainers">Facilities</a></li>
                            <li class="scroll-to-section"><a href="index.php #contact-us">Contact</a></li> 
                            <li class="main-button1"><a href="booking.php">BOOK NOW</a></li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/room-video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2>Cancella <em>tion</em></h2>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- Booking Start -->
        <div class="booking">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <!--<p>Cancel A Room</p>-->
                                <h2>Cancel A Room</h2>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="booking-form">
                            <form method="POST">
                            <?php 
                                $conn = mysqli_connect("localhost","root","","Rangsharda");
                                if(mysqli_connect_error())
                                {
                                echo mysqli_connect_errno();
                                die();
                                }
                                else if(isset($_POST['btn-search']))
                                {
                                    $bookid = $_POST['bookid'];
                                    $status = "cancelled";
                                    $query1 = "select * from customer_demo,booking_demo,room_book_map where customer_demo.cust_id=booking_demo.cust_id and room_book_map.book_id=booking_demo.book_id and booking_demo.book_id=$bookid ";
                                    $result1 = mysqli_query($conn,$query1);
                                    
                                    if(mysqli_num_rows($result1))
                                    {
                                        while($row1 = mysqli_fetch_array($result1))
                                        {
                                            $fname = $row1['cust_fname'];
                                        }
                                    }
                                    else
                                    {
                                        echo'<script>alert("Please enter the correct Booking Id")</script>';
                                    }
                                }
                                ?>


                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" name="bookid" class="form-control" placeholder="Booking Id" required="required" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-align-justify"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn custom-btn" name="btn-search" type="submit">Search</button>
                                </div>
                                <br>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $fname;  ?>" disabled />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" name="lname" class="form-control" placeholder="Last Name" disabled  />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control"  placeholder="Email" disabled  />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="far fa-envelope"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group">
                                        <input type="text" name="mobile" class="form-control" placeholder="Mobile" disabled  />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fas fa-mobile-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group date" id="date1" data-target-input="nearest">
                                        <input type="text" name='checkin' class="form-control datetimepicker-input" placeholder="Check-In Date" onfocus="(this.type='date')"data-target="#date" data-toggle="datetimepicker" disabled />
                                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="input-group date" id="date2" data-target-input="nearest">
                                        <input type="text" name='checkout' class="form-control datetimepicker-input" placeholder="Check-Out Date" onfocus="(this.type='date')"data-target="#date" data-toggle="datetimepicker" disabled />
                                        <div class="input-group-append" data-target="#date" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
								<div class="control-group">
                                    <div class="input-group">
                                        <select name="room" class="custom-select form-control" disabled >
                                            <option selected>Rooms</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fa fa-chevron-down"></i></div>
                                        </div>
                                    </div>
                                </div>
								<div class="control-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="reason" placeholder="Reason" />
                                        <div class="input-group-append">
                                            <div class="input-group-text"><i class="fas fa-align-justify"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button class="btn custom-btn" name="btn-cancel" type="submit">Cancel Booking</button>
                                </div>
                            </form>

                            


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->


          







	
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; 2021 Rangsharda Resort
                    
                    - Designed by <a rel="nofollow" href="https://templatemo.com" class="tm-text-link" target="_parent">RS Tech</a></p>
                    
                    <!-- You shall support us a little via PayPal to info@templatemo.com -->
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>