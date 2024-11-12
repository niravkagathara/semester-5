<?php 

class Dbconfig{
    private $dbName = "student";
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    public $con = "";
    
    function __construct(){
        try {
            $this->con = mysqli_connect(
                $this->host,
                $this->username,
                $this->password,
                $this->dbName
            ) or die("some error accured ".mysqli_connect_error());  
        } catch (Exception $e) {
            echo "Exception accures";
        }
    }
}
?>