<?php $images = image::getImagesbySpace($space->getID()); ?>
<section class="container" id="view-listing-head">
    <div class="main-pic animated fadeIn delay-1s">
        <img class="img-raised rounded img-fluid" src="<?php echo $images[0]->getlocation(); ?>" alt="">
    </div>
    <div class="animated fadeIn" id="listing-details">
        <h2><?php echo $space->getshort_desc(); ?></h2>
        <p><span style="font-weight: 400;">Region :</span> <?php echo $space->getregion(); ?> Region</p>
        <p><span style="font-weight: 400;">District :</span> <?php echo $space->getdistrict(); ?> </p>
        <p><span style="font-weight: 400;">Price :</span> Ghc <?php echo $space->getprice(); ?> &#9679 <?php echo $space->getnegotiable(); ?></p>
        <p><?php echo $space->getdescription(); ?>
        </p>
    </div>
</section>


<div style="margin-top: 50px;" class="container">
    <h4>Click on the other pictures of the listing to view them</h4>
</div>


<div style="padding:0 20% 0 20%" class="card-column animated fadeIn delay-1s" id="other-pics">
    <?php foreach ($images as $val) {?>
    <div class="card">
        <img class="img-raised rounded img-fluid" src="<?php echo $val->getthumbnail(); ?>" alt="" data-toggle="modal"
             data-target=".other-pic" data-url="<?php echo $val->getlocation(); ?>" onmouseover="document.getElementById('mainPrev').src = this.dataset.url" onclick="document.getElementById('prevModal').src = this.dataset.url">
    </div>
   <?php } ?>
</div>

<!--MODALS-->
<div class="modal fade other-pic" tabindex="-1" role="dialog" aria-labelledby="other-pic" style="display: none;"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="other-pic-1">4 bedroom house</h3>
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
$url = (image::getUserImage($efiewura->getID()));
$url = (is_object($url))? $url->getlocation():'...';?>
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
                        <p><?php echo $efiewura->getname(); ?></p>
                        <p><?php echo $efiewura->getemail(); ?></p>
                        <p><?php echo $efiewura->getnumber(); ?></p>
                    </div>
                </div>
            <?php }else{
                echo 'Invalid Listing!!, Sorry.';
            } ?>
            </div>
        </div>
    </div>
</section>