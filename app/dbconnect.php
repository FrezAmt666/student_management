<?php 

    class db{
        private $host = "127.0.0.1:3308";
        private $dbname = "student_management";
        private $username = "root";
        private $password = "";
        public $conn;

        public function connect(){
            try{
                $this->conn= new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username,$this->password);
                // return $this->conn;
                echo "connection  success";
            }catch(Exception $e){
                echo "Connection fail";
            }
            
        }
    }
    $db = new db();
    $db->connect();

?>