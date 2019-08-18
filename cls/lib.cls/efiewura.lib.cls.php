<?php 


class efiewura extends Model2{


	private $name;
	private $number;
	private $email;
	private $gender;
	private $address;
	private $load = array(	"id"=>"",
							"name"=>"",
							"number"=>"",
							"email"=>"",
							"gender"=>"",
							"address"=>"",
							);
	//private $datetime;
	public $table = "efiewura";


	public function __construct($id,$load){
		Model2::__construct($id,$load);
		$this->load = (is_array($load))? $this->setter($load):(($id==0)?$this->load:$this->getload());
		{
			$this->name();
			$this->number();
			$this->email();
			$this->gender();
			$this->address();
			//$this->datetime();
		}
	}

	public function setname($name){
			$this->load['name'] = $name;		
			$this->update("`name` = '$name'");
			$this->name();
		}


	private function name(){
			if(isset($this->load['name']))
				$this->name = $this->load['name'];
			else
				$this->load['name']="";
		}


	public function getname(){
			return $this->name;
		}

	public function setnumber($number){
			$this->load['number'] = $number;		
			$this->update("`number` = '$number'");
			$this->number();
		}


	private function number(){
			if(isset($this->load['number']))
				$this->number = $this->load['number'];
			else
				$this->load['number']="";
		}


	public function getnumber(){
			return $this->number;
		}

	public function setemail($email){
			$this->load['email'] = $email;		
			$this->update("`email` = '$email'");
			$this->email();
		}


	private function email(){
			if(isset($this->load['email']))
				$this->email = $this->load['email'];
			else
				$this->load['email']="";
		}


	public function getemail(){
			return $this->email;
		}

	public function setgender($gender){
			$this->load['gender'] = $gender;		
			$this->update("`gender` = '$gender'");
			$this->gender();
		}


	private function gender(){
			if(isset($this->load['gender']))
				$this->gender = $this->load['gender'];
			else
				$this->load['gender']="";
		}


	public function getgender(){
			return $this->gender;
		}

	public function setaddress($address){
			$this->load['address'] = $address;		
			$this->update("`address` = '$address'");
			$this->address();
		}


	private function address(){
			if(isset($this->load['address']))
				$this->address = $this->load['address'];
			else
				$this->load['address']="";
		}


	public function getaddress(){
			return $this->address;
		}

	public function setdatetime($datetime){
			$this->load['datetime'] = $datetime;		
			$this->update("`datetime` = '$datetime'");
			$this->datetime();
		}

	private function datetime(){
			if(isset($this->load['datetime']))
				$this->datetime = $this->load['datetime'];
			else
				$this->load['datetime']="";
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
			$efiewura = new efiewura(-1,$row);
			array_push($efiewuraarr , $efiewura);
		   }
		   return $efiewuraarr;
	}

	public function getEfiewuraSpace($space_id)
	{
		include("./gen/connector.gen.php");
		$sql = "SELECT `efiewura`.*
				FROM `efiewura` , `space`
				WHERE `efiewura`.`availability` = 1
				AND `space`.`holder`= `efiewura`.`id`
				AND `space`.`id` = '$space_id'";
		$result = $con->query($sql);
			if($row = $result->fetch_assoc()){
			$efiewura = new efiewura(-1,$row);
			return $efiewura;
		   }
		   return 111;
	}
}

?>