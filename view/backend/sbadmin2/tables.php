
<?php $title = 'Liste des commentaires'; ?>
    
<?php ob_start(); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Liste des commentaires</h1>
          <p class="mb-4">Dans cette rubrique vous pouvez lire les commentaires laissés par vos lecteurs, et choisir de les conserver ou de les supprimer.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Voici la liste complète de tout les commentaires laissés par vos lecteur</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Pseudo</th>
                      <th>Commentaire</th>
                      <th>Date</th>
                      <th>Commentaire signalé</th>
                      <th>Supprimer commentaire ?</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    <?php
                    while ($comment = $comments->fetch())
                    {

                    ?>
                    <tr>
                      <td><?= htmlspecialchars($comment['author']) ?></td>
                      <td><?= nl2br(htmlspecialchars($comment['comment'])) ?></td>
                      <td><?= date('H:i:s d/m/Y', strtotime($comment['comment_date'])) ?></td>
                      <td><?= htmlspecialchars($comment['signalement']) ?></td>
                      <td>
                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                        Supprimer le commentaire
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Vous êtes sûre ?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Ce commentaire sera supprimé et n'apparaîtra plus sur votre site !
                           </div>
                           <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                             <a href="index.php?action=comdelet&id=<?= $comment['id'] ?>" class="btn btn-danger">Supprimer ce commentaire</a>
                          </div>
                         </div>
                       </div>
                      </div>
                      <a href="index.php?action=unwarning&id=<?= $comment['id'] ?>" class="btn btn-success">Retirer le signalement</a>

                      </td>
                    </tr>
                      <?php
                      }
                      ?> 
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $content = ob_get_clean(); ?>
      <?php require('template.php')?>