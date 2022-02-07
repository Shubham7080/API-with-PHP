<?php 


class DB{
    protected $server;
    protected $user;
    protected $password;
    protected $dbname;
    protected $conn;

    public function __construct()
{
    $this->server = "localhost:3308";
    $this->user = "root";
    $this->password = "";
    $this->dbname = "Dbphp";
    $this->conn = mysqli_connect($this->server,$this->user,
    $this->password,$this->dbname);
        
    }

    public function getConnection(){
        return $this->conn;
    }
}
$db = new DB();
?>