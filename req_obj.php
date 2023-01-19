<?php
include_once("installation request.php");
//include_once("db connect.php");

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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $labid = $_POST["lab_id"];
        $software = $_POST["software"];
        $version = $_POST["version"];
        $req_date = $_POST["d1"];
        $required_date = $_POST["d2"];
        $status=0;
    }
    $c = new request();
    //echo "reg complaint constructor";

    $c->register($labid,  $req_date,  $status, $software,  $required_date,$version);




    ?>
</body>

</html>