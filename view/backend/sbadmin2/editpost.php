<?php $title = 'Modifier un chapitre'; ?>

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

<form id="edit" action="index.php?action=updatepost&id=<?= $posts['id'] ?>" method="post">
    <h3>Titre du chapitre</h3>
    <input type="text" value="<?= htmlspecialchars($post['title']) ?>" name="title" class="input-group-text" id="inputGroup-sizing-lg"></input>

    <h3>Contenu du chapitre</h3>
    <textarea name="content" id="mytextarea"><?= $post['content']; ?></textarea>
    <button type="submit">Envoyez</button>
</form>



<?php $content = ob_get_clean(); ?>
<?php require('template.php')?>
