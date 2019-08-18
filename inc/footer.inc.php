<?php switch ($pg) {
	case 'home':?>
<footer style="bottom: 0px;width: 100%;z-index: 99">
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-4" style="margin-top: 20px;">
                Copyright &copy; 2019 Efiewura
            </div>
            <div class="col-md-4" style="margin-top: 20px;">
                <a href="<?php echo $dir ?>/terms" class="text-decoration-none">Terms &
                    Conditions</a>
            </div>
            <div class="col-md-4" style="margin-top: 20px;">
                <div id="footer-social" class="wow fadeInUp" data-wow-delay="0.9s">
                    <a href="#" rel="tooltip" data-placement="bottom" href="https://twitter.com/Efiewura"
                       target="_blank" data-original-title="Follow us on Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" rel="tooltip" data-placement="bottom" href="https://www.facebook.com/Efiewura"
                       target="_blank" data-original-title="Like us on Facebook"><i
                            class="fa fa-facebook-square"></i></a>
                    <a href="#" rel="tooltip" data-placement="bottom" href="https://www.instagram.com/Efiewura"
                       target="_blank" data-original-title="Follow us on Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
       <!-- <hr style="margin-top: 40px; margin-bottom: 40px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                Accepted payment methods : <img id="momo" class="img-fluid" src="<?php echo $dir ?>/assets/img/mo.jpg"
                                                alt="mtn-mobile-money">
            </div>
        </div> -->
    </div>
</footer>
<?php   break;
    case 'contact':
    case 'about':
    case 'host':
    case 'find':
    case 'done':
    case 'view':
    case 'space':
    case 'terms':
    case 'q': ?>
<footer style="bottom: 0px;width: 100%;z-index: 99">
    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-4" style="margin-top: 20px;">
                Copyright &copy; 2019 Efiewura
            </div>
            <div class="col-md-4" style="margin-top: 20px;">
                <a href="<?php echo $dir ?>/terms" class="text-decoration-none">Terms &
                    Conditions</a>
            </div>
            <div class="col-md-4" style="margin-top: 20px;">
                <div id="footer-social" class="wow fadeInUp" data-wow-delay="0.9s">
                    <a href="#" rel="tooltip" data-placement="bottom" href="https://twitter.com/Efiewura"
                       target="_blank" data-original-title="Follow us on Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" rel="tooltip" data-placement="bottom" href="https://www.facebook.com/Efiewura"
                       target="_blank" data-original-title="Like us on Facebook"><i
                            class="fa fa-facebook-square"></i></a>
                    <a href="#" rel="tooltip" data-placement="bottom" href="https://www.instagram.com/Efiewura"
                       target="_blank" data-original-title="Follow us on Instagram"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
       <!-- <hr style="margin-top: 40px; margin-bottom: 40px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                Accepted payment methods : <img id="momo" class="img-fluid" src="<?php echo $dir ?>/assets/img/mo.jpg"
                                                alt="mtn-mobile-money">
            </div>
        </div> -->
    </div>
</footer>
<?php   break;
    
    default:
        # code...
        break;
} ?>