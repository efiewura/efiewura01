<?php $images = image::getImagesbySpace($card['id']);
		$img = (count($images)==0)? 0:$images[0]; ?>
<div class="card">
            <img class="card-img-top" src="<?php //echo (!is_object($img)&&$img==0)? '...':$img->getlocation(); ?>" alt="Card image cap">
            <div class="card-body">
	                <p><?php echo  regionName($card['region'])." Region &#9679 ".$card['city'];?></p>
	                <p>Ghc <?php echo  $card['price'];?> per year</p>
                <a href="<?php echo $dir ?>/space/<?php echo $card['id']; ?>" class="btn btn-primary">View Listing</a>
            </div>
        </div>