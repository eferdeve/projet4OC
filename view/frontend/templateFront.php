<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> <?= $title ?> </title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Bootstrap Core CSS -->
  <link href="vendorsFront/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="vendorsFront/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendorsFront/css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="vendorsFront/css/style.css" rel="stylesheet">
  <link href="vendorsFront/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
        <a class="navbar-brand" href="index.php">
          <h1>JEAN FORTEROCHE</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Accueil</a></li>
          <li><a href="index.php#about">Biographie</a></li>
          <li><a href="index.php#service">Dernières publications</a></li>
          <li class="active"><a href="index.php?action=listPosts">Chapitres</a></li>
          <li><a href="index.php#contact">Contact</a></li>

          <?php if (!$_SESSION['admin']): ?>
            <li><a href="index.php?action=login">Connexion</a></li> 
          <?php else :?>
            <li><a href="index.php?action=sessionActive">Tableau de bord (connecté)</a></li> 
          <?php endif; ?>
          
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Section: intro -->
  <section id="intro" class="intro">

    <div class="slogan">
      <h2><?= $title ?></h2> <!-- title de la page en php -->
      <h4>COMMENCER MA LECTURE</h4>
    </div>
    <div class="page-scroll">
      <a href="#pagecontent" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
    </div>
  </section>
  <!-- /Section: intro -->

  <!-- Section: pagecontent -->

  <section id="pagecontent">

  <div class="container">
     <button type="button" id="night" class="btn btn-light">Passer en Mode nuit</button>
     <button type="button" id="light" class="btn btn-light">Passer en Mode jour</button>
  </div>
  
<!-- ob_get_start -->
<?= $content ?>
<!-- ob_get_ -->






  </section>

  <!-- /Section: pagecontent -->


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="wow shake" data-wow-delay="0.4s">
            <div class="page-scroll marginbot-30">
              <a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
            </div>
          </div>
          <p>&copy;Jean Forteroche. Tout droits réservés.</p>
          <div class="credits">
            Site étudiant par Enzo Ferres
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="nightmode.js"></script>
  <!-- Core JavaScript Files -->
  <script src="vendorsFront/js/jquery.min.js"></script>
  <script src="vendorsFront/js/bootstrap.min.js"></script>
  <script src="vendorsFront/js/jquery.easing.min.js"></script>
  <script src="vendorsFront/js/jquery.scrollTo.js"></script>
  <script src="vendorsFront/js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="vendorsFront/js/custom.js"></script>
  <script src="vendorsFront/contactform/contactform.js"></script>
  

</body>

</html>
