<?php ob_start(); ?>

<title> <?= $title="Chapitres" ?> </title>

<div class="home-section text-center">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown animated" data-wow-delay="0.4s" style="visibility: visible;-webkit-animation-delay: 0.4s; -moz-animation-delay: 0.4s; animation-delay: 0.4s;">
                        <div class="section-heading">
                            <h2>Chapitres disponibles</h2>
                            <i class="fa fa-2x fa-angle-down"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wow bounceInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                <div class="team boxed-grey">
                    <div class="inner">
                        <?php for ($i = 0; $i < count($posts); $i++): ?>
                            <h3>
                                <?= htmlspecialchars($posts[$i]['title']) ?>
                            </h3>
                            <h5>
                                <em>publié le <?= $posts[$i]['creation_date_fr'] ?></em>
                            </h5>
                            <p>
                                <em><a class="btn btn-primary" role="button" href="index.php?action=post&amp;id=<?= $posts[$i]['id'] ?>">Lire ce chapitre</a></em>
                            </p>
                        <?php endfor; ?>
                    </div>
                </div>
             </div>
        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('templateFront.php') ?>



