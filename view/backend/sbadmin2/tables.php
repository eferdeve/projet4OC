
<?php $title = 'Liste des commentaires'; ?>
    
<?php ob_start(); ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Liste des commentaires</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                      <td></td>
                      <td><a href="index.php?action=comdelet&id=<?= $comment['id'] ?>" class="btn btn-warning">Supprimer ce commentaire</a></td>
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