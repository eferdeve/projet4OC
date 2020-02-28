<?php $title = 'Nouveau chapitre'; ?>

<?php ob_start(); ?>

<h1>Modifier un chapitre existant</h1>

<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Voici la liste complète des chapitres que vous avez écris</h6>
</div>

<div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Titre</th>
                      <th>Contenu</th>
                      <th>Date</th>
                      <th>Que voulez vous faire ?</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td><a href="index.php?action=editpost" class="btn btn-warning">Modifier</a> <a href="#" class="btn btn-danger">Supprimer</a></td>
                    </tr>      
                  </tbody>
                </table>
              </div>
            </div>



<?php $content = ob_get_clean(); ?>
<?php require('template.php')?>