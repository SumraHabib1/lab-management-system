<?php
include_once ("lab_info.php"); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="lab.css" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <title>Lab management system</title>
  </head>

  <body>
    <header id="head1">
      <div class="head">
        <img src="logo.png" alt="logo" />
        <h1>LAB MANAGEMENT SYSTEM</h1>
      </div>
    </header>

    <nav id="nav">
      <div class="nav">
        <ul>
          <li class="item"><a href="lab attendant screen.html">Home</a></li>

          <li class="item"><a href="">reviews</a></li>
          <li class="item"><a href="">contact us</a></li>
          <li class="item">
            <a class="icon" href=""
              ><i class="material-icons" style="color: rgb(0, 128, 128)" ;
                >phone</i
              ></a
            >
          </li>
        </ul>
      </div>
    </nav>

    <div class="view">
      <table id="view_labrecord">
      <tr>
          <th>Lab id</th>
          <th>Lab name</th>
          <th>Attendant id</th>
          <th>No. of Computers</th>
          <th>fans</th>
          <th>lights</th>
          <th>AC</th>
          <th>Action</th>
        </tr>
        <?php
        $labs= new lab;
        $result = $labs->getdata();
        if($result)
        {
          // echo "hii";
        foreach($result as $row)
          {
            // echo "hii";
            ?>
            
            <tr>
            <td><?= $row['lab_id'] ?></td>
            <td><?= $row['lab_name'] ?></td>
            <td><?= $row['attendant_id'] ?></td>
            <td><?= $row["no_of_comp"] ?></td>
            <td><?= $row["no_of_fans"] ?></td>
            <td><?= $row["no_of_lights"] ?></td>
            <td><?= $row["no_of_AC"] ?></td>
             <td><button onclick="document.location='update_labrecord.html'">update</button></td>
          </tr> 
          <?php 
          }
       }
       
        else
        {
          echo "no records";
        }
       
        ?>
       
        
        <!-- <tr>
          <td>2</td>
          <td>Project Lab</td>
          <td>Umer</td>
          <td>25</td>
          <td>4</td>
          <td>4</td>
          <td>1</td>
          <td><button onclick="document.location='update_labrecord.html'">update</button></td>
        </tr>
        <tr>
          <td>3</td>
          <td>Mphil Lab</td>
          <td>Abdullah</td>
          <td>30</td>
          <td>4</td>
          <td>4</td>
          <td>2</td>
          <td><button onclick="document.location='update_labrecord.html'">update</button></td>
        </tr> -->
        </table>

    </div>
  </body>
</html>
