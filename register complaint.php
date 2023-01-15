<?php
include("db connect.php");
//include("register comp.php");
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
class registercomplaint
{
  //  private $complaint_id;
    private $lab_id;
   private $comp_id=-1;
    private $complaint_subject;
    private $complaint_description;
    private $complaint_date;
    private $complaint_status;
    private $q;
    public function __construct(){
        $obj = new dbase;
        $this->conn = $obj->connect();
        echo "hello";

    }
    public function selection()
    {
            $conn = new mysqli('localhost', 'root', '','lms1');
            $response = "";
            if(isset($_REQUEST['q'])){
            $q = $_REQUEST['q'];
            $sql = "SELECT comp_id FROM computer WHERE lab_id = ".$q;
            $query_result = mysqli_query($conn, $sql);

           if ($query_result->num_rows > 0) {
            
            while($row = $query_result->fetch_assoc()) {
              $response = $response . "<option> " .$row['comp_id']. " </option>";
        }
        //$response = $response. "<option> from if  </option>";
      } else {
        $response = $response. "<option> computer id not found  </option>";
      }
      
echo $response;
$conn->close();
}
//$response = $response."<option> Aqleem </option>";
}

    public function register()
    {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
           // $this->complaint_id = "  ";
             $this->lab_id = $_POST["lab_id"];
             if (isset(  $_POST["compid"])) {
              $this->comp_id = $_POST["compid"];       
                 }
                


     $this->complaint_subject = $_POST["complaintsubject"];
    $this->complaint_description = $_POST["complaint_description"];
        $this->complaint_date = $_POST["d"];
            $this->complaint_status =0;

            }
           echo $this->lab_id;
       echo  $this->comp_id;
       if (!isset(  $_POST["compid"])) {
             
       //  if ($_POST["compid"] == -1) {
           $sql = "INSERT INTO complaint (complaint_id,st_id,t_id,attendant_id,lab_id,complaint_status,  complaint_date,complaint_description,complaint_subject) VALUES (NULL, NULL, NULL, NULL,' $this->lab_id', '$this->complaint_status','$this->complaint_date','$this->complaint_description','$this->complaint_subject')";
           mysqli_query($this->conn, $sql);
           echo ("infrastructure successful");
         // }


    }
    else{
            $sql = "INSERT INTO complaint (complaint_id,st_id,t_id,attendant_id,lab_id,comp_id,complaint_status,  complaint_date,complaint_description,complaint_subject) VALUES (NULL, NULL, NULL, NULL,' $this->lab_id', '$this->comp_id','$this->complaint_status','$this->complaint_date','$this->complaint_description','$this->complaint_subject')";
            mysqli_query($this->conn, $sql);
            echo ("successful");

    }

    }
}

$c = new registercomplaint;
$c->register();
//$c->selection();

 ?>
</body>
</html>
