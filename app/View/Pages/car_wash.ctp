<div class="l-constrained">

    <?php
    $this->Html->addCrumb('Car Wash', array('controller' => 'pages', 'action' => 'carWash'));
    echo $this->element("file_ariane");
    ?>

    <h1 class="l-title">Car Wash</h1>
    <div class="garage__slider">        
        <ul class="bxslider">
            <li>
                <div class="garage__slider__img">
                    <?php echo $this->Html->image('installation/installation2.jpg') ?>
                </div>    
                <div class="garage__slider__description">
                    <div class="garage__slider__description__content">
                        <h1 class="garage__slider__description__title"><span>équipements</span></h1>                    
                        <h1 class="garage__slider__description__subtitle">Nettoyeur de la mort</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor a urna id adipiscing. Cras a pretium massa, vel iaculis urna. Pellentesque mattis metus eu sagittis tincidunt.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="garage__slider__img">
                    <?php echo $this->Html->image('prestations/prestation1.JPG') ?>
                </div>    
                <div class="garage__slider__description">
                    <div class="garage__slider__description__content">
                        <h1 class="garage__slider__description__title"><span>Prestations</span></h1>                    
                        <h1 class="garage__slider__description__subtitle">Nettoyeur de la mort</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor a urna id adipiscing. Cras a pretium massa, vel iaculis urna. Pellentesque mattis metus eu sagittis tincidunt.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="garage__slider__img">
                    <?php echo $this->Html->image('boutique/boutique2.jpg') ?>
                </div>    
                <div class="garage__slider__description">
                    <div class="garage__slider__description__content">
                        <h1 class="garage__slider__description__title"><span>Boutique</span></h1>                    
                        <h1 class="garage__slider__description__subtitle">Pas cher mon frère</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor a urna id adipiscing. Cras a pretium massa, vel iaculis urna. Pellentesque mattis metus eu sagittis tincidunt.</p>
                    </div>
                </div>
            </li>
        </ul>        
        <div class="pager" id="bx-pager">
            <a data-slide-index="0" href=""><div class="img-block"><?php echo $this->Html->image('installation/installation2.jpg') ?></div></a>            
            <a data-slide-index="1" href=""><div class="img-block"><?php echo $this->Html->image('prestations/prestation1.JPG') ?></div></a>
            <a data-slide-index="2" href=""><div class="img-block"><?php echo $this->Html->image('boutique/boutique2.jpg') ?></div></a>
        </div>
    </div>
<!--    <section class="garage">

        <article class="garage__column2">
            <h1 class="l-title l-title--small">Histoire de la station</h1>
            <p class="garage__description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor a urna id adipiscing. Cras a pretium massa, vel iaculis urna. Pellentesque mattis metus eu sagittis tincidunt. Pellentesque euismod purus nec augue ornare aliquam. Praesent viverra nibh urna, in rhoncus nisi laoreet id. Vivamus volutpat, turpis eget gravida tristique, dui arcu tristique tellus, et fringilla arcu arcu a ante. Etiam sagittis ac velit eget venenatis.
            </p>
        </article>
        <article class="garage__column2">
            <h1 class="l-title l-title--small">Notre philosophie</h1>
            <p class="garage__description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor a urna id adipiscing. Cras a pretium massa, vel iaculis urna. Pellentesque mattis metus eu sagittis tincidunt. Pellentesque euismod purus nec augue ornare aliquam. Praesent viverra nibh urna, in rhoncus nisi laoreet id. Vivamus volutpat, turpis eget gravida tristique, dui arcu tristique tellus, et fringilla arcu arcu a ante. Etiam sagittis ac velit eget venenatis.
            </p>
        </article>

    </section>-->

</div>
<?php echo $this->Html->script("jquery.bxslider.min.js", array("inline" => false)); ?>
<?php echo $this->Html->scriptStart(array("inline" => false)); ?>
$(document).ready(function() {
$(".bxslider").bxSlider({
auto: true,
speed: 1200,
responsive: true,
pagerCustom: '#bx-pager'
});
});
<?php echo $this->Html->scriptEnd(); ?>