<?php $title = 'Accueil'; ?>
<?php ob_start(); ?>

  <div id="parallax_image">
    <div class="row h-50">
      <div class="col-md-12 align-self-center">
        <h1> Jean Forteroche </h1>
        <h2 class="text-center"  class="h1"> Billet simple pour l'Alaska </h2>
        <p class="text-center" style="color: white">Le dernier roman en ligne</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div id="last-post">
      <p> Dernier chapitre sortie de "Billet simple pour l'Alaska":  </p>
    </div>
   </div>

    <div id="parallax_image2">
    <div class="row h-50">
        <div class="col-md-12 align-self-center">
          <h1> Jean Forteroche </h1>
          <h2 class="text-center"> Découvrez la lecture moderne d'un roman au fur et à mesure de sa sortie, pour être sûre de ne rpater aucune miette</h2>
        </div>
      </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>