<?php $title = 'Nouveau chapitre'; ?>

<?php ob_start(); ?>

<script>
      tinymce.init({
        selector: '#mytextarea',
        menu: {
            edit:{title: 'Edit', items: 'undo, redo, selectall'}
        }
      });
      
</script>

<h1>Nouveau chapitre</h1>
<form action="index.php?action=sendpost" method="post">
    <textarea name ="mytextarea" id="mytextarea">Hello, World!</textarea>
    <button type="submit" >Envoyez</button>
</form>



<?php $content = ob_get_clean(); ?>
<?php require('template.php')?>
