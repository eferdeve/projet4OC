<?php ob_start(); ?>
    <?php $title = htmlspecialchars($post['title']); ?>

    

    <div id="parallax_image2">
        <div class="row h-50">
            <div class="col-md-12 align-self-center">
            <h1>Chapitres</h1>
                <p><a href="index.php">Retour à l'accueil</a></p>
                <div class="news">
        <h3>
            <?= htmlspecialchars($post['title']) ?>
            <em>le <?= $post['creation_date_fr'] ?></em>
        </h3>
            </div>
        </div>
        </div>
        
        <p>
            <?= nl2br(htmlspecialchars($post['content'])) ?>
        </p>
    </div>

    <h2>Qu'avez-vous pensez de ce chapitre ?</h2>

    <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
        <div>
            <label for="author">Votre nom</label><br />
            <input type="text" id="author" name="author" />
        </div>
        <div>
            <label for="comment">Votre commentaire</label><br />
            <textarea id="comment" name="comment"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-outline-success">Valider</button>
        </div>
    </form>

    <h3> Autres commentaires </h3>

    <?php
    while ($comment = $comments->fetch())
    {
    ?>
        <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
        <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>

            <a href="index.php?action=comdelet&id=<?= $comment['id'] ?>" class="btn btn-warning">Signaler</a>
 
    <?php
    }
    
    ?> 

    <?php $content = ob_get_clean(); ?>

    <?php require 'templateFront.php'; ?>
