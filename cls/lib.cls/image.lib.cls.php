<?php 
class image extends Model{


	private $user_id;
	private $space_id;
	private $location;
	private $name;
	private $etag;
	private $thumbnail;
	public $table = "image";


	public function __construct($id){
		Model::__construct($id);
		if($id != 0){
			$this->user_id();
			$this->space_id();
			$this->location();
			$this->name();
			$this->etag();
			$this->thumbnail();
		}
	}

	public function setuser_id($user_id){
			$this->update("`user_id` = '$user_id'");
			$this->user_id();
		}


	private function user_id(){
			$this->user_id = $this->read('user_id');
		}


	public function getuser_id(){
			return $this->user_id;
		}

	public function setspace_id($space_id){
			$this->update("`space_id` = '$space_id'");
			$this->space_id();
		}


	private function space_id(){
			$this->space_id = $this->read('space_id');
		}


	public function getspace_id(){
			return $this->space_id;
		}

	public function setlocation($location){
			$this->update("`location` = '$location'");
			$this->location();
		}


	private function location(){
			$this->location = $this->read('location');
		}


	public function getlocation(){
			return $this->location;
		}

	public function setname($name){
			$this->update("`name` = '$name'");
			$this->name();
		}


	private function name(){
			$this->name = $this->read('name');
		}


	public function getname(){
			return $this->name;
		}

	public function setetag($etag){
			$this->update("`etag` = '$etag'");
			$this->etag();
		}


	private function etag(){
			$this->etag = $this->read('etag');
		}


	public function getetag(){
			return $this->etag;
		}

	public function setthumbnail($thumbnail){
			$this->update("`thumbnail` = '$thumbnail'");
			$this->thumbnail();
		}

	private function thumbnail(){
			$this->thumbnail = $this->read('thumbnail');
		}

	public function getthumbnail(){
			return $this->thumbnail;
		}

	public function getimages()
	{
		$imagearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `id` 
				FROM `$this.table` 
				WHERE `availability` = 1";
		$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$image = new image($row['id']);
			array_push($imagearr , $image);
		   }
		   return $imagearr;
	}


	public function getImagesbySpace($space_id)
	{
		$imagearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `image`.`id` as `id` 
				FROM `image` , `space`
				WHERE `image`.`availability` = 1
				AND `space`.`id`='$space_id'
				AND `image`.`space_id` = `space`.`id`";
		$result = $con->query($sql);
			while($row = $result->fetch_assoc()){
			$image = new image($row['id']);
			array_push($imagearr , $image);
		   }
		   return $imagearr;
	}
	public function getUserImage($user_id)
	{
		//$imagearr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `image`.`id` as `id` 
				FROM `image` , `efiewura`
				WHERE `image`.`availability` = 1
				AND `efiewura`.`id`='$user_id'
				AND `image`.`user_id` = `efiewura`.`id`";
		$result = $con->query($sql);
			while($row = $result->fetch_assoc()){
			$image = new image($row['id']);
			return $image;
			//array_push($imagearr , $image);
		   }
	}
}

 ?>