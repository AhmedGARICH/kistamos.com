
<?php

if(isset($_POST['submit'])){
    $to = $_POST['email']; // this is your Email address
   // $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['nom'];
    $subject =  $_POST['Sujet'];
    $message =  " Message de : " . $first_name . " " .  "\n\n" .$_POST['message'];

    $headers = "From:" . $_POST['email']; ;
    mail($to,$subject,$message,$headers);

   header('Location: contact.php'); 
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>KISTAMOS Maroc  | Nous contacter</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

  <!-- PLUGINS CSS STYLE -->
  <link rel="icon" href="images/5000718_application_online_logo_k_kik_icon.png" type="image/gif">
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="plugins/aos/aos.css">

  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


<nav class="navbar main-nav navbar-expand-lg px-2 px-sm-0 py-2 py-lg-0">
  <div class="container">
    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="ti-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown @@home">
          <a class="nav-link " href="index.php" >Accueil

          </a>
          <!-- Dropdown list -->
        
        </li>
        <li class="nav-item dropdown @@pages">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Pages
            <span><i class="ti-angle-down"></i></span>
          </a>
          <!-- Dropdown list -->
          <ul class="dropdown-menu">
          <li><a class="dropdown-item @@career" href="career.php">Notre histoire</a></li>
            <li><a class="dropdown-item @@blogSingle" href="blog-single.php">Blog Single</a></li>
            <li><a class="dropdown-item @@faq" href="FAQ.php">FAQ</a></li>
			<li><a class="dropdown-item @@team" href="about.php">À propos</a></li>

            
          </ul>
        </li>
        <li class="nav-item @@about">
          <a class="nav-link" href="about.php">À propos</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--================================
=            Page Title            =
=================================-->

<section class="section page-title">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 m-auto">
				<!-- Page Title -->
				<h1>Nous contacter</h1>
				<!-- Page Description -->
				<p>Nous sommes là pour vous aider et répondre à toutes vos questions. Nous avons hâte de vous entendre.</p>
			</div>
		</div>
	</div>
</section>

<!--====  End of Page Title  ====-->


<!--=====================================
=            Address and Map            =
======================================-->
<section class="address">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 align-self-center">
				<div class="block">
					<div class="address-block text-center mb-5">
						<div class="icon">
							<i class="ti-mobile"></i>
						</div>
						<div class="details">
							<h3>(+212) 6702-53057  (Tél)</h3>
							<h3>(+212) 5202-10047 (Fax)</h3>
						</div>
					</div>
					<div class="address-block text-center">
						<div class="icon">
							<i class="ti-map-alt"></i>
						</div>
						<div class="details">
							<h3>LOT. HAKAM 1, RUE 15 N°15 BIS, <br> QUARTIER: AÎN BORJA </h3>
							<h3> 20350 - CASABLANCA – MAROC</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 mt-5 mt-lg-0">
				<div class="mb-5 text-center">
					<!-- Google Map -->
          <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=33.584121385406405, -7.573274843557777&amp;t=p&amp;z=19&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fnfgo.com/">Friday Night Funkin Mods</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Address and Map  ====-->
<section class="contact-form section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="mb-5 text-center">Envoyez-nous un mail</h2>
			</div>
			<div class="col-12">
				<form action="contact.php" method="post">
					<div class="row">
						<!-- Name -->
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="text" name="nom" placeholder="Nom et prenom" required>
						</div>
						<!-- Email -->
						<div class="col-md-6 mb-2">
							<input class="form-control main" type="email" name="email" placeholder="Votre adresse email" required>
						</div>
						<!-- subject -->
						<div class="col-md-12 mb-2">
							<input class="form-control main" type="text" name="Sujet" placeholder="Sujet" required>
						</div>
						<!-- Message -->
						<div class="col-md-12 mb-2">
							<textarea class="form-control main" name="message" name="message" rows="10" placeholder="Votre message"></textarea>
						</div>
						<!-- Submit Button -->
						<div class="col-12 text-right">
            <button type="submit" name="submit" class="btn btn-main-md">Envoyez</button>

							
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--============================
=            Footer            =
=============================-->
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 m-md-auto align-self-center">
          <div class="block">
            <a href="index.php"><img src="images/logo-alt.png" alt="footer-logo"></a>
            <!-- Social Site Icons -->
            <ul class="social-icon list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Kistamos-603992119700788"><i class="ti-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/company/kistamos/about/"><i class="ti-linkedin "></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/channel/UCbDdqQ_HX2IeNT65clG2TyQ"><i class="ti-youtube"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Product</h6>
            <!-- links -->
            <ul>
              <li><a href="team.php">Teams</a></li>
              <li><a href="blog.php">Blogs</a></li>
              <li><a href="FAQ.php">FAQs</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Resources</h6>
            <!-- links -->
            <ul>
              <li><a href="sign-up.php">Singup</a></li>
              <li><a href="sign-in.php">Login</a></li>
              <li><a href="blog.php">Blog</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="career.php">Career</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="team.php">Investor</a></li>
              <li><a href="privacy.php">Terms</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 mt-5 mt-lg-0">
          <div class="block-2">
            <!-- heading -->
            <h6>Company</h6>
            <!-- links -->
            <ul>
              <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="team.php">Team</a></li>
              <li><a href="privacy-policy.php">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center bg-dark py-4">
    <small class="text-secondary">KISTAMOS Maroc &copy; <script>document.write(new Date().getFullYear())</script>.  Developed by <a href="https://www.facebook.com/Ahmed.Garich14">GARICH AHMED</a></small class="text-secondary">
  </div>
</footer>


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>

  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="plugins/aos/aos.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <script src="js/script.js"></script>
</body>

</html>
