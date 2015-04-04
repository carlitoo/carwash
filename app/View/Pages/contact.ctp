<div class="l-constrained">

    <?php
    $this->Html->addCrumb('Contact', array('controller' => 'pages', 'action' => 'contact'));
    echo $this->element("file_ariane");
    ?>

    <h1 class="l-title">Informations pratiques</h1>
    <p class="intro__content">
        Situé à La Flèche, à 45km d'Angers et du Mans.<br>
        Vous pouvez prendre rendez-vous par téléphone, mail ou sur place.
    </p>

    <section class="garage">

        <article class="garage__column2">
            <h1 class="l-title l-title--small">Nous trouver</h1>
            <div class="garage__description">
                <ul class="garage__description__adresse">
                    <li><strong>CAR WASH</strong></li>
                    <li>21 av d'Obernkirchen</li>
                    <li>
                        72200
                        La Flèche
                        <?php echo (!empty($informations['Information']['ville'])) ? $informations['Information']['ville'] : ""; ?>                   
                    </li>                    
                </ul>
                <ul class="garage__description__adresse">
                    <li>Téléphone : 06 89 35 54 18</li>                    
                    <li>Mail : <a class="l-link" href="mailto:carwash.lafleche72@yahoo.fr">carwash.lafleche72@yahoo.fr</a></li>
                    <li>Suivez nous sur facebook</li>
                </ul>
            </div>     
        </article>

        <article class="garage__column2">
            <h1 class="l-title l-title--small">horaires d'ouverture</h1>
            <div class="garage__description">
                <li>
                    24h/24  
                </li>
            </div> 
            <h1 class="l-title l-title--small">Permanence assurée</h1>
            <div class="garage__description">
                <li>
                    lundi : 14h - 17h
                </li>
                <li>
                    mardi au samedi : 9h - 18h
                </li>
                <li>
                    dimanche : 14h - 17h
                </li>
            </div>
        </article>

    </section>
    <section class="informations__map">

        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2685.156859205958!2d-0.05615959999999999!3d47.700792099999994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48081e9421c46b2f%3A0x589e9675feba5803!2s21+Avenue+d&#39;Obernkirchen%2C+72200+La+Fl%C3%A8che!5e0!3m2!1sfr!2sfr!4v1405354429237" width="100%" height="400" frameborder="0" style="border:0"></iframe>

    </section>

</div>