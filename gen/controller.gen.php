<?php
$dir = url();
if(isset($_GET['q'])){
	$pg = 'q';
}
$soon = 'home';
$pg = (isset($_GET['pg']))? $_GET['pg']:((isset($pg))? $pg:$soon); 
$temp = './inc/page.inc.php';	
$pg = ($pg==$soon)? ((isset($_GET['priv']))? 'home':$pg):$pg;
switch ($pg) {
	case 'soon':
$temp = './inc/soon.inc.php';
$page = './inc/empty.inc.php';
$title = ' ';
$noHeader = true;
	break;
	case 'about':
$temp = './inc/page.inc.php';
$page = './inc/about.inc.php';
$title = 'About';
$noHeader = true;
		break;
	case 'find':
	case 'q':
	$reg = true;
	$title = '';
$temp = './inc/page.inc.php';
if (isset($_GET['q'])) {
$page = './inc/search_results.inc.php';
}else{
$page = './inc/find_space.inc.php';
$title = 'Find a Space';
}
$noHeader = false;
		break;
	case 'host':
	$reg = true;
$temp = './inc/page.inc.php';
$page = './inc/provide_space.inc.php';
$title = 'Provide Space';
$noHeader = false;
	break;
	case 'contact':
$temp = './inc/page.inc.php';
$page = './inc/contact.inc.php';
$title = 'Contact Us';
$noHeader = true;
		break;
	case 'api':
$temp = './inc/api.inc.php';
$prod = isset($_GET['product'])? $_GET['product']:"";
$op = isset($_GET['op'])? $_GET['op']:"";
		break;
	case 'terms':
$temp = './inc/page.inc.php';
$page = './inc/terms.inc.php';
$title = 'Terms & Conditions';
$noHeader = true;
break;
	case 'view':
	case 'space':
$space_id = (isset($_GET['space']))? $_GET['space']:0;
if(isset($_GET['space'])&&is_numeric($_GET['space'])&&$space_id!=0){
$space = new space($space_id,0); 
if($space->getexits()==1){
$temp = './inc/page.inc.php';
$page = './inc/view_space.inc.php';
$title = $space->getshort_desc();
}else{
$temp = './inc/page.inc.php';
$page = './inc/empty.inc.php';
$title = "";
}
$noHeader = false;
}else{
header("location: https://wwwefiewura.000webhostapp.com/?q");
}
		break;
	case 'done':
if(isset($_POST['next'])){
$temp = './inc/page.inc.php';
$page = './inc/finishing_up.inc.php';
$title = 'Finishing Up';
$noHeader = false;
}else{
header('location: ./?pg=host');
}
		break;
	case 'home':
	default:
	$pg='home';
$temp = './inc/page.inc.php';
$page = './inc/index.inc.php';
$title = 'Home';
$noHeader = true;
		break;
}
 ?>
