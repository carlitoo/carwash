<div class="l-constrained">

    <?php
    $this->Html->addCrumb('Boutique', array('controller' => 'pages', 'action' => 'boutique'));
    echo $this->element("file_ariane");
    ?>

    <h1 class="l-title">Notre Boutique</h1>
    <p class="intro__content">
        Un accueil chaleureux et des conseils personnalisés vous y attend sur l'environnement 
        de soins aux véhicules pour pouvoir le bichonner.
    </p>

    <div class="poids-lourds">
        <section id="exterieur" class="poids-lourds__left">
            <h1 class="l-title l-title--small">Nos produits</h1>
            <article class="garage__description">
                <p class="poids-lourds__content">
                Une large gamme de produits KENOTEK et ABAX s'offre à vous pour l'entretien
                complet de votre véhicule.
                </p>
                <h4>Produit d'entretien intérieur :</h4>
                <p>
                    Nettoyant universel ABAX<br>
                    Néoplast ABAX<br>
                    Interior cleaner KENOTEK<br>
                    Leather cream KENOTEK<br>
                    Showroom shine KENOTEK<br>
                    Vinyl & leather conditioner KENOTEK<br>
                    Parfums d'ambiance VAPOLUX<br>
                    Fashion car<br>
                    Arbres magiques<br>                    
                </p>
                <h4>Produit d'entretien extérieur :</h4>
                <p>
                    Glass cleaner KENOTEK<br>
                    Wheel cleaner KENOTEK<br>
                    Net'jantes ABAX<br>
                    Chiffon micro-fibre<br>
                    Chiffon micro-fibre polish<br>                    
                </p>
            </article>
        </section>
        <section class="poids-lourds__right">          
            <article class="poids-lourds__right__temoignage">
                <p class="poids-lourds__content">
                    <strong></strong><br>
                <div class="poids-lourds__right__img">
                    <?php echo $this->Html->image('boutique/boutique2.jpg') ?>
                </div>
                </p>
            </article>
        </section>        
    </div>

</div>