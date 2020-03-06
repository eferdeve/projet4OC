 <?php $title = 'Tableau de bord'; ?>


  <?php ob_start(); ?>

    <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Tableau de bord de <?php echo $_SESSION['admin']; ?></h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tâches à faire (bloc note)</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Commentaires signalés</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Approach -->
           <div class="card shadow mb-4">
             <div class="card-header py-3">
               <?php for ($i = 0; $i < 1; $i++): ?>
               <h6 class="m-0 font-weight-bold text-primary">Dernier Billet rédigé le <?= $posts[$i]['creation_date_fr'] ?></h6>
             </div>
             <div class="card-body">
             
               <h2><?= htmlspecialchars($posts[$i]['title']) ?></h2>
               <p class="mb-0"> <?= substr(nl2br($posts[$i]['content']), 0, 400) . '[...]' ?></p>
               <?php endfor; ?>
             </div>
           </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <?php $content = ob_get_clean(); ?>
     



<?php require 'template.php'; ?>
