<!-- HERO -->
<?php if ($noHeader) {
?>
<header <?php if($pg=='home'||$pg=='soon'){ ?>class="wow fadeIn" id="hero" data-wow-delay="0.1s"<?php }else{ ?>id="about-header"<?php } ?>>
    <?php require './vws/header.vws.php'; ?>
</header>
<?php
} ?>
<!-- HERO -->