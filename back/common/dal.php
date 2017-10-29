<?php
class DAL {
    private $host ='127.0.0.1';
    private $db ='northwind';
    private $user='root';
    private $pass='';
    private $charset='utf8';
    private $pdo;
    private $dsn;
    private $opt;
    private $conn;

 function __construct(){
     $this->dsn="mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
     $this->opt=[
         PDO::ATTR_ERRMODE     =>PDO::ERRMODE_EXCEPTION,
         PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC,
         PDO::ATTR_EMULATE_PREPARES =>false
     ]; 
 }
 function openConnection(){
     try{
         $this->conn=new PDO($this->dsn, $this->user, $this->pass, $this->opt);
         return $this->conn;
         echo "Connected successfully";
     }
     catch(PDOException $e){
         print "ERROR!".$e->getMessage()."<br/>";
     }
 }
function closeConnection(){
    $conn=null;
}
    public function executeStatement($query){
        $conn = $this->openConnection();
            $stmt=$conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }   

 public function bind($param, $value, $type = null){
		if(is_null($type)){
			switch(true){
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
					default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
       


public function lastInsertId(){
		$this->dbh->lastInsertId();
	}


}
?>