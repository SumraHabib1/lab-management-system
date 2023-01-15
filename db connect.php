<?php
class dbase{
     private $host="localhost";
   private $username="root";
    private $password="";
     private $dbname="lms1";

    public function connect()
    {
 $conn = new mysqli($this->host, $this->username, $this->password,$this->dbname);
        if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
        echo "connected";
        return $conn;
}
}
?>