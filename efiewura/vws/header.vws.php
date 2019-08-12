<?php if ($pg=='home') {
	?>
<div id="hero-message" class="animated fadeIn" style="height: 30vh;">
        <h1 style="font-size: 38px;">Welcome To EFIEWURA</h1>
        <p style="font-size: 17px; margin-top: 45px;">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, saepe dolorem voluptatum corpori
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum, saepe dolorem voluptatum corpori
        </p>
    </div>
    <div id="hero-social-container">
        <div id="hero-social-icons" class="animated fadeIn delay-1s">
            <a href="#" rel="tooltip" data-placement="bottom" href="https://twitter.com/Efiewura" target="_blank" data-original-title="Follow us on Twitter">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" rel="tooltip" data-placement="bottom" href="https://www.facebook.com/Efiewura" target="_blank" data-original-title="Like us on Facebook">
                <i class="fa fa-facebook-square"></i>
            </a>
            <a href="#" rel="tooltip" data-placement="bottom" href="https://www.instagram.com/Efiewura" target="_blank" data-original-title="Follow us on Instagram">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
<?php
}elseif ($pg=='soon') {?>
    <div id="hero-message" class="animated fadeIn" style="height: 30vh;">
        <h1 style="font-size: 38px;text-align: center">COMING SOON</h1>
        <p style="font-size: 17px; margin-top: 45px;text-align: center">
            An avenue for accomodation for service personel. Sign Up to put up a space for free.
        </p>

    <h3 class="text-large text-center">5 days left</h3>
    </div>
    <div id="hero-social-container">
        <div id="hero-social-icons" class="animated fadeIn delay-1s">
            <a href="#" rel="tooltip" data-placement="bottom" href="https://twitter.com/Efiewura" target="_blank" data-original-title="Follow us on Twitter">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" rel="tooltip" data-placement="bottom" href="https://www.facebook.com/Efiewura" target="_blank" data-original-title="Like us on Facebook">
                <i class="fa fa-facebook-square"></i>
            </a>
            <a href="#" rel="tooltip" data-placement="bottom" href="https://www.instagram.com/Efiewura" target="_blank" data-original-title="Follow us on Instagram">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
<?php }else{?>
<h1 class="animated fadeIn delay-1s"><?php echo $title; ?> EFIEWURA</h1>
<?php 
}
?>