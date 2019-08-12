<?php 


class space extends Model2 {


	private $region;
	private $district;
	private $lng;
	private $lat;
	private $imgNum;
	private $price;
	private $holder;
	private $email;
	private $city;
	private $short_desc;
	private $description;
	private $negotiable;
	private $neg_flag;
	private $load = 	array(	'region'=>'',
								'district'=>'',
								'lng'=>'',
								'lat'=>'',
								'imgNum'=>'',
								'price'=>'',
								'holder'=>'',
								'email'=>'',
								'city'=>'',
								'short_desc'=>'',
								'description'=>'',
								'neg_flag'=>''
							);
	public $table = "space";


	public function __construct($id,$load){
		Model2::__construct($id,$load);
		//var_dump($this->getload());
		$this->load = (is_array($load))? $this->setter($load):$this->getload();
		{
				$this->region();
				$this->district();
				$this->lng();
				$this->lat();
				$this->imgNum();
				$this->price();
				$this->holder();
				$this->city();
				$this->short_desc();
				$this->description();
				$this->neg_flag();
				$this->negotiable();
			}
	}

	public function setregion($region){
			$this->load['region']= $region;
			$this->update("`region` = '$region'");
			$this->region();
		}


	private function region(){
			$this->region = $this->load['region'];
		}


	public function getregion(){
			return $this->region;
		}

	public function setdescription($description){
			$this->load['description'] = $description;
			$this->update("`description` = '$description'");
			$this->description();
		}

	private function description(){
			$this->description = $this->load['description'];
		}


	public function getdescription(){
			return $this->description;
		}

	public function setdistrict($district){
			$this->load['district'] = $district;
			$this->update("`district` = '$district'");
			$this->district();
		}


	private function district(){
			$this->district = $this->load['district'];
		}


	public function getdistrict(){
			return $this->district;
		}

	public function setlng($lng){
			$this->load['lng'] = $lng;
			$this->update("`lng` = '$lng'");
			$this->lng();
		}


	private function lng(){
			$this->lng = $this->load['lng'];
		}


	public function getlng(){
			return $this->lng;
		}

	public function setlat($lat){
			$this->load['lat'] = $lat;
			$this->update("`lat` = '$lat'");
			$this->lat();
		}


	private function lat(){
			$this->lat = $this->load['lat'];
		}


	public function getlat(){
			return $this->lat;
		}

	public function setimgNum($imgNum){
			$this->load['imgNum'] = $imgNum;
			$this->update("`imgNum` = '$imgNum'");
			$this->imgNum();
		}


	private function imgNum(){
			$this->imgNum = $this->load['imgNum'];
		}


	public function getimgNum(){
			return $this->imgNum;
		}

	public function setprice($price){
			$this->load['price'] = $price;
			$this->update("`price` = '$price'");
			$this->price();
		}


	private function price(){
			$this->price = $this->load['price'];
		}


	public function getprice(){
			return $this->price;
		}

	public function setholder($holder){
			$this->load['holder'] = $holder;
			$this->update("`holder` = '$holder'");
			$this->holder();
		}


	private function holder(){
			$this->holder = $this->load['holder'];
		}


	public function getholder(){
			return $this->holder;
		}

	public function setemail($email){
			$this->load['email'] = $email;
			$this->update("`email` = '$email'");
			$this->email();
		}


	private function email(){
			$this->email = $this->load['email'];
		}


	public function getemail(){
			return $this->email;
		}

	public function setcity($city){
			$this->load['city'] = $city;
			$this->update("`city` = '$city'");
			$this->city();
		}

	private function city(){
			$this->city = $this->load['city'];
		}

	public function getcity(){
			return $this->city;
		}

	public function setshort_desc($short_desc){
			$this->load['short_desc'] = $short_desc;
			$this->update("`short_desc` = '$short_desc'");
			$this->short_desc();
		}

	private function short_desc(){
			$this->short_desc = $this->load['short_desc'];
		}

	public function getshort_desc(){
			return $this->short_desc;
		}

	private function negotiable(){if(
		$this->neg_flag==0){
			$this->negotiable='not negotiable';}else{
			$this->negotiable='negotiable';				
			}
		}

	public function getnegotiable(){
			return $this->negotiable;
		}

	public function setneg_flag($neg_flag){
			$this->load['neg_flag'] = $neg_flag;
			$this->update("`neg_flag` = '$neg_flag'");
			$this->neg_flag();
		}

	private function neg_flag(){
			$this->neg_flag = $this->load['neg_flag'];
		}

