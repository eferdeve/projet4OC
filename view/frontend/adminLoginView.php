<?php $title = 'Connexion espace membre'; ?>
<?php ob_start(); ?>

<?php 
$_POST['identifiant'];
$_POST['mdp'];
?>


<div id="parallax_image">
    <div class="row h-50">
      <div class="col-md-12 align-self-center">
        <h1> Jean Forteroche </h1>
        <h2 class="text-center"  class="h1"> Connexion à votre espace membre </h2>

        <form action="index.php?action=login" method="post">
            <div class="form-group">
                <label for="email">Identifiant</label> 
                <input type="text" class="form-control" id="identifiant" name="identifiant" aria-describedby="emailHelp" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="mdp" name="mdp" placeholder="Mot de pass">
            </div>
            <button type="submit" name="valider" class="btn btn-primary">Se connecter</button>
        </form>
        <?php $erreur = ""; ?>

        
      </div>
    </div>
  </div>

<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>