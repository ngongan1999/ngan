<?php  
class database{

	//DB Params
	private $dns = "mysql:host=bimldneotnil8ybedvyb-mysql.services.clever-cloud.com;dbname=bimldneotnil8ybedvyb";
	private $username ="uprilimetqwl4xxv";
	private $password="WXDtHfxA526SEYtmhM5V";
	private $conn;

	//DB Connect
	public function connect(){
		$this->conn = null;
		try{
			$this->conn = new PDO($this->dns,$this->username,$this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		}catch(PDOException $e){
			echo "Connection failed: ".$e->getMessage();
		}

		return $this->conn;
	}
}
?>

