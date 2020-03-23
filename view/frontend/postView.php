<?php ob_start(); ?>
<?php $title = htmlspecialchars($post['title']); ?>

<div class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                        <div class="section-heading">
                            <h2><?= htmlspecialchars($post['title']) ?></h2>
                            <p><a href="index.php">Retour à l'accueil</a></p>
                            <p>
                                <a class="btn btn-primary" role="button" href="index.php?action=post&amp;id=<?= $post['id'] - 1 ?>">
                                    <- Chapitre précédent</a> <a class="btn btn-primary" role="button" href="index.php?action=post&amp;id=<?= $post['id'] + 1 ?>">Chapitre suivant ->
                                </a>
                            </p>
                            <i class="fa fa-2x fa-angle-down"></i>
                        </div>
                        <div class="team boxed-grey">
                            <p>
                                <?= nl2br($post['content']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Commentaires -->
<div class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                        <div class="section-heading">
                            <h2>Qu'avez-vous pensez de ce chapitre ?</h2>
                            <i class="fa fa-2x fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="team boxed-grey">
        <form action="index.php?action=addComment&amp;id=<?= $post['id'] ?>" method="post">
            <div>
                <label for="author">Votre nom</label><br />
                <input type="text" id="author" name="author" />
            </div>
            <div>
                <label for="comment">Votre commentaire</label><br />
                <textarea id="comment" name="comment" cols="50"></textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-success">Valider</button>
            </div>
        </form>
    </div>
</div>

<!-- Section Autres commentaires -->
<div class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                        <div class="section-heading">
                            <h2>Tous les avis sur ce chapitre</h2>
                            <i class="fa fa-2x fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
while ($comment = $comments->fetch()) {
?>
    <div class="container">
        <div class="team boxed-grey">
            <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['comment_date_fr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
            <a href="index.php?action=warning&id=<?= $comment['id'] ?>&postId=<?= $post['id'] ?>" class="btn btn-warning">Signaler</a>
        </div>
    </div>
<?php
}
?>

<?php $content = ob_get_clean(); ?>
<?php require 'templateFront.php'; ?>