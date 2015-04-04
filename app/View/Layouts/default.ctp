<!DOCTYPE html>
<html>
    <head>
        <title>Car Wash</title>
        <?php
        // Metas
        echo $this->Html->charset();
        echo $this->Html->meta('icon');
        echo $this->Html->meta(array("name" => "viewport", "content" => "initial-scale=1.0, width=device-width"));
        echo $this->fetch('meta');
        // CSS
        echo $this->Html->css('frontoffice');
        echo $this->fetch('css');
        echo $this->Html->css('http://fonts.googleapis.com/css?family=Spinnaker|Open+Sans:400,700,800,400italic,700italic');
        ?>
        <!--[if IE]>
        <?php echo $this->Html->script("ie.min"); ?>
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <![endif]-->
    </head>
    <body>
        <header role="banner" id="top">
            <address class="l-address">
                <div class="l-address__constrained">
                    <strong>Car Wash</strong> - 21 av d'Obernkirchen 72200 la Flèche  | 06 89 35 54 18 <a href="<?php echo Router::url(array("controller" => "pages", "action" => "contact")); ?>">Contactez-nous</a>
                </div>
            </address>
            <?php
            /* gestion classe du menu */
            $pages = $this->params["controller"] . $this->params["action"];
            if ($pages == "pageshome") {
                $menuClasse = "l-menu--absolute";
            } else {
                unset($menuClasse);
                $menuClasse = "";
            }
            ?>
            <nav role="navigation">
                <ul class="l-menu <?php echo $menuClasse ?>">
                    <li>
                        <a href="<?php echo Router::url(array("controller" => "pages", "action" => "display")); ?>" class="l-menu__item is-menu-active"><?php echo $this->Html->image("car-wash-accueil.png", array("alt" => "Car Wash")); ?></a>
                    </li>
                    <li>
                        <a href="#" class="l-menu__item l-menu__item--logo"><?php echo $this->Html->image("carwash.png", array("alt" => "Car Wash")); ?></a>
                    </li>
                    <li>
                        <a href="<?php echo Router::url(array("controller" => "pages", "action" => "nettoyage")); ?>" class="l-menu__item l-menu__item--highlight">Nos équipements</a>
                    </li>
                    <li>
                        <a href="<?php echo Router::url(array("controller" => "pages", "action" => "prestations")); ?>" class="l-menu__item l-menu__item--highlight">Nos prestations</a>
                    </li>
<!--                    <li>
                        <a href="<?php // echo Router::url(array("controller" => "pages", "action" => "services")); ?>#exterieur" class="l-menu__item l-menu__item--highlight">Nettoyage extérieur</a>
                    </li>-->
                    <li>
                        <a href="<?php echo Router::url(array("controller" => "pages", "action" => "boutique")); ?>" class="l-menu__item l-menu__item--highlight">Notre boutique</a>
                    </li>
                    <li>
                        <a href="<?php echo Router::url(array("controller" => "pages", "action" => "contact")); ?>" class="l-menu__item l-menu__item--highlight">Contactez nous</a>
                    </li>
                </ul>
            </nav>
        </header
    <main role="main">
        <?php echo $this->fetch("content"); ?>
    </main>
    <footer class="l-footer">
        <strong>Car Wash</strong> - 
        <ul class="l-footer__menu">
            <li class="l-footer__menu__item"><a href="#top">Retour en haut</a></li>
            <li class="l-footer__menu__item"><a href="<?php echo Router::url(array("controller" => "pages", "action" => "display")); ?>">Accueil</a></li>
            <li class="l-footer__menu__item"><a href="<?php echo Router::url(array("controller" => "pages", "action" => "contact")); ?>">Contact</a></li>
        </ul>
    </footer>
    <?php
    echo $this->Html->script("http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js");
    echo $this->fetch("script");
    ?>        
</body>
</html>
