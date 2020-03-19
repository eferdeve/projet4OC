<?php $title = 'Liste des chapitres'; ?>

<?php ob_start(); ?>

<h1>Vos chapitres</h1>

<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Voici la liste complète des chapitres que vous avez écris du plus récent au plus ancien</h6>
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
      <?php for ($i = 0; $i < count($posts); $i++): ?>
        <tr>
          <td><?= $posts[$i]['title'] ?></td>
          <td><?= substr(nl2br($posts[$i]['content']), 0, 100) ?> [...]</td>
          <td><?= $posts[$i]['creation_date_fr'] ?></td>
          <td><a href="index.php?action=editpost&id=<?= $posts[$i]['id'] ?>" class="btn btn-warning">Modifier</a> 

          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletepost<?= $posts[$i]['id'] ?>">
            Supprimer le chapitre
          </button>

          <!-- Modal -->
          <div class="modal fade" id="deletepost<?= $posts[$i]['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                 <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Vous êtes sûr(e) ?</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                   </button>
                </div>
                <div class="modal-body">
                  Ce chapitre sera supprimé et n'apparaitre plus sur le site
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                  <a href="index.php?action=deletepost&id=<?= $posts[$i]['id'] ?>" class="btn btn-danger">Supprimer ce chapitre</a>
                </div>
              </div>
            </div>
          </div>

          </td>                   
        </tr> 
      <?php endfor; ?>     
      </tbody>
    </table>
  </div>
  </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php')?>
