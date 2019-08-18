<?php   $efiewura = array(  'name' => $_POST['name'],
                            'number' => $_POST['number'],
                            'email' => $_POST['email'],
                            'address' => $_POST['address']
                        );
        $space = array(     'region'=>$_POST['region'],
                            'district'=>$_POST['district'],
                            'price'=>$_POST['price'],
                            'city'=>$_POST['city'],
                            'type'=>$_POST['type'],
                            'neg_flag'=>($_POST['negotiation']=='negotiable')? 1:0,
                            'short_desc'=>$_POST['type'].' Listing in '.$_POST['city'].', ',
                            'description'=> (!strlen(trim($_POST['description']))? $_POST['description']:$_POST['type'].' Listing in '.$_POST['city'].', '.'Greater Accra Region'.' with the price Ghc '.$_POST['price'].'. Note that the price is '.$_POST['negotiation'])
                        );

    $imgMainLoc = 'https://res.cloudinary.com/dmvymb8nn/image/upload/c_scale,w_600,h_500,f_webp/'; 
        if(isset($_POST['userImg'])){
            $val = explode('#', $_POST['userImg']);
            $userImage = array( 'name'=>ltrim($val[0], "image/upload/"),
                                'etag'=>$val[1]
                            );
            $val = $imgMainLoc.$userImage['name'];
            $userImage['location']=$val;
        }else{
            $val = 'https://res.cloudinary.com/dmvymb8nn/image/upload/t_media_lib_thumb/v1566009080/avatar-placeholder_v0ecjm.png';
        }
?>
<section class="container" id="owners-details">
    <div class="row">
        <div style="margin-top: 80px; margin-bottom: 60px;" class="col-md-8 ">
            <div style="border-top: solid var(--teal) 3px;" class="card">
                <h3 id="owner-head"><span class="text-uppercase">FInishing Up</span></h3>
                <div id="owners-details-card" class="card-body">
                    <img style="width: 120px; height: 120px;" src="<?php echo $val ?>" alt=""
                         class="img-raised rounded-circle img-fluid">
                    <div id="owners-details-card-text">
                        <div class="row">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                <p><?php echo $_POST['name']; ?></p>
                                <p><?php echo isset($_POST["email"])? $_POST['email']:""; ?></p>
                                <p><?php echo $_POST['number']; ?></p>
                                <p><?php isset($_POST['address'])? $_POST['address']:""; ?></p>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="circle-loader">
                                  <div class="checkmark draw"></div>
                                </div>
                            </div>
                        </div>
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
                          <input id="short_desc" name="short_desc" type="text" placeholder="Default: <?php echo $space['short_desc']; ?>" class="form-control input-md" required="" style=" height: 50px;margin:0 10% 0 10%; border-radius:0px font-size: 2em" value="<?php echo $space['short_desc']; ?>">
                    </div>
                    <div class="form-group">
                            <label>Talk about what you have</label>
                            <textarea id="description" name="description" class="md-textarea form-control" style=" height: 200px;margin:0 10% 0 10%; border-radius:0px font-size: 2em" placeholder="Talk about what you have" rows="4" cols="50"><?php echo $space['description']; ?></textarea>
                    </div>
                </div>
        </div>
    </div>
</section>
<?php 
//$images = $_POST['image'];
        $val = $imgMainLoc.ltrim(explode('#', $_POST['image'][0])[0], "image/upload/") ;?>
        
<section style="padding:0 20% 0 20%" id="view-listing-head" class="container">
    <div class="row">
        <div class="col-12 offset-0 col-md-10 offset-md-1">
        <h2>Listing's Details</h2>
        <div class="animated fadeIn" id="listing-details">
            <h2 id="listingTitle"><?php echo $_POST['short_desc'];?></h2>
            <p style="font-size: 1.1em;"><span style="font-weight: 400;">Region :</span> <?php echo $_POST['region']; ?> Region</p>
            <p style="font-size: 1.1em;"><span style="font-weight: 400;">District :</span> <?php echo $_POST['district']; ?></p>
            <p style="font-size: 1.1em;"><span style="font-weight: 400;">Price :</span> <?php echo $_POST['price']; ?> &#9679 <?php echo $_POST['negotiation']; ?></p>
            <p id="listingDesc"><?php echo $_POST['description'];?></p>
            <h3>Description</h3>
            <p style="font-size: 1.1em;"><?php echo $_POST['description'];?></p>
            </div>
            <h3>Main Image</h3>
            <div style="margin-top: 20px;" class="main-pic animated fadeIn delay-1s">
                   <img id="mainPrev" class="img-raised rounded img-fluid" src="<?php echo $val ?>" alt="">
            </div>
        </div>
    </div>
</section>


<div style="margin-top: 50px;" class="container">
    <h3>Click on the other pictures of the listing to view them</h3>
</div>

<div style="padding:0 20% 0 20%" class="card-column animated fadeIn delay-1s" id="other-pics">
    <?php $images = array();
    foreach ($_POST['image'] as $val) {
            $val = explode('#', $val);
            $image = array( 'name'=>ltrim($val[0], "image/upload/"),
                            'etag'=>$val[1]
                            );
            $val = $imgMainLoc.$image['name'];
            $image['location']=$val;
            array_push($images, $image);?>
    <div class="other-pic-item">
        <img class="img-raised rounded img-fluid" src="<?php echo $image['location']; ?>" alt="" data-toggle="modal"
             data-target=".other-pic" data-url="<?php echo $image['location']; ?>"  onclick="document.getElementById('prevModal').src = this.dataset.url">
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
