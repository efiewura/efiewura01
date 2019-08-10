<!--HOSTING FORM-->
<main class="container">
    
    <div class="row">
        <div class="col-sm-12 offset-sm-0 col-md-8 offset-md-2 animated fadeIn delay-1s">
            <form id="custom-form" class="form-horizontal" method="POST" action="<?php echo $dir ?>/done">
                <h2>Provide The Details For Your Listing</h2>
                <h4>Fill the form below with the details of the particular property you want to host. To make
                    transactions
                    easy make sure you input accurate information about the property
                </h4>
                <h5 class="custom-form-subhead">1. Please enter your details</h5>

                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating" for="host-name">Name</label>
                    <input type="text" class="form-control" id="host-name" name="name" required onkeypress="$('#nameAlert').hide();">
                    <div id="nameAlert" class="alert alert-warning" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Required!</strong> Name required to move on
                    </div>
                </div>

                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating" for="host-email">Email</label>
                    <input type="email" class="form-control" id="host-email" name="email">
                </div>

                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating" for="host-contact">Contact Number</label>
                    <input type="tel" class="form-control" id="host-contact" name="number" required onkeypress="$('#numberAlert').hide();$('#numberError').hide();">
                    <div id="numberAlert" class="alert alert-warning" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Required!</strong> Number required to move on
                    </div>
                    <div id="numberError" class="alert alert-danger" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Wrong Format!</strong> Number format error
                    </div>
                </div>

                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating" for="host-address">Address</label>
                    <input type="text" class="form-control" id="host-address" name="Address">
                </div>

                <div class="form-group form-file-upload form-file-multiple">
                    <input type="file" multiple="" class="inputFileHidden">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <!-- <img src="assets/img/avatar.jpg"  alt="..." class="img-thumbnail"> -->
                                <label class="bmd-label-floating"> Upload Profile</label>
                                <span class="input-group-btn">
                                    <button id="profileUpBtn" type="button" class="btn btn-fab btn-round btn-primary" onclick="$('#profileAlert').hide();">
                                        <i class="material-icons">attach_file</i>
                                    </button>
                                </span>
                            </div>  
                        </div>
                    </div>
                <div id="profileAlert" class="alert alert-warning" style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Required!</strong> Profile required to move on
                </div>
                </div>

                <h5 class="custom-form-subhead">2. Please provide the details of your listing</h5>
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating" for="listing-type">Listing type. eg. 4 bed room house</label>
                    <input type="text" class="form-control" id="listing-type" name="short_desc">
                </div>

                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating" for="description">Description</label>
                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                </div>

                <div class="form-group">
                    <label style="color: rgba(0,0,0,0.5);" for="region">Region</label>
                    <select class="form-control" data-style="btn btn-link" id="region" name="region" required >
                        <option value disabled>Select an option</option>
                            <option value="AS">Ashanti</option>
                            <option value="BA">Brong-Ahafo</option>
                            <option value="CE">Central</option>
                            <option value="EA">Eastern</option>
                            <option value="GA">Greater Accra</option>
                            <option value="NO">Northern</option>
                            <option value="UE">Upper East</option>
                            <option value="UW">Upper West</option>
                            <option value="VO">Volta</option>
                            <option value="WE">Western</option>
                    </select>
                    <div id="regionAlert" class="alert alert-warning" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Required!</strong> Region must be selected
                    </div>
                </div>

                <div class="form-group">
                    <label style="color: rgba(0,0,0,0.5);" for="region">District</label>
                    <select class="form-control" data-style="btn btn-link" id="district" name="district">
                        <option>Select an option</option>
                    </select>
                </div>

                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating" for="town">Town</label>
                    <input type="text" class="form-control" id="town" name="city" required onkeypress="$('#cityAlert').hide();">
                    <div id="cityAlert" class="alert alert-warning" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Required!</strong> Town required to move on
                    </div>
                </div>

                <div class="form-group form-file-upload form-file-multiple">
                    <input type="file" multiple="" class="inputFileHidden">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  </ol>
  <div class="carousel-inner">
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    <div class="input-group">

                         <label class="bmd-label-floating"> Upload Picture</label>
                        <span class="input-group-btn">
                            <button id="multUpBtn" type="button" class="btn btn-fab btn-round btn-primary">
                                <i class="material-icons">layers</i>
                            </button>
                        </span>
                    </div>
                    <div id="multAlert" class="alert alert-warning" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Required!</strong> Pictures required to move on
                    </div>
                </div>

                <h5 class="custom-form-subhead">3. Price of listing</h5>
                <div class="form-group bmd-form-group">
                    <label class="bmd-label-floating" for="price">Price in Ghana Cedis</label>
                    <input type="number" class="form-control" id="price" name="price" required onkeypress="$('#priceAlert').hide();">
                    <div id="priceAlert" class="alert alert-warning" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Required!</strong> Price required to move on
                    </div>
                </div>


                <h5 class="custom-form-subhead">4. Negotiation status</h5>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="negotiation" id="negotiable"
                               value="negotiable" checked>
                        Negotiable
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                <div class="form-check form-check-radio">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="negotiation" id="non-negotiable"
                               value="non-negotiable">
                        Non-negotiable
                        <span class="circle">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                <div style="margin-top: 30px; margin-bottom: 30px;" class="form-check">
                    <label class="form-check-label">
                        <input id='formCheckbox' class="form-check-input" type="checkbox" value="" name="agree" required onclick="validate()" checked='unchecked'  role="button" data-toggle="popover" data-placement="left" data-trigger="focus" title="Dismissible popover" data-content="Please fill the form fields">
                        By checking this, you hereby agree with all the terms and conditions associated with using the
                        Efiewura Platform
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>
                <div id="custom-form-buttons">
                    <button id="pay" type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal" style="display:none">Host
                    </button>
                    <button id="submit" type="submit" class="btn btn-primary" style="display:none">Done</button>
                    <button type="reset" class="btn btn-primary" >Reset</button>
                    <input type="hidden" name="next" value="complete">
                </div>
            </form>
        </div>
    </div>
</main>
<!--HOSTING FORM END-->

<!-- Payment -->
                <?php  include './vws/payment.vws.php'; ?>
<!-- Payment End -->