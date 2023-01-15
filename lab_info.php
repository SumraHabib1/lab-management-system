<?php
 include ("db connect.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class lab
{
   
    // private $attendant_id;
    // private $lab_id;
    // private $no_of_comp;
    // private $no_of_fans;
    // private $no_of_comp;
    // private $no_of_lights;

    // private $lab_name;
    public function __construct(){
        $obj = new dbase;
        $this->conn = $obj->connect();
    }
    public function getdata()
    {
        $sql = "SELECT *  FROM labinfo";
   // $result = $this->conn->query($sql);
    $result =mysqli_query($this->conn, $sql);
        if($result) {
            echo "function";
            if ($result->num_rows > 0) {
                return $result;
            //    while($row = $result->fetch_assoc()) {
            //     echo "<br> id: ". $row["lab_id"]  . "<br>";
            // }
            } 
            else 
            {
                 echo "0 results";
                //return false;
            }
        }
   }
    // Methods
   public function get_comp_id()
    {
       
    }
    public function get_lab_id()
    {
       
    }
    public function get_comp_name()
    {
       
    }
    public function get_generation()
    {
       
    }
   
  
}
$labs= new lab;
$result = $labs->getdata();
?>
</body>
</html>