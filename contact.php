<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Energym</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Dosis:400,600,700|Poppins:400,600,700&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <!-- debut entete -->
  <?php include_once ('/models/entete.php')  ?>
    <!-- fin entete -->
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="container">
        <div class="custom_nav2">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex  flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav  ">
                  <li class="nav-item ">
                    <a class="nav-link" href="index.html">Acceuil <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="a propos.php">A propos </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="formation.php">Formation </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="contact.php">Contactez-Nous</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Entrez votre Contact
          </span>
        </h2>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <div class="col-md-6 ">
          <form id="contact"action="Controlleurs/envoyer_message.php"method="POST">
							<div class="form-group">
								<label for="nomcomplet">Nom complet</label>
								<input name="nomcomplet" type="text" class="form-control" id="nomcomplet">
							</div>
							<div class="form-group">
								<label for="Email">Email</label>
								<input name="email" type="text" class="form-control" id="email">
							</div>
							<div class="form-group">
								<label for="message"></label>
								<textarea name="messages" id="message" cols="30" rows="10" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn btn-special" value="Envoyez Message">
							</div>
						</form>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map-responsive">
                <iframe
                  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                  width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%"
                  allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- info section -->

  <section class="info_section layout_padding2-top">
    <div class="container">
      <div class="info_form">
        <h4>
        Notre bulletin
        </h4>
        <form action="">
          <input type="text" placeholder="Entrer votre email">
          <div class="d-flex justify-content-end">
            <button>
              s'abonner
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h6>
            A porpos d'USAFOOT
          </h6>
          <p>
             L'USAFOOT dispose des dirigeants professionnels ayant des divers talents dans le domaine sportive
          </p>
        </div>
        <div class="col-md-2 offset-md-1">
          <h6>
            Menus
          </h6>
          <ul>
            <li class=" active">
              <a class="" href="index.php">Acceuil <span class="sr-only">(current)</span></a>
            </li>
            <li class="">
              <a class="" href="a propos.php">A propos </a>
            </li>
            <li class="">
              <a class="" href="Formation.php">Formation </a>
            </li>
            <li class="">
              <a class="" href="#contactSection">Contacter-Nous</a>
            </li>
            <li class="">
              <a class="" href="#"></a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
          Quelques liens
          </h6>
          <ul>
            <li>
              <a href="">
                lien 1
              </a>
            </li>
            <li>
              <a href="">
                lien 2
              </a>
            </li>
            <li>
              <a href="">
                lien 3
              </a>
            </li>
            <li>
              <a href="">
                T
              </a>
            </li>
            <li>
              <a href="">
                T
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Contacter-Nous
          </h6>
          <div class="info_link-box">
            <a href="">
              <img src="images/location-white.png" alt="">
              <span> IFANGNI/BANIGBE-LOKOSSA</span>
            </a>
            <a href="">
              <img src="images/call-white.png" alt="">
              <span>+229 97 47 17 61</span>
            </a>
            <a href="">
              <img src="images/mail-white.png" alt="">
              <span> ussafootifangni@gmail.com</span>
            </a>
          </div>
          <div class="info_social">
            <div>
              <a href="">
                <img src="images/facebook-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/twitter-logo-button.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
            <div>
              <a href="">
                <img src="images/instagram.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


   <!-- debut pied_de_page -->
   <?php include_once ('../models/pied_de_page.php')  ?>
    <!-- fin pied_de_page   -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
</body>

</html>