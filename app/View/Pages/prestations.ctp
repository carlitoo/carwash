<div class="l-constrained">

    <?php
    $this->Html->addCrumb('Prestations', array('controller' => 'pages', 'action' => 'prestations'));
    echo $this->element("file_ariane");
    ?>

    <h1 class="l-title">Prestations pour particulier et professionnels</h1>
    <p class="intro__content">
        Nous vous proposons notre savoir-faire technique pour le nettoyage et la rénovation de vos véhicules sur 
        simple rendez-vous du lundi au samedi pour un résultat haut de gamme. Contactez-nous ...<br><br>
        <a href="<?php echo Router::url(array("controller" => "pages", "action" => "contact")); ?>" class="l-button">Contactez-nous</a>

    </p>

    <div class="poids-lourds">
        <section id="exterieur" class="poids-lourds__left">
            <h1 class="l-title l-title--small">Nettoyage intérieur et extérieur</h1>
            <article class="garage__description">
                <p class="poids-lourds__content">
                <div class="poids-lourds__left__img"><?php echo $this->Html->image('prestations/prestation2.JPG') ?></div>                
                Nous vous proposons un nettoyage complet de votre véhicule en profondeur même dans les accès difficiles, 
                incluant le détachage de vos sièges, moquettes, conduits d'aération, intérieurs de porte et 
                carrosserie à partir de 35 € en fonction du type et de son état.
                </p>
            </article>
        </section>
<!--        <section class="poids-lourds__right">          
            <h1 class="l-title l-title--small"></h1>
            <article class="poids-lourds__right__temoignage">
                <p class="poids-lourds__content">
                    <strong></strong><br>
                <div class="poids-lourds__right__img">
                    Lavage<br>
                    Brosse savonneuse<br>
                    Rinçage<br>
                    Lustrage<br>
                </div>
                </p>
            </article>
        </section>-->
        
        <section id="interieur" class="poids-lourds__left">
            <h1 class="l-title l-title--small">Rénovation des sièges en cuir</h1>
            <article class="garage__description">
                <p class="poids-lourds__content">
                <div class="poids-lourds__left__img"><?php echo $this->Html->image('prestations/prestation2.JPG') ?></div>                
                En négligent l'entretien de vos sièges en cuir, la revente d'un véhicule d'occasion dont les sièges 
                en cuir sont dégradés est beaucoup plus longue et oblige souvent son propriétaire à revoir le prix 
                de vente à la baisse. Nous leurs redonnons de la couleur pour 50 € les cinq sièges.
                </p>
            </article>
        </section>
        
        <section id="interieur" class="poids-lourds__left">
            <h1 class="l-title l-title--small">Rénovation de phares</h1>
            <article class="garage__description">
                <p class="poids-lourds__content">
                <div class="poids-lourds__left__img"><?php echo $this->Html->image('prestations/phare1.JPG') ?></div>
                <div class="poids-lourds__left__img"><?php echo $this->Html->image('prestations/phare2.JPG') ?></div>
                Des optiques trop opaques nuisant à votre visibilité de nuit peuvent entrainer un refus au contrôle 
                technique. Au lieu de penser immédiatement au remplacement des vos phares en polycarbonate fort 
                coûteux, songez à  les restaurer. Nous les remettons en état pour 45 € la paire.
                </p>
            </article>
        </section>
<!--        <section class="poids-lourds__right">          
                <h1 class="l-title l-title--small">Tarifs</h1>
                <article class="poids-lourds__right__temoignage">
                    <p class="poids-lourds__content">
                        <strong></strong><br>
                            <div class="poids-lourds__right__img">
                                mettre les<br>
                                différents<br>
                                prix<br>
                            </div>
                    </p>
                </article>
        </section>-->
        
    </div>
</div>