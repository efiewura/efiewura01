<div class="slide-item">
  <?php $img = image::getImagebySpace($val->getID());
  //$img = (count($images)==0)? 0:$images[0]; ?>
                <div class="item-image">
                    <img class="img-fluid" src="<?php echo (!is_object($img)&&$img==0)? '...':$img->getlocation(); ?>" alt="house">
    </div>
                <div class="item-content">
                    <div class="item-location"><?php echo $val->getdistrict().','.$val->getcity().' &#9679 '.$val->getregion(); ?></div>
                    <div class="item-name"><?php echo $val->getshort_desc(); ?></div>
                    <div class="item-price">Ghc <?php echo $val->getprice(); ?>  &#9679 <span class="negotiation-status"><?php echo $val->getnegotiable(); ?></span></div>
                    <a class="workspace-link" href="<?php echo $dir ?>/space/<?php echo $val->getID(); ?>">View Efie</a>

                </div>
</div>