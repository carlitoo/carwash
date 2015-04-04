<article class="intro">
    <ul class="intro__figure">
        <li><?php echo $this->Html->image('intro/carwash.jpg') ?></li>
        <li><?php echo $this->Html->image('intro/carwash2.jpg') ?></li>
    </ul>
    <div class="l-constrained">
        <h1 class="intro__title">Le nettoyage de qualité professionnelle </h1>
        <p class="intro__content">
            - un portique de lavage avec <strong>brosses anti-rayure, </strong><br>
            - une passerelle pour le lavage des véhicules utilitaires et camping-cars<br>
            - Boutique de produits d'entretien (de qualité professionnelle)<br>
        </p>
        <p class="intro__content">
            - des prestations sur place pour <strong> particuliers et professionnels </strong>:<br>
            - <strong> nettoyage </strong> intérieur et extérieur de véhicule </strong><br>
            - <strong> rénovation des sièges en cuir</strong><br>
            - <strong> rénovation des phares</strong><br>
        </p>
    </div>
</article>
<section class="cars">
    <div class="cars__column3">
        <h1 class="l-subtitle">Nos équipements</h1>

        <a class="cars__column__container" href="<?php echo Router::url(array("controller" => "pages", "action" => "nettoyage")); ?>" title="">

            <div class="cars__figure">
                <?php echo $this->Html->image('installation/installation1.jpg') ?>
                <?php echo $this->Html->image('installation/installation2.jpg') ?>
            </div>
        </a>
    </div>
    <div class="cars__column3">
        <h1 class="l-subtitle">Nos prestations</h1>
        <a class="cars__column__container" href="<?php echo Router::url(array("controller" => "pages", "action" => "prestations")); ?>" title="">

            <div class="cars__figure">
                <?php // echo $this->Html->image('prestations/prestation1.JPG') ?>
                <?php echo $this->Html->image('prestations/prestation2.JPG') ?>
            </div>
        </a>
    </div>
    <div class="cars__column3">
        <h1 class="l-subtitle">Notre boutique</h1>
        <a class="cars__column__container" href="<?php echo Router::url(array("controller" => "pages", "action" => "boutique")); ?>" title="">

            <div class="cars__figure">
                <?php echo $this->Html->image('boutique/boutique1.jpg') ?>
                <?php echo $this->Html->image('boutique/boutique2.jpg') ?>
            </div>
        </a>
    </div>
</section>
<!--<section class="services">
    <div class="services__column2">
        <h1 class="l-subtitle l-subtitle--poids-lourds">Nettoyage extérieur et intérieur</h1>
        <div class="services__container">
            <div class="services__content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor a urna id adipiscing. Cras a pretium massa, vel iaculis urna. Pellentesque mattis metus eu sagittis tincidunt
                <b class="services__link">
                    <a href="<?php // echo Router::url(array("controller" => "pages", "action" => "services")); ?>" class="l-button">Consulter nos services</a>
                </b>
            </div>                        
        </div>
    </div>
    <form class="services__column2" method="post" action="#">
        <h1 class="l-subtitle l-subtitle--info">Ventes de produits professionnels</h1>
        <div class="services__container services__content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor a urna id adipiscing. Cras a pretium massa, vel iaculis urna. Pellentesque mattis metus eu sagittis tincidunt
            <b class="services__link">
                <a href="<?php // echo Router::url(array("controller" => "pages", "action" => "boutique")); ?>" class="l-button">Consulter nos produits</a>
            </b>
        </div>
    </form>
</section>-->
<?php echo $this->Html->script("jquery.bxslider.min.js", array("inline" => false)); ?>
<?php echo $this->Html->scriptStart(array("inline" => false)); ?>
$(document).ready(function() {
$(".intro__figure").bxSlider({
mode: "fade",
pager: false,
controls: false,
auto: true
});
});
<?php echo $this->Html->scriptEnd(); ?>