<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Supoort old browsers-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Titlos -->
    <title>Tzamantzas Trans</title>

    <!-- Main CSS File -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">

    <!-- Custom CSS Font-awsome,Goggle -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope" type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=M_PLUS_Rounded_1c" type='text/css'/>
    <link href='https://fonts.googleapis.com/css?family=Open Sans Condensed:300' rel='stylesheet'>

    <!-- Main Logo Icon -->
    <link rel="shortcut icon" type="image/jpg" href="img//Logos/logo-white_07_single.png"/>

     <!-- Custom Animations -->
     <link rel="stylesheet" href="css/animate.css">
     <!-- Ενα Script ισως να μπει στο τελος -->
     <script src="https://kit.fontawesome.com/b8f80a7407.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- HEADER -->
    <header id="header">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  navbar-dark fixed-top">
          <a class="navbar-brand" href="#"><img src="img/Logos/logo-nav_04-white-full.png" class="logo-responsive" href="#" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item active">
                <a class="nav-link mycolor_navlink mytext_navlink" href="BS-index.html">Αρχική<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mytext_navlink " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Υπηρεσίες
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item mytext_navlink" href="BS-customs.html">Εκτελωνισμοί</a>
                  <a class="dropdown-item mytext_navlink" href="BS-insurance.html">Ασφαλίσεις</a>
                  <a class="dropdown-item mytext_navlink" href="BS-logistics.html">Μεταφορές</a>
                  <!-- Dropdown Divider -->
                  <!--
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  -->
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link mycolor_navlink mytext_navlink" href="BS-links.html">Χρήσιμοι Σύνδεσμοι</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mycolor_navlink mytext_navlink active" href="BS-contact.html">Επικοινωνία</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mycolor_navlink mytext_navlink" href="BS-index_en.html"><img src="img/Navbar/background.png" class="" href="" alt="en"></a>
              </li>
              <!-- Disable list nav-item-->
              <!--
                <li class="nav-item">
                  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
              -->
            </ul>
            <!-- Search -->
            <!--
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            -->
        </div>
      </nav>
    </header>
  <body>

    <section id="slider">

        <img class="image" src="img/Contact/success_04.jpg" alt="slider-image">

    </section>

    <section id="cont_answer">
      <div class="container-fluid wrapper">
        <div class="row">
          <div class="col-lg-12 text-center">
              <?php
                  define ('SITELINK', 'BS-index.html');
                  $name = $_POST['onoma_01'];
                  $email = $_POST['email_01'];
                  $phone = $_POST['phone_01'];
                  $message = $_POST['msg_01'];
                  $formcontent="Αποστολέας: $name \nΤηλέφωνο: $phone \nΜήνυμα: $message";
                  $recipient = "asterpennas@gmail.com";
                  $subject = "Tzamantzas Site";
                  $mailheader = "From: $email \r\n";
                  mail($recipient, $subject, $formcontent, $mailheader) or die("<h3>Κάτι Πήγε λάθος. Παρακαλώ ελέγξτε την συνδεσή σας και ξαναπροσπαθήστε</h3>");
              ?>

                  <h2 class="main-heading"> <?php echo "Ευχαριστούμε!"?> </h2>
                  <p class="">Το μηνυμά σας στάλθηκε επιτυχώς. Σύντομα θα επικοινωνήσει μαζί σας ένας εκπρόσωπος της εταιρείας μας. </p>
                <!--  <h2 class="section-heading">--> <?php //echo "Thank you!"?> <!--</h2>-->
                  <!--<h3 class="section-subheading">Your message sent succesfull. As soon as poosible a representative of our company will contact you directly to serve you.</h3>-->

                  <a class="btn btn-xl animated bounceInUp service" alt="Αρχική" href="<?php echo SITELINK; ?>"><i class="fas fa-home fa-2x myicon_contans" alt="Αρχική"></i></a>

          </div>
        </div>
      </div>
    </section>
    <br>
    <br>



    <!--footer 02-->
    <footer class="page-footer font-small bg-mygrey ">

      <div class="bg-prim">
        <div class="container">

          <!-- Grid row-->
          <div class="row py-4 d-flex align-items-center">

            <!-- Grid column -->
            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
              <h6 class="mb-0">Ακολουθήστε μας στα Social Media</h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6 col-lg-7 text-center text-md-right">

              <!-- Facebook -->
              <a class="fb-ic" href="https://www.facebook.com/tzamantzas.gr/" target="_blank">
                <i class="fab fa-facebook mr-4 bounce_social fa-2x icon-footer"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic" href="https://www.instagram.com/tzamantzas.gr/" target="_blank">
                <i class="fab fa-instagram bounce_social fa-2x icon-footer"> </i>
              </a>


            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row-->

        </div>
      </div>

      <!-- Footer Links -->
      <div class="container text-center text-md-left mt-5 ">

        <!-- Grid row -->
        <div class="row mt-3">

          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

            <!-- Content -->
            <h6 class="font-weight-bold">Τζαμαντζάς Δημήτριος ΟΕ</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto hr-footer">
            <p>Εδώ θα βρείτε χρήσιμες πληροφορίες σχετικα με εμάς. Επίσης μπορείτε να επισκευθείτε ιστοσελίδες γύρω από τις εξελίξεις στον τομέα των εκτελωνισμών καθώς και να κατεβάσετε αρχεία τα οποία θα επιταχύνουν την διαδικασία της δουλειάς σας.</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="font-weight-bold">Αρχεία PDF</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto hr-footer">
            <p>
              <a class="mycolor_navlink" href="img/pdf/exousiodotisi.pdf" target=_blank >Εξουσιοδότηση Προς Εκτελωνιστή</a>
            </p>
            <p>
              <a class="mycolor_navlink" href="img/pdf/yp_dil.pdf" target=_blank >Υπεύθυνη Δήλωση Ασφάλιστρων</a>
            </p>
            <p>
              <a class="mycolor_navlink" href="img/pdf/car-tax.pdf" target="_blank">Εκτελωνισμός Οχημάτων</a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

            <!-- Links -->
            <h6 class="font-weight-bold">Χρήσιμοι Σύνδεσμοι</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto hr-footer">
            <p>
              <a class="mycolor_navlink" href="https://ec.europa.eu/taxation_customs/dds2/taric/taric_consultation.jsp?Lang=el" target=_blank >Διαβούλευση TARIC</a>
            </p>
            <p>
              <a class="mycolor_navlink" href="https://www.aade.gr/customs" target=_blank >Ηλεκτρονικές Συναλλαγές Icis-Net</a>
            </p>
            <p>
              <a class="mycolor_navlink" href="https://www.ebeth.gr/" target=_blank >ΕΒΕΘ</a>
            </p>
            <p>
              <a class="mycolor_navlink" href="https://www.sethess.gr/" target=_blank >Σύλλογος Εκτελωνιστών Θεσσαλονίκης</a>
            </p>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

            <!-- Links -->
            <h6 class="font-weight-bold">Επικοινωνία</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto hr-footer">
            <p class="text-left">
              <i class="fas fa-home mr-3"></i> Πολυτεχνείου 17Α, Θεσσαλονίκη, Ελλάδα,ΤΚ: 54626</p>
            <p class="text-left">
              <i class="fas fa-envelope mr-3"></i> <a class="mycolor_navlink" href="mailto:info@tzamantzas.gr">info@tzamantzas.gr</a></p>
            <p class="text-left">
              <i class="fas fa-phone mr-3"></i> <a class="mycolor_navlink" href="tel:+30 2310 524 011"> +30 2310 524 011</a>, <a class="mycolor_navlink" href="tel:+30 2310 530 385"> 2310 530 385</a></p>
            <p class="text-left">
              <i class="fas fa-print mr-3"></i> +30 2310 524011</p>
            <p class="text-left">
              <i class=" fas fa-mobile-alt mr-3"></i> <a class="mycolor_navlink" href="tel:+30 6949 515 826"> +30 6949 515 826</a></p>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2021
        <a href="#" class="mycolor_footlink">Tzamantzas</a>. All rights reserved.
      </div>
      <!-- Copyright -->

    </footer>



    <!-- Modal Start -->


    <!-- Sticky to Top-->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-chevron-up"></i></button>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Bootstrap alli version-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!--Google Map Script-->
    <script src="http://maps.googleapis.com/maps/api/js?extension=.js&output=embed"></script>
    <!--Back to top-->
    <script src="js/backtop_03.js"></script>
  </body>
</html>
