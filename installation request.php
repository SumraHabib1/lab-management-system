<?php
include("db connect.php");
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
class request 
{
   
    //private $req_id;
    private $lab_id;

    private $req_date;
    private $return_date;
    private $req_status;
    private $software_name;
   
    // Methods
    
    public function __construct(){
        $obj = new dbase;
        $this->conn = $obj->connect();
        echo "hello";

    }
    public function register()
    {               

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
           // $this->complaint_id = "  ";
             $this->lab_id = $_POST["lab_id"];
            if ($_POST["compid"] != NULL) {
                 $this->comp_id = $_POST["compid"];
            }
            else
            {
                echo "comp  null";
                $this->comp_id = NULL;
            }
     $this->complaint_subject = $_POST["complaintsubject"];
    $this->complaint_description = $_POST["complaint_description"];
        $this->complaint_date = $_POST["d"];
            $this->complaint_status =0;

            }
           echo $this->lab_id;
       echo  $this->comp_id;
            $sql = "INSERT INTO complaint (complaint_id,st_id,t_id,attendant_id,lab_id,comp_id,complaint_status,  complaint_date,complaint_description,complaint_subject) VALUES (NULL, NULL, NULL, NULL,' $this->lab_id', '$this->comp_id','$this->complaint_status','$this->complaint_date','$this->complaint_description','$this->complaint_subject')";
            mysqli_query($this->conn, $sql);
        echo ("successful");
        
    }
}

$c = new registercomplaint;
$c->register();

 ?>
   public function view_request()
    { }
    public function reg_installation_req()
    {   
    }
    public function update_request()
    {}
    public function delete_request()
    {}

    public function respond_request()
    { }
  
}
?>
</body>
</html>