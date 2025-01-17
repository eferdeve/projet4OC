<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Espace administrateur</title>

  <!-- Custom fonts for this template-->
  <link href="vendors/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="vendors/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Espace administrateur</h1>
                  </div>
                  <form action="index.php?action=login" method="post" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="identifiant" id="identifiant" placeholder="Identifiant">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="mdp" name="mdp" placeholder="Mot de passe">
                    </div>
                    <button type="submit" name="valider" class="btn btn-primary btn-user btn-block">Se connecter</button>
                    <hr>
                  </form>
                  <hr>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendors/vendor/jquery/jquery.min.js"></script>
  <script src="vendors/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendors/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="vendors/js/sb-admin-2.min.js"></script>

</body>

</html>