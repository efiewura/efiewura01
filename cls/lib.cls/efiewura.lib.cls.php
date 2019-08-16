<?php 


class efiewura extends Model{


	private $name;
	private $number;
	private $email;
	private $gender;
	private $address;
	//private $datetime;
	public $table = "efiewura";


	public function __construct($id){
		Model::__construct($id);
		if($id != 0){
			$this->name();
			$this->number();
			$this->email();
			$this->gender();
			$this->address();
			//$this->datetime();
		}
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

	public function setnumber($number){
			$this->update("`number` = '$number'");
			$this->number();
		}


	private function number(){
			$this->number = $this->read('number');
		}


	public function getnumber(){
			return $this->number;
		}

	public function setemail($email){
			$this->update("`email` = '$email'");
			$this->email();
		}


	private function email(){
			$this->email = $this->read('email');
		}


	public function getemail(){
			return $this->email;
		}

	public function setgender($gender){
			$this->update("`gender` = '$gender'");
			$this->gender();
		}


	private function gender(){
			$this->gender = $this->read('gender');
		}


	public function getgender(){
			return $this->gender;
		}

	public function setaddress($address){
			$this->update("`address` = '$address'");
			$this->address();
		}


	private function address(){
			$this->address = $this->read('address');
		}


	public function getaddress(){
			return $this->address;
		}

	public function setdatetime($datetime){
			$this->update("`datetime` = '$datetime'");
			$this->datetime();
		}

	private function datetime(){
			$this->datetime = $this->read('datetime');
		}

	public function getdatetime(){
			return $this->datetime;
		}

	public function getefiewura()
	{
		$efiewuraarr = array();
		include("./gen/connector.gen.php");
		$sql = "SELECT `id` 
				FROM `efiewura` 
				WHERE `availability` = 1";
		$result = $con->query($sql);
		
			while($row = $result->fetch_assoc()){
			$efiewura = new comment($row['id']);
			array_push($efiewuraarr , $efiewura);
		   }
		   return $efiewuraarr;
	}

	public function getEfiewuraSpace($space_id)
	{
		include("./gen/connector.gen.php");
		$sql = "SELECT `efiewura`.`id` AS `id`
				FROM `efiewura` , `space`
				WHERE `efiewura`.`availability` = 1
				AND `space`.`holder`= `efiewura`.`id`
				AND `space`.`id` = '$space_id'";
		$result = $con->query($sql);
			if($row = $result->fetch_assoc()){
			$efiewura = new efiewura($row['id']);
			return $efiewura;
		   }
		   return 111;
	}
}

?>