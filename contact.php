<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="./assets/images/favicon.png"/>
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">

  <title>Register</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap1.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/owl.css">  
  <link rel="stylesheet" href="assets/css/about.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/contact.css">

</head>

<body class="page-contact"  page="contact">

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
   <!-- ***** Preloader End ***** -->
<header class="">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php"><img src="assets/images/Logo.jpg" style="width:40px"></a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">
      </span>

    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php" page="index">Projects</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="interior.html" page="interior">Projects</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="about.html" page="about" >About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" page="contact">Contact Us</a>
        </li>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="https://www.behance.net/RasasvadaArchitects">
            <i class="fa fa-behance" aria-hidden="true"></i> 
          </a>
        </li> 
      </ul>
    </div>
    </div>
  </nav>
</header>


  <div class="googlemaps">
    <iframe src="https://snazzymaps.com/embed/325284" width="100%" height="600px" style="border:none;"></iframe>
  </div>
  <div id="contactform">
    <div class="row">
      <div class="col1  left-sec">
        <h3><b>Contact Info</b></h3>
        <br>
        <div class="contact-form">
          <form id="contact" action="" method="post">
            <div class="section-item"> 
              <div class="col-md-3"><h5>Address:</h5> </div>
              <div class="col-md-9">D.No:11-13-295/5, Rd no: 7, Alkapuri, Hyderabad-500035 ,Telangana</div> 
            </div>

            <div class="section-item"> 
              <div class="col-md-3"><h5>Mobile: </h5></div>
              <div class="col-md-9"><a href="tel:+919866581043">+91 9866581043</a>, <a href="tel:+919985855959">+91 9985855959</a></div> 
            </div>

            <div class="section-item"> 
              <div class="col-md-3"><h5>Mails: </h5></div>
              <div class="col-md-9"><a href="mailto:rasasvadaarchitects@gmail.com">rasasvadaarchitects@gmail.com</a>, <a href="mailto:info@rasasvadaarchitects.com">info@rasasvadaarchitects.com</a></div> 
            </div>
              
            <div class="section-item icons-s">   
                <a href="https://www.behance.net/RasasvadaArchitects">
                  <i class="fa fa-behance" aria-hidden="true"></i></a>
                <!-- <a href="contact.php">
                  <i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="contact.php"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="contact.php"><i class="fa fa-twitter" aria-hidden="true"></i></a>   -->
            </div>
            
            <div class="col-lg-12  item" style="margin-top: 40px;"> 
              <button class="btn1 start-new-btn" type="button" id="start-new-project-btn" class="filled-button">Start New Project</button> 
            </div>
    </form>
        </div>
      </div>
      <div class="col2 right-sec">
        <h3><b>Get in touch</b></h3>
        <br>
        <div class="contact-form">
            <div class="row">
          <form id="contact-us">
              <div class="col-lg-12 col-md-12 col-sm-12 item"> 
                  <p> Name</p>
                  <input name="name" type="text" class="form-control" id="name" required=""> 
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12  item"> 
                  <p> Email</p>
                  <input name="email" type="text" class="form-control" id="email" required=""> 
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12  item"> 
                  <p> Phone Number</p>
                  <input name="phone" type="int" class="form-control" id="phone" required=""> 
              </div>
              <div class="col-lg-12  item"> 
                  <p>Subject</p>
                  <textarea name="subject" rows="6" class="form-control" id="subject" required=""></textarea> 
              </div>
              <div class="col-lg-12  item"> 
                  <button class="btn1" type="submit" id="form-submit" class="filled-button">Submit</button> 
              </div>
          </form>
            </div>
        </div>
      </div>
    </div>
   
  </div>
  </div>

  <?php include_once('includes/new-project-contact.php'); ?>


  <section class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="footer-content">
          <div>
            <p>© 2021 <b>Rasasvada</b>. All rights reserved.</p>
          </div>
          <div>
            <p> Designed and Developed by <b><a href="https://krackbot.com">Krackbot</a></b></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/isotope.js"></script>
  <script src="assets/js/accordions.js"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>

  <!-- Include the Google Maps API library - required for embedding maps -->
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  
  <script src="assets/js/contact.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
    integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>

  <script type="text/javascript">

    // The latitude and longitude of your business / place
    var position = [27.1959739, 78.02423269999997];

    function showGoogleMaps() {

      var latLng = new google.maps.LatLng(position[0], position[1]);

      var mapOptions = {
        zoom: 16, // initialize zoom level - the max value is 21
        streetViewControl: false, // hide the yellow Street View pegman
        scaleControl: true, // allow users to zoom the Google Map
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latLng
      };

      map = new google.maps.Map(document.getElementById('googlemaps'),
        mapOptions);

      // Show the default red marker at the location
      marker = new google.maps.Marker({
        position: latLng,
        map: map,
        draggable: false,
        animation: google.maps.Animation.DROP
      });
    }

    google.maps.event.addDomListener(window, 'load', showGoogleMaps);
  </script>

  <script>
    function openForm1() {
      document.getElementById("myForm1").style.display = "block";
    }

    function closeForm1() {
      document.getElementById("myForm1").style.display = "none";
    }
  </script>


</body>

</html>