	public function getneg_flag(){
			return $this->neg_flag;
		}
	public function getspaces()
	{
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT * 
				FROM `space` 
				WHERE `availability` = 1";
		$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$space = new space(-1,$row);
			array_push($spacearr , $space);
		   }
		   return $spacearr;
	}

	public function getspacesbydistrict($region, $district, $city)
	{
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT * 
				FROM `space` 
				WHERE `availability` = 1
				AND `region` = '$region'
					AND `district` LIKE	'%$district%'
					AND `city` LIKE '%$city%'";
				
		//$sql = $sql.(($Uid==0)?"":"AND `holder` = '$Uid'");

		$result = $con->query($sql);

		
			while($row = $result->fetch_assoc()){
			$space = new space(-1,$row);//add a flag to indicate a update or a class creation
			array_push($spacearr , $space);
		   }	
		   return $spacearr;
	}

	public function getspacesbyArr($arr)
	{
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT *
				FROM `space` 
				WHERE `availability` = 1";
				$i = 0;
				$del = "";
				foreach ($arr as $key => $value) {
					if (is_array($value)) {
						$cnt = 0;
						$str = "";
						foreach ($value as $val) {
							$str = ($cnt==0)? $str."":$str." OR ";
							$str = $str.$key." LIKE '%$val%'";
							$cnt++;
						}
						// 	$str = substr($str,0,-1);
						$sql =$sql."AND".$str;
						$i++;
						continue;
					}
					$sql = $sql." AND `".$key."` LIKE '%".$value."%'";
						$i++;

				}
				$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$space = new space(-1,$row);
			array_push($spacearr , $space);
		   }
		   return $spacearr;
	}
public function getspacesbySearchArr($arr)
	{
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT * 
				FROM `space` 
				WHERE `id`
				IN (SELECT `id` 
				FROM `space` 
				WHERE ";
				$i = 0;
				$del = "";
				$hlda = (isset($arr['region']))? true:false;
				foreach ($arr as $key => $value) {
					$del = ($i!=0)? (($key=='region')? ") AND ":" OR "):(($hlda&&$i==0)? "(":"");
					$del1 = ($key=='region')? ") AND ":" OR ";
					$del2 = ($key=='region')? "(":"";
					if (is_array($value)) {
						$cnt = 0;
						$str = "";
						foreach ($value as $val) {
							$str = ($cnt==0)? $str."":$str." AND ";
							$str = $str." `".$key."` LIKE '%$val%'";
							$cnt++;
						}
						// 	$str = substr($str,0,-1);
						$sql =$sql.$del.$str;
						$i++;
						continue;
					}
					$sql = $sql." ".$del1."`".$key."` LIKE '%".$value."%'";
						$i++;

				}
				$sql = $sql.")
				AND `availability` = 1";
				$result = $con->query($sql);
			while($row = $result->fetch_assoc()){
			$space = new space(-1,$row);
			array_push($spacearr , $space);
		   }
		   return $spacearr;
	}

	public function getspacesbySearchQuery($str)
	{
		$arr = preg_split("/([ ]|AND)/", $str,-1,PREG_SPLIT_NO_EMPTY);
		//print_r($arr);
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT *
					FROM 	`space`
					WHERE MATCH(short_desc, district ,city,description) AGAINST ('$str' IN NATURAL LANGUAGE MODE)
					AND `space`.`availability` = 1
					UNION
					SELECT `space`.*
					FROM 	`space` , `efiewura`
					WHERE MATCH(name,address) AGAINST ('$str' IN NATURAL LANGUAGE MODE)
					AND `space`.`holder` = `efiewura`.`id`
					AND `space`.`availability` = 1";
					echo $sql;
				$result = $con->query($sql);
			while($row = $result->fetch_assoc()){
			$space = new space(-1,$row);
			array_push($spacearr , $space);
		   }
		   return $spacearr;
		   
	}
	public function getcomments()
	{
		$spacearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `comments`.`id` 
				FROM `space`, `comments` 
				WHERE `space`.`id` = `comments`.`space_id`
				AND `comments`.`availability` = 1";

				$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$space = new comment($row['id']);
			array_push($spacearr , $space);
		   }
		   return $spacearr;
	}

	public function getImages($str)
	{
		$imagearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `image`.`id` as id 
				FROM `space` , `image`
				WHERE `image`.`availability` = 1
				AND `space`.`id` = `image`.`space_id`
				AND `space`.`id` = $this->getID()";
				$sql = $sql.$str;
		$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$image = new image($row['id']);
			array_push($imagearr , $image);
		   }
		   return $imagearr;
	}
}

 ?>