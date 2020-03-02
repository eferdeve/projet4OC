<?php $title = 'Liste des chapitres'; ?>

<?php ob_start(); ?>

<h1>Vos chapitres</h1>

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
      <?php for ($i = 0; $i < count($posts); $i++): ?>
        <tr>
          <td><?= htmlspecialchars($posts[$i]['title']) ?></td>
          <td><?= nl2br(htmlspecialchars($posts[$i]['content'])) ?></td>
          <td><?= $posts[$i]['creation_date_fr'] ?></td>
          <td><a href="index.php?action=editpost&id=<?= $posts[$i]['id'] ?>" class="btn btn-warning">Modifier</a> 
          <a href="index.php?action=deletepost&id=<?= $posts[$i]['id'] ?>" class="btn btn-danger">Supprimer</a></td>                     
        </tr> 
      <?php endfor; ?>     
      </tbody>
    </table>
  </div>
  </div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php')?>
