<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Accueil Jean Forteroche</title>

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
          <li class="active"><a href="#index.php">Accueil</a></li>
          <li><a href="#about">Biographie</a></li>
          <li><a href="#service">Dernières publications</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Liste des chapitres<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="index.php?action=post&amp;id=1">Chapitre 1</a></li>
              <li><a href="index.php?action=post&amp;id=2">Chapitre 2</a></li>
              <li><a href="index.php?action=post&amp;id=3">Chapitre 3</a></li>
              <li><a href="index.php?action=post&amp;id=4">Chapitre 4</a></li>
              <li><a href="index.php?action=post&amp;id=5">Chapitre 5</a></li>
            </ul>
            <li><a href="index.php?action=login">Connexion</a></li>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Section: intro -->
  <section id="intro" class="intro">

    <div class="slogan">
      <h2>BILLET SIMPLE POUR L'ALASKA</h2>
      <h4>UN ROMAN EN LIGNE INEDIT</h4>
    </div>
    <div class="page-scroll">
      <a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
    </div>
  </section>
  <!-- /Section: intro -->

  <!-- Section: bio -->
  <section id="about" class="home-section text-center">
    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Qui est Jean Forteroche ?</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <p>Jean Forteroche est un écrivain moderne née en 1986 à Rouen. Il a grandit dans le Nord de la France ayant comme père un fort et comme mère une roche. Son prénom est atypique et n'existe nul part ailleurs que sur sa carte d'identité. L'envie d'écrire lui apparait dés l'âge de 3 ans. En effet, étant surdoué à l'école, il arrivait déjà à éviter les traditionnelle fautes verbales qui innondent notre société tel que "Il faut que vous croivez" ou encore "Il faut qu'il voillent"... Ces erreurs étaient déjà corrigées dans sa petite tête à 3 ans. Il commenca donc par une Nouvelle parut en 1989 intitulé "Ma grandeur d'esprit est inutile" qui rencontra un succès sans pareil, puis se lança dans la conception d'un roman novateur tel que "Les erreurs sociales" qui compte 555 pages et dont la moyenne lu par ses lecteur ne dépassait pas les 12 pages...</p>

      <p>C'est beaucoup plus tard que, constatant le manque de motivation de ses lecteurs pour aller à la FNAC acheté son roman, il décida, dans un éclair de génie, de publier celui-ci sur internet afin que tous puissent en jouir de manière gratuite et illimité. Ce concepte fût un tabac et s'est répandu comme une famille de moustique dans une flaque d'eau stagnante en plein mois de Juillet à Saint-Tropez. "Un billet simple pour l'Alaska" (2020) est son plus gros bébé, il en eut l'idée après avoir constaté l'étendu des dégâts causés par l'homme sur la nature, qui lui donna l'envie de fuir la société des hommes et de s'installer dans un lieu vierge de presque toute activité humaine notoire, et il nous emmene avec lui à travers ce roman bourré de fantaisie et de paysages magnifiques qui ne demande qu'a être imaginés par ses lecteurs. </p>
    </div>
  </section>
  <!-- /Section: about -->


  <!-- Section: dernière publication -->
  <section id="service" class="home-section text-center bg-gray">

    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Dernières publications</h2>
                  <p>ListPostView.php</p>

                <i class="fa fa-2x fa-angle-down"></i>
                <?php for ($i = 0; $i < count($posts); $i++): ?>
                  <div>
                      <h3>
                          <?= htmlspecialchars($posts[$i]['title']) ?>
                          <em>le <?= $posts[$i]['creation_date_fr'] ?></em>
                      </h3>
        
                      <p>
                          <?= nl2br(htmlspecialchars($posts[$i]['content'])) ?>
                          <br />
                          <em><a class="btn btn-primary" role="button" href="index.php?action=post&amp;id=<?= $posts[$i]['id'] ?>">Lire ce chapitre</a></em>
                      </p>
                    </div>
                  <?php endfor; ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wow bounceInDown" data-wow-delay="0.8s">
      <div class="col-lg-8 col-lg-offset-2">

      

      </div>
    </div>
  </section>
  <!-- /Section: dernière publication -->




  <!-- Section: contact -->
  <section id="contact" class="home-section text-center">
    <div class="heading-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow bounceInDown" data-wow-delay="0.4s">
              <div class="section-heading">
                <h2>Contacter jean</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="boxed-grey">

            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form id="contact-form" action="" method="post" role="form" class="contactForm">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">
                                Nom</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Veuiller entrer au moins 4 charactères" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <label for="email">
                                Email</label>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Votre mail" data-rule="email" data-msg="Veuiller entrer une adresse mail valide" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="subject">
                                Sujet</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Veuiller entrer au moins 8 charactères" />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">
                                Message</label>
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Veuiller écrire quelque chose, sinon comment on vous répond ?" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Envoyer</button>
                </div>
              </div>
            </form>
          </div>
        </div>


				  <strong>Email</strong><br>
				  <a href="mailto:#">Jean@Forteroche.com</a>


          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /Section: contact -->

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
            <!--
              All the links in the footer should remain intact. 
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Squadfree
            -->
            Site étudiant par Enzo Ferres
          </div>
        </div>
      </div>
    </div>
  </footer>

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
