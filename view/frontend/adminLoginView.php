<?php $title = 'Connexion espace membre'; ?>
<?php ob_start(); ?>


<div id="parallax_image">
    <div class="row h-50">
      <div class="col-md-12 align-self-center">
        <h1> Jean Forteroche </h1>
        <h2 class="text-center"  class="h1"> Connexion à votre espace membre </h2>

        <form action="index.php?action=login" method="post">
            <div class="form-group">
                <label for="email">Adresse Email</label>
                <input type="email" class="form-control" id="mail" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="mdp" placeholder="Mot de pass">
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
        
      </div>
    </div>
  </div>

<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>