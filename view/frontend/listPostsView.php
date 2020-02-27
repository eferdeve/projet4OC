<?php ob_start(); ?>

<h1>Jean Forteroche</h1>
<p>Derniers chapitres sorties :</p>

<?php for ($i = 0; $i < count($posts); $i++): ?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($posts[$i]['title']) ?>
            <em>le <?= $posts[$i]['creation_date_fr'] ?></em>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($posts[$i]['content'])) ?>
            <br />
            <em><a class="btn btn-primary" role="button" href="index.php?action=post&amp;id=<?= $posts[$i]['id'] ?>">Lire ce chapitre</a></em>
        </p>
    </div>
<?php endfor; ?>

<?php $content = ob_get_clean(); ?>

<?php require('templateFront.php') ?>



