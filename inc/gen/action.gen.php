<?php
if (isset($_POST["next"])){
if ($_POST["next"]=='complete'){
//	if(!isset($_COOKIE['userSpace'])){
	$name = $_POST["name"]; 
	$email = $_POST["email"];
	$number = $_POST["number"];
	$address = $_POST["Address"];
	$short_desc = $_POST["short_desc"] ;
	$description = $_POST["description"];
	$region = $_POST["region"];
	$district = $_POST["district"];
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
//	setcookie('userSpace', $efiewura->getID().'#'.$space->getID(), time() + (86400 * 30), "/");
//}else{
//	$efiewura = new efiewura(explode('#',$_COOKIE['userSpace'])[0]);
//	$space = new space(explode('#',$_COOKIE['userSpace'])[1],0);
//}
}
if($_POST["next"]=='efiewura'){

$name = $_POST["name"];
$number = $_POST["number"];
$email = $_POST["email"];
$gender = $_POST["gender"];

$efiewura = new efiewura(0);
$efiewura->setname($name);
$efiewura->setnumber($number);
$efiewura->setemail($email);
$efiewura->setgender($gender);

echo json_encode(array( 'id' => $efiewura->getID(),
						'name' => $name,
 						'number' => $number,
 						'email' => $email,
 						'gender' => $gender));
}else if($_POST["next"]=='efie'){
$region = $_POST["region"];
$district = $_POST["district"];
$city = $_POST["city"];
$lat = $_POST["lat"];
$lng = $_POST["lng"];
$holder = $_POST["Uid"];

$space = new space(0,0);
$space->setregion($region);
$space->setdistrict($district);
$space->setcity($city);
$space->setlat($lat);
$space->setlng($lng);
$space->setholder($holder);

echo json_encode(array( 'id' => $space->getID(),
						'region' => $region,
 						'district' => $district,
 						'city' => $city,
 						'holder' => $holder));
}else if($_POST["next"]=="find"){
$query = array('region'=>$_POST["region"],'district'=>$_POST["district"],'city'=>$_POST["city"]);
$spaceList = space::getspacesbyArr($query);
}
else if($_POST["next"]=="img"){
	$imgMainLoc = 'https://res.cloudinary.com/dmvymb8nn/';
	$name = $_POST["name"];
	$path = $_POST['path'];
	$etag = $_POST['signature'];
	$thumbnail = $imgMainLoc.$_POST['thumbnail'];
	$location = $imgMainLoc.$path;
	$user_id = $_POST['Uid'];
	$space_id = $_POST['Sid'];
		$image = new image(0,0);
		$image->setlocation($location);
		$image->setetag($etag);
		$image->setname($name);
		$image->setuser_id($user_id);
		$image->setspace_id($space_id);
		$image->setthumbnail($thumbnail);
		echo json_encode(array( 'id' => $image->getID(),
						'location' => $location,
 						'thumbnail' => $thumbnail,
 						'space_id' => $space_id,
 						'user_id' => $user_id));
		$image->avail();
}else if ($_POST["next"]=="done") {
	$user_id = $_POST['Uid'];
	$space_id = $_POST['Sid'];
	$space = new space($space_id,0);
	$space->avail();
	$efiewura = new efiewura($user_id);
	$efiewura->avail();
	$pg = 'done';

	# code...
}else if ($_POST["next"]=="update") {
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
	echo json_encode(array('status' => $success ));
	# code...
}
}
//var_dump($_POST);
//header('location: ./');*/
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