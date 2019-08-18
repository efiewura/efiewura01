<?php
if ($pg=='api'){
if ($op=='complete'){
//	if(!isset($_COOKIE['userSpace'])){
	$name = $_POST["name"]; 
	$email = isset($_POST["email"])?$_POST['email']:"";;
	$number = $_POST["number"];
	$address = isset($_POST["address"])?$_POST['address']:"";;
	$short_desc = isset($_POST["short_desc"])?$_POST['short_desc']:""; ;
	$description = isset($_POST["description"])?$_POST['description']:"";;
	$region = $_POST["region"];
	$district = isset($_POST["district"])? $_POST["district"]:"";
	$city = $_POST["city"] ;
	$price = $_POST["price"];
	$neg = $_POST["negotiation"] ;
	$agree = $_POST["agree"];
	$images = $_POST["image"];
	$imgMainLoc = 'https://res.cloudinary.com/dmvymb8nn/image/upload/c_scale,w_600,h_500,f_webp/';
	$efiewura = new efiewura(0);
	$efiewura->setname($name);
	$efiewura->setnumber($number);
	$efiewura->setemail($email);
	$efiewura->setaddress($address);
	$efiewura->avail();
	if(isset($_POST["userImg"])){
	$userImg = $_POST["userImg"] ;
	$userImg = explode('#', $userImg);

	$image = new image(0,0);
	$image->setlocation($imgMainLoc.ltrim($userImg[0], "image/upload/"));
	$image->setetag($userImg[1]);
	$image->setuser_id($efiewura->getID());
		$image->avail();
}
	$space = new space(0,0);
	$space->setregion($region);
	$space->setdistrict($district);
	$space->setcity($city);
	$space->setholder($efiewura->getID());
	$space->setdescription($description);
	$space->setshort_desc($short_desc);
	$space->setprice($price);
	$space->setneg_flag(($neg=='negotiable')? 1:0);
	$space->avail();
	$space_id = $space->getID();
	foreach ($images as $val) {
		$val = explode('#', $val);
		$image = new image(0,0);
		$image->setlocation($imgMainLoc.ltrim($val[0], "image/upload/"));
		$image->setetag($val[1]);
		$image->setspace_id($space_id);
		$image->avail();
	}
}
if($prod=='efiewura'){
	switch ($op) {
		case 'create':
			$efiewura = array( );
			foreach ($_POST as $key => $value) {
				if($key=='name'||$key=='number'||$key=='number'||$key=='number')
					$efiewura[$key] = $value;
			}
			$efiewura = new efiewura(0,$efiewura);
			$efiewura->avail();
			break;
		case 'read':
			# code...
			break;
		case 'update':
			# code...
			break;
		default:
			break;
	}
}else if($prod=='space'){
	switch ($op) {
		case 'create':
			$space = array();
			foreach ($_POST as $key => $value) {
				if($key=='region'||$key=='district'||$key=='city'||$key=='description'||$key=='short_desc'||$key=='lat'||$key=='lng'||$key=='Uid'||$key=='neg_flag'||$key=='price'){
					if($key=='Uid')
						$space['holder'] = $value;
					else
						$space[$key] = $value;
				}
			}
			$space = new space(0,$space);
			$space->avail();
			break;
		case 'read':
			# code...
			break;
		case 'update':
	$space_id = $_POST['signature'];
	$space = new space($space_id);
	$success = false;
	if (isset($_POST['description'])) {
	$description = $_POST['description'];
	$space->setdescription($description);
	$success = true;
	}
	if (isset($_POST['short_desc'])) {
	$short_desc = $_POST['short_desc'];
	$space->setshort_desc($short_desc);
	$success = true;
	}
	if (isset($_POST['price'])) {
	$price = $_POST['price'];
	$space->setprice($price);
	$success = true;
	}
	if (isset($_POST['negotiable'])) {
	$negotiable = $_POST['negotiable'];
	$space->setnegotiable($negotiable);
	$success = true;
	}
	if (isset($_POST['lat'])) {
	$lat = $_POST['lat'];
	$space->setlat($lat);
	$success = true;
	}
	if (isset($_POST['lng'])) {
	$lng = $_POST['lng'];
	$space->setlng($lng);
	$success = true;
	}
	if (isset($_POST['district'])) {
	$district = $_POST['district'];
	$space->setdistrict($district);
	$success = true;
	}
	if (isset($_POST['city'])) {
	$city = $_POST['city'];
	$space->setcity($city);
	$success = true;
	}
	if (isset($_POST['region'])) {
	$region = $_POST['region'];
	$space->setregion($region);
	$success = true;
	}
	if (isset($_POST['imgNum'])) {
	$imgNum = $_POST['imgNum'];
	$space->setimgNum($imgNum);
	$success = true;
	}
			break;
		default:
			break;
	}

}
else if($prod=="image"){
	switch ($op) {
		case 'create':
			$image = array();
			foreach ($_POST as $key => $value) {
				if($key=='user_id'||$key=='space_id'||$key=='location'||$key=='name'||$key=='etag'||$key=='thumbnail')
					$image[$key] = $value;
			}
			$image = new image(0,$image);
			$image->avail();
			break;
		case 'read':
			# code...
			break;
		case 'update':
			# code...
			break;
		default:
			break;
	}

}
}else{
	if(!isset($space))
		$space = 111;
	if(!isset($efiewura))
		$efiewura = 111;
	if(!isset($image))
		$image = 111;
}

if(isset($_GET['q'])){
	if(isset($_GET['rg'])){
	$searchArr = explode(" ", $_GET['q'].(($_GET['q']!=""&&isset($_GET['type']))?" ":"").(isset($_GET['type'])? $_GET['type']:""));
	$newSearchArr = array('city'=>array(), 'district'=>array(),'short_desc'=>array(),'description'=>array(),'region'=>array());
	foreach ($searchArr as $val) {
		array_push($newSearchArr['city'], $val);
		array_push($newSearchArr['district'], $val);
		array_push($newSearchArr['short_desc'], $val);
		array_push($newSearchArr['description'], $val);
	}
	if (isset($_GET['rg'])&&$_GET['rg']!=""&&$_GET['rg']!=NULL) {
		array_push($newSearchArr['region'], $_GET['rg']);
	}else{
		array_pop($newSearchArr);
	}
	$searchArr = space::getspacesbySearchArr($newSearchArr);
	}else{
		$searchArr = space::getspacesbySearchQuery($_GET['q']);
	}
}
?>