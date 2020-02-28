<?php $title = 'Nouveau chapitre'; ?>

<?php ob_start(); ?>

<script>
    tinymce.init({
    selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_drawer: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>

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
                      <td><a href="#" class="btn btn-warning">Modifier</a> <a href="#" class="btn btn-danger">Supprimer</a></td>
                    </tr>      
                  </tbody>
                </table>
              </div>
            </div>

<form id="edit" action="index.php?action=" method="post">
    <h3>Titre du chapitre</h3>
    <input type="text" name="title" class="input-group-text" id="inputGroup-sizing-lg"></input>

    <h3>Contenu du chapitre</h3>
    <textarea name="content" id="mytextarea">Contenu du chapitre ici</textarea>
    <button type="submit">Envoyez</button>
</form>



<?php $content = ob_get_clean(); ?>
<?php require('template.php')?>
