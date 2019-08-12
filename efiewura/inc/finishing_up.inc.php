
<section class="container" id="owners-details">
    <div class="row">
        <div style="margin-top: 80px; margin-bottom: 60px;" class="col-md-8 ">
            <div style="border-top: solid var(--teal) 3px;" class="card">
                <h3 id="owner-head"><span class="text-uppercase">FInishing Up</span></h3>
                <div id="owners-details-card" class="card-body">
                    <?php $url = (image::getUserImage($efiewura->getID()))->getlocation() ?>
                    <img style="width: 120px; height: 120px;" src="<?php echo $url ?>" alt=""
                         class="img-raised rounded-circle img-fluid">
                    <div id="owners-details-card-text">
                        <p><?php echo $efiewura->getname(); ?></p>
                        <p><?php echo $efiewura->getemail(); ?></p>
                        <p><?php echo $efiewura->getnumber(); ?></p>
                        <p></p>
                    </div>
                    <div id="swrl" class="col-md-2">
                        <br>
                        <div class="spinner-grow text-dark"></div>
                        <div class="spinner-grow text-secondary"></div>
                        <div class="spinner-grow text-light"></div>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top: 80px; margin-bottom: 60px;" class="col-md-4">
            <div class="card-block" style="">
                        <!-- Form Name -->
                    <div class="card-title text-center"><h2>Creating the Ad!!</h2>
                        <h3> Please spend some time to talk about your listing to help find easily</h3></div>
                    <div class="form-group"> 
                            <label>Name/Short Description</label>
                          <input id="short_desc" name="short_desc" type="text" placeholder="Default: Listing in East Legon" class="form-control input-md" required="" style=" height: 50px;margin:0 10% 0 10%; border-radius:0px font-size: 2em" >
                    </div>
                    <div class="form-group">
                            <label>Talk about what you have</label>
                            <textarea id="description" name="description" class="md-textarea form-control" style=" height: 200px;margin:0 10% 0 10%; border-radius:0px font-size: 2em" placeholder="Talk about what you have" rows="4" cols="50">Listing in East Legon, Greater Accra Region with the price Ghc 1300. Note that the price is negotiable</textarea>
                    </div>
                </div>
        </div>
    </div>
</section>
<?php 
$city = $space->getcity(); ?>

<?php $images = image::getImagesbySpace($space->getID()); ?>
<section style="padding:0 20% 0 20%" id="view-listing-head">
    <div class="main-pic animated fadeIn delay-1s " style="left:0">
        <img id="mainPrev" class="img-raised rounded img-fluid" src="<?php echo $images[0]->getlocation(); ?>" alt="">
    </div>
    <div class="animated fadeIn" id="listing-details">
        <h2 id="listingTitle"><?php if($space->getshort_desc()==NULL){$space->setshort_desc('Listing in '.$city);} echo $space->getshort_desc();?></h2>
        <p><span style="font-weight: 400;">Region :</span> <?php echo $space->getregion(); ?> Region</p>
        <p><span style="font-weight: 400;">District :</span> <?php echo $space->getdistrict(); ?></p>
        <p><span style="font-weight: 400;">Price :</span> <?php echo $space->getprice(); ?> &#9679 <?php echo $space->getnegotiable(); ?></p>
        <p id="listingDesc"><?php if($space->getdescription()==NULL){$space->setdescription('Listing in '.$space->getcity().', '.$space->getregion().' Region with the price Ghc '.$space->getprice().'. Note the the price is '.$space->getnegotiable());} echo $space->getdescription();?></p>
    </div>
</section>


<div style="margin-top: 50px;" class="container">
    <h4>Click on the other pictures of the listing to view them</h4>
</div>

<div style="padding:0 20% 0 20%" class="card-column animated fadeIn delay-1s" id="other-pics">
    <?php foreach ($images as $val) {?>
    <div class="card">
        <img class="img-raised rounded img-fluid" src="<?php echo $val->getlocation(); ?>" alt="" data-toggle="modal"
             data-target=".other-pic" data-url="<?php echo $val->getlocation(); ?>" onmouseover="document.getElementById('mainPrev').src = this.dataset.url" onclick="document.getElementById('prevModal').src = this.dataset.url">
    </div>
   <?php } ?>
</div>

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
