<?php

//abstract 
class Model2 {

		private $ID;
		private $time_created;
		private $availability = 0;
		public $table = "model";
		private $load = array();
		public $exits = 0;
		public $msg;

	public function __construct($id,$load){
		if($id==0){
			$this->create($load);
			$this->settime_created();
			$this->exits = 1;
		}elseif($id!=-1){
			$this->setID($id);
			$load = $this->get_turple();
			
		if(is_array($load)){
			$this->exits = 1;
			return $this->load;

		}
		else{
			$this->exits = 0;
			echo "here";
			return 111;		
		}
			$this->settime_created();
		}else{
			$this->setID($load['id']);
			$this->exits = 1;
		}

		$this->setter($load);
	}

	protected function setter($load)
	{
		if(is_array($load)&&$load!=0)
		foreach ($load as $key => $value) {
				$this->load[$key] = $value;
				//echo $key.": ".$this->load[$key];
		}
		if(is_array($load)){
			return $this->load;

		}
		else{
			return 111;		
		}
	}

	protected function get_turple(){
		return $this->read('*',1);
	}


	private function setID($id){
		$this->ID = $id;
	}

	public function getID(){
		return $this->ID;
	}

	public function getexits(){
		return $this->exits;
	}

	private function settime_created(){
		$this->time_created = $this->read('time_created',0);
	}



	public function gettime_created(){
		return $this->time_created;
	}



	function avail(){
	 $this->update($this->set("availability" , 1 ));
	 $this->setavailability(1);
	}



	function unavail(){
	 $this->update($this->set("availability" , 0 ));
	 $this->setavailability(0);
	}



	private function setavailability($av){
		$this->availability = $av;
	}



	public function getavailability(){
		if( $this->availability === 1 ){
			return true;
		}elseif( $this->availability === 0 ){
			return false;
		}
	}


/*CRUD FUNCTIONS
 *
 */
/*CREATE FUNCTION*/
	protected function create($load){

		include("./gen/connector.gen.php");
		
		if(is_array($load)&&$load!=0){

		$sqlIntro = "INSERT INTO $this->table ( `availability` ";
		$sqlMid = ") VALUES ( 2 ";
		$sqlVals = "";
		$sqlKeys = "";
			$i=0;
			foreach ($load as $key => $value) {
				$sqlKeys = $sqlKeys.", `$key` ";
				$sqlVals = $sqlVals.", '".$value."' ";
				$i++;
			}
		$sql = $sqlIntro.$sqlKeys.$sqlMid.$sqlVals.")";
		}else{
		    
		$sql = "INSERT INTO $this->table ( availability ) 
				VALUES ( 2 )";
}
		if ($con->query($sql) === TRUE) {

   				$this->setID($con->insert_id);
				$this->setavailability(2);

   				$msg = "record ".$con->insert_id." created for ".$this->table;
		} else {
   				$msg = 111;
		}
	return $msg;
	}

	



/*READ FUNCTION*/
	protected function read($attr, $avail){
		$id = $this->getID();
			include("./gen/connector.gen.php");
		$sql = "SELECT $attr 
				FROM $this->table
				WHERE id = $id
				";
		$sql = $sql.(($avail==1)? " AND `availability` = 1":"");
		//echo $sql;
		$result = $con->query($sql);
		$row = $result->fetch_assoc();
			if ($row) {
				if($attr=='*' || contains(',' , $attr ))
 			  		return $row;
 			  	else
 			  		return $row[$attr];
			} else {
			 return  111;
			}

			 return 111;
	}



/*UPDATE FUNCTION*/
	protected function update($set){
			include("./gen/connector.gen.php");
			$sql = "UPDATE $this->table 
					SET $set
					WHERE id = $this->ID";
			if ($con->query($sql) === TRUE) {
 			  $msg = "record updated";
			} else {
			  $msg = 111;
			}
		return $msg;
		}


public function set($attr , $val )
{
	return " `$attr` = '".$val."'";
}

/*DELETE FUNCTION*/
	protected function delete(){
			include("./gen/connector.gen.php");
			$sql = "DELETE
					FROM $this->table
					WHERE id = $this->ID";

			if ($con->query($sql) === TRUE) {
 			  $msg = "record deleted";
			} else {
			  $msg = 111;
			}
		return $msg;
		}

// returns true if $needle is a substring of $haystack
}
?>
