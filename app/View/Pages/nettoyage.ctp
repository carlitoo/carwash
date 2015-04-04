<div class="l-constrained">

    <?php
    $this->Html->addCrumb('Equipements', array('controller' => 'pages', 'action' => 'prestations'));
    echo $this->element("file_ariane");
    ?>

    <h1 class="l-title">Nos équipements</h1>
    <p class="intro__content">
        Notre centre Car Wash est un site aménagé spécialement pour le lavage de voiture auto, moto, véhicule utilitaires et camping-cars. Vous pouvez profiter d'un matériel toujours entretenu par la maintenance effectuée au quotidien afin de vous assurer un résultat optimal.
    </p>

    <div class="poids-lourds">
        <section id="exterieur" class="poids-lourds__left">
            <h1 class="l-title l-title--small">Lavage extérieur</h1>
            <article class="garage__description">
                <p class="poids-lourds__content">
                <div class="poids-lourds__left__img"><?php echo $this->Html->image('prestations/passerelle.JPG') ?></div>
                <h4>Quatre pistes hautes pressions *</h4>
                Le lavage haute pression/brosse douce avec eau chaude et une finition sans trace (munie d'un osmoseur) assure un résultat parfait. <br>
                La passerelle permet d'avoir une hauteur de travail d'environ 2,80m pour le nettoyage de votre véhicule utilitaire ou camping-car.
                </p>
            </article>
            <article class="garage__description">
                <p class="poids-lourds__content">
                <div class="poids-lourds__left__img"><?php echo $this->Html->image('installation/installation2.jpg') ?></div>
                <h4>Portique de lavage *</h4>
                Simple d'utilisation, le système de lavage automatique dit mixte entre haute pression et 
                brosses douces comprends cinq programmes disponibles. Efficace et respectueux des 
                carrosseries, il est équipé de brosses anti-rayure inclinables, de laves roues à 
                disques et d'un séchage supérieur avec suivie de profil + latéral.
                </p>
            </article>
        </section>
        <section class="poids-lourds__right">          
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
        </section>
        <section id="interieur" class="poids-lourds__left">
            <h1 class="l-title l-title--small">Lavage intérieur</h1>
            <article class="garage__description">
                <p class="poids-lourds__content">
                <div class="poids-lourds__left__img"><?php echo $this->Html->image('installation/installation1.jpg') ?></div>
                <h4>4 Aspirateurs *</h4>
                Les postes d'aspirations à turbine, d'une puissance de 2500 watts désincrustent 
                toutes les saletés, aucun gravier n'y résistera. <br> 
                L’abri vous permettra de circuler aisément autour de votre véhicule en cas de pluie. <br>
                Deux frappes tapie sont également à votre disposition pour expulser la poussière incrustée.                   
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
    <p>
        <em>* chaque appareils acceptent nos jetons Car Wash ou les pièces de 1€ et 2€.</em>
    </p>
</div>