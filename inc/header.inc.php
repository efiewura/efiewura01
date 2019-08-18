<?php switch ($pg) {
	case 'home':?>
<header class="wow fadeIn" id="hero" data-wow-delay="0.1s">
    <div id="hero-message" class="animated fadeIn" style="height: 30vh;">
        <h1 style="font-size: 38px;">Welcome To EFIEWURA</h1>
        <p style="font-size: 1.2em; margin-top: 45px;">
            Akwaaba! Kindly sign up and add to our amazing catalogue of ads homes and accommodation space
        </p>
    </div>
    <div id="hero-social-container">
        <div id="hero-social-icons" class="animated fadeIn delay-1s">
            <a href="#" rel="tooltip" data-placement="bottom" href="https://twitter.com/Efiewura" target="_blank"
               data-original-title="Follow us on Twitter">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" rel="tooltip" data-placement="bottom" href="https://www.facebook.com/Efiewura" target="_blank"
               data-original-title="Like us on Facebook">
                <i class="fa fa-facebook-square"></i>
            </a>
            <a href="#" rel="tooltip" data-placement="bottom" href="https://www.instagram.com/Efiewura" target="_blank"
               data-original-title="Follow us on Instagram">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </div>
</header>
<?php   break;
    case 'about': ?>
<header id="about-header">
    <h1 class="animated fadeIn delay-1s">About EFIEWURA</h1>
</header>
<?php   break;
	case 'contact': ?>
<header class="contact-header">
    <h1 class="animated fadeIn delay-1s">Contact EFIEWURA</h1>
</header>
<?php   break;
	case 'terms': ?>
<header id="about-header">
    <h1 class="animated fadeIn delay-1s">Terms & Conditions</h1>
</header>
<?php   break;
} ?>