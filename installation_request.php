<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="lab.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <title>installation request</title>
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
                <li class="item"><a href="student screen.html">Home</a></li>

                <li class="item"><a href="">reviews</a></li>
                <li class="item"><a href="">contact us</a></li>
                <li class="item">
                    <a class="icon" href=""><i class="material-icons" style="color: rgb(0, 128, 128)" ;>phone</i></a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <h1 class="h-primary center">INSTALLATION REQUEST</h1>

        <form action=" installation request.php"   method="POST">
            <div class="form">
                <label for="labid">Enter lab id:</label>
                <select id="lab_id" name="lab_id" required title="lab id" autocomplete="off"
                    onchange="compid_enable();">
                    <option value="" selected disabled hidden>select lab id</option>
                    <option value="BS">1 (BS lab)</option>
                    <option value="MS">2 (Mphil lab)</option>
                    <option value="PL">3 (project lab)</option>
                </select>

                <br />

                <label>List of softwares already installed:</label>

                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                    title="Type in a name" disabled="disabled" />

                <ul id="myUL" hidden>
                    <li><a href="#">MS OFFICE</a></li>
                    <li><a href="#">ARGO UML</a></li>

                    <li><a href="#">DEV C++</a></li>
                    <li><a href="#">VS CODE</a></li>
                </ul>

                <br />

                <label for="software">Enter required software:</label>
                <input type="text" name="software" id="software" required placeholder="Enter software name"
                    maxlength="20" pattern="[A-Za-z0-9 \s]*" />

                <br />
                <label for="version">Enter version:</label>
                <input   type="text" name="version" id="version" placeholder="Enter software version" required  maxlength="10" pattern="^[0-9][0-9 \.]*" />
         <label id="ver_check" style="display:none ;">enter valid version</label>
        

                <br />
                <label for="DATE">Date of request:</label>
                <input type="date" name="d1" id="d1" disabled="disabled" />

                <br />
                <label for="DATE">Date when software is required:</label>
                <input type="date" name="d1" id="d1" required />

                <button type="Submit">SUBMIT</button>
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
                    <input type="email" name="email" id="email" placeholder="enter email" />
                    <button type="submit" style="color: teal">SUBSCRIBE</button>
                </form>
            </div>
            <div class="socialmedia">
                <img src="" alt="icons" />
            </div>
        </div>
        copyright &copy; www.CS LAB MANAGEMENT.com All rights are reserved
    </footer>
    <script>
        // ----------------------
        const dateInput = document.getElementById("d1");

        // Using the visitor's timezone
        dateInput.value = formatDate();

        function padTo2Digits(num) {
            return num.toString().padStart(2, "0");
        }

        function formatDate(date = new Date()) {
            return [
                date.getFullYear(),
                padTo2Digits(date.getMonth() + 1),
                padTo2Digits(date.getDate()),
            ].join("-");
        }

        // ---------------------

        function currdate() {
            var dt = new Date();
            document.getElementById("d1").value = dt;
        }

        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }

        function compid_enable() {
            if (document.getElementById("lab_id").value === "") {
                document.getElementById("myInput").disabled = true;
            } else {
                document.getElementById("myInput").disabled = false;
                document.getElementById("myUL").hidden = false;
            }
        }
//        function version_check(){
//             let version = document.getElementById("version").value;
// const pattern = "^[0-9]{1,2}([,.][0-9]{1,2})?$";
// return pattern.test(version);
//         }
        function version_error(){
            let version = document.getElementById("version").value;
 const pattern = /[0-9 \.]*$/g;
 let isValid = pattern.test(version);
if(!isValid){
    document.getElementById("ver_check").style.display='block';
}
else{
    document.getElementById("ver_check").style.display='none';

}
        }
    </script>
</body>

</html>