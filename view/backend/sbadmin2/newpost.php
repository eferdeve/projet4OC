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
<form method="post">
    <textarea id="mytextarea">Hello, World!</textarea>
</form>



<?php $content = ob_get_clean(); ?>
<?php require('template.php')?>
