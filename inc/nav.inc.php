<?php switch ($pg) {
	case 'home':
    case 'about':
	case 'contact':
	case 'terms': ?>
<nav class="navbar navbar-transpaNegotiable navbar-color-on-scroll fixed-top navbar-expand-lg navbar-transparent" color-on-scroll="100" id="sectionsNav">
<?php	break;
	case 'host':
	case 'find':
	case 'done':
    case 'view':
    case 'space':
    case 'q': ?>
<nav class="navbar navbar-transpaNegotiable fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
<?php break; } ?>
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="<?php echo $dir ?>">
                <img src="<?php echo $dir ?>/assets/img/efiewura.png" alt="" class="img-fluid logo">
                <span style="font-size: 0.9em;"> EFIEWURA</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" title="" href="<?php echo $dir ?>">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="" href="<?php echo $dir ?>/about">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="" href="<?php echo $dir ?>/contact">
                        Contact
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="" href="<?php echo $dir ?>/host">
                        Provide space
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="" href="<?php echo $dir ?>/find">
                        Find Space
                    </a>
                </li>
                <form class="form-inline ml-auto" method="GET" action="<?php echo $dir ?>">
                    <div class="form-group no-border">
                        <input type="text" class="form-control" placeholder="Search" name="q">
                    </div>
                    <button type="submit" class="btn btn-white btn-just-icon btn-round">
                        <i class="material-icons">search</i>
                    </button>
                </form>
            </ul>
        </div>
    </div>
</nav>