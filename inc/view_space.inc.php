<?php $images = image::getImagesbySpace($space->getID());?>
<section class="container" id="view-listing-head">
    <div class="main-pic animated fadeIn delay-1s">
        <img id="mainPrev" class="img-raised rounded img-fluid" src="<?php echo $images[0]->getlocation(); ?>" alt="">
    </div>
    <div class="animated fadeIn" id="listing-details" style="width: 100%;height: 100%;">
        <h2><?php echo $space->getshort_desc(); ?></h2>
        <p style="font-size: 1.1em;"><span style="font-weight: 400;">Region :</span> <?php echo $space->getregion(); ?> Region</p>
        <p style="font-size: 1.1em;"><span style="font-weight: 400;">District :</span> <?php echo $space->getdistrict(); ?> </p>
        <p style="font-size: 1.1em;"><span style="font-weight: 400;">Price :</span> Ghc <?php echo $space->getprice(); ?> &#9679 <?php echo $space->getnegotiable(); ?></p>
        <h3>Description</h3>
        <p style="font-size: 1.1em;"><?php echo $space->getdescription(); ?>
        </p>
    </div>
</section>


<div style="margin-top: 50px;" class="container">
    <h3>Click on the other pictures of the listing to view them</h3>
</div>

<section class="container animated fadeIn delay-1s" id="other-pics">
    <?php foreach ($images as $val) {?>
    <div class="other-pic-item">
        <img class="img-raised rounded img-fluid" src="<?php echo $val->getlocation(); ?>" alt="" data-toggle="modal"
             data-target=".other-pic" data-url="<?php echo $val->getlocation(); ?>" <?php // onmouseover="document.getElementById('mainPrev').src = this.dataset.url" ?> onclick="document.getElementById('prevModal').src = this.dataset.url">
    </div>
   <?php } ?>
</section>
<!--MODALS-->
<div class="modal fade other-pic" tabindex="-1" role="dialog" aria-labelledby="other-pic" style="display: none;"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="other-pic-1"><?php echo $space->getshort_desc(); ?></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div  class="modal-body">
                <img id="prevModal" class="img-fluid" src="" alt="">
            </div>
        </div>
    </div>
</div>
<!--MODALS END-->

<?php $efiewura = efiewura::getEfiewuraSpace($space_id);
$url = (!is_int($efiewura))? image::getUserImage($efiewura->getID()):0;
$url = (is_object($url))? ($url->getlocation()!=""||$url->getlocation()!=NULL? $url->getlocation():'https://res.cloudinary.com/dmvymb8nn/image/upload/t_media_lib_thumb/v1566009080/avatar-placeholder_v0ecjm.png'):'https://res.cloudinary.com/dmvymb8nn/image/upload/t_media_lib_thumb/v1566009080/avatar-placeholder_v0ecjm.png';?>
<section class="container" id="owners-details">
    <div class="row">
        <div style="margin-top: 80px; margin-bottom: 60px;" class="col-md-8 offset-md-2">
            <div style="border-top: solid var(--teal) 3px;" class="card">
                <h3 id="owner-head">Contact the host to book your room</h3>
                <?php if(!is_int($efiewura)){ ?>
                <div id="owners-details-card" class="card-body">
                    <img style="width: 120px; height: 120px;" src="<?php  echo $url; ?>" alt=""
                         class="img-raised rounded-circle img-fluid">
                    <div id="owners-details-card-text">
                        <p class="text-uppercase"><?php echo $efiewura->getname(); ?></p>
                        <p><?php echo $efiewura->getemail(); ?></p>
                        <p><?php echo $efiewura->getnumber(); ?></p>
                        <p><?php echo $efiewura->getaddress(); ?></p>
                    </div>
                </div>
            <?php }else{
                echo 'Invalid Listing!!, Sorry.';
            } ?>
            </div>
        </div>
    </div>
</section>