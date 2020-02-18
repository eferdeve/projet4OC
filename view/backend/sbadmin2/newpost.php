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

<h1>Nouveau chapitre</h1>

<form action="index.php?action=sendpost" method="post">
    <h3>Comment s'appellera ce chapitre ?</h3>
    <input type="text" name="title" class="input-group-text" id="inputGroup-sizing-lg"></input>

    <h3>Quelle en sera son histoire ?</h3>
    <textarea name ="content" id="mytextarea">Contenu du chapitre ici</textarea>
    <button type="submit" >Envoyez</button>
</form>



<?php $content = ob_get_clean(); ?>
<?php require('template.php')?>
