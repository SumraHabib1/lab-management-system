<?php
 include("app.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="lab.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>register complaint</title>
</head>

<body>
    <header id="head1">
        <div class="head">
            <img src="logo.png" alt="logo">
            <h1>LAB MANAGEMENT SYSTEM</h1>


        </div>
    </header>

    <nav id="nav">
        <div class="nav">
            <ul>
                <li class="item"><a href="student screen.html">Home</a></li>



                <li class="item"><a href="">reviews</a></li>

                <li class="item"><a href="">contact us</a></li>
                <li class="item"><a class="icon" href=""><i class="material-icons" style="color:rgb(0, 128, 128)"
                            ;>phone</i></a></li>


            </ul>
        </div>
    </nav>
    <main>

        <h1 class="h-primary center">REGISTER COMPLAINT</h1>

        <form  action="register complaint.php" method="POST" >
            <div class="form">

                <label for="labid">Select lab id:</label>
                <select id="lab_id" name="lab_id" required title="lab id" autocomplete="off" onchange="showcomp_id(this.value)">
                    <option value="" selected disabled hidden>select lab id </option>
                    <option value=3>BS lab</option>
                    <option value=5>mphil lab</option>
                    <option value=4>project lab</option>
                </select>



                <label for="complaint_sub">Select complaint subject:</label>
                <select name="complaintsubject" id="complaint_subject" required autofocus title="complaint_subject"
                    autocomplete="off" onchange="compid_enable();">
                    <option value="" selected disabled hidden>select complaint subject </option>
                    <option value="comp">computer</option>
                    <option value="infrastructure">infrastructure</option>
                </select>


                <label for="compid">Select computer id:</label>
                <select name="compid" id="comp_id" required autofocus title="comp_id"
                autocomplete="off" disabled="disabled">
                    <option value="-1" selected  hidden>select comp id </option>
                    <option value=3>11</option>
                    <option value=4>12</option>
                    <option value=5>13</option>
                </select>

                <label for="DATE">Date:</label>
                <input type="date" name="d" id="d1"  >

                <label for="complaint_des">Complaint description:</label>
                <textarea name="complaint_description" id="complaint_description" cols="30" rows="10" required autofocus
                    title="comp_id" autocomplete="off" oninput="complaint_pattern()"></textarea>
                    <label id="check_complaint" style="display:none;">enter valid text</label>



                <button  type="submit">SUBMIT</button>
            </div>
        </form>


    </main>
    <footer>
        <div class="foot">
            <div class="links">
                <h3>quick links</h3>
                <ul>
                    <li><a href="">delivery info</a></li>
                    <li><a href="">terms and conditions</a></li>
                    <li><a href="">reviews</a></li>
                    <li><a href="">return policy</a></li>
                    <li><a href="">privacy policy</a></li>
                </ul>
            </div>
            <div class="newsletter">
                <h2>GET OUR NEWS LETTER</h2>
                <form action="">
                    <input type="email" name="email" id="email" placeholder="enter email">
                    <button type="submit" style="color: teal;">SUBSCRIBE</button>
                </form>
            </div>
            <div class="socialmedia">
                <img src="" alt="icons">
            </div>
        </div>
        copyright &copy; www.CS LAB MANAGEMENT.com All rights are reserved

    </footer>
    <script>

        // ----------------------
        const dateInput = document.getElementById('d1');

        // Using the visitor's timezone
        dateInput.value = formatDate();

        function padTo2Digits(num) {
            return num.toString().padStart(2, '0');
        }

        function formatDate(date = new Date()) {
            return [
                date.getFullYear(),
                padTo2Digits(date.getMonth() + 1),
                padTo2Digits(date.getDate()),
            ].join('-');
        }

        // ---------------------

        function currdate() {
            var dt = new Date();
            document.getElementById('d1').value = dt;
        }

        function compid_enable()
         {
            if (document.getElementById('complaint_subject').value === "comp") {
                document.getElementById("comp_id").disabled = false;
            }

            else {
                document.getElementById("comp_id").disabled = true;
            }


        }
        function complaint_pattern(){
            let text = document.getElementById("complaint_description").value;

 const pattern =  /^[\W|A-Za-z]{3}[A-Za-z0-9-.,\s]+$/;
 let isValid = pattern.test(text);
 if (!isValid) {
                document.getElementById("check_complaint").style.display = 'block';
                document.getElementById("check_complaint").style.color = 'red';
            }
            if   (isValid)    {
                document.getElementById("check_complaint").style.display = 'none';

            }

}


function showcomp_id(str) {
//   if (str == "") {
//     document.getElementById("txtHint").innerHTML = "";
//     return;
//   }
//document.getElementById("comp_id").disabled = true;
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("comp_id").innerHTML = this.responseText;
  }
  xhttp.open("GET", "response.php?q="+str);
  xhttp.send();
}
    </script>
</body>

</html>
