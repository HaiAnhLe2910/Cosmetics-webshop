<?php
include ("Server.php");
include ("products.php");
if (isset($_SESSION['EMAIL'])) {
  	$_SESSION['msg'] = "You have loged in";
  	header('location: LogInSuccess.php');
  }
?>
<!DOCTYPE html>
<html>

<head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <title> My Account Page</title>
    <link rel="stylesheet" type="text/css" href="css1.css">
</head>

<body>
<?php
   include ("head.php");
?>

   <hr>
    <div class="big">
        <div class="reg">
            <h3>REGISTER</h3>
            <form name="formRegister" method="post" id="register" action="MyAccount.php">
                <div class="block1 left">
                    <br>
                    <br> First Name
                    <br>
                    <input type="text" name="fn" value="" required>
                    <br> Last Name
                    <br>
                    <input type="text" name="ln" value="" required>
                    <br> Email Address
                    <br>
                    <input type="email" name="regemail" value="" id="emailRegister" required>
                    <br> Password
                    <br>
                    <input type="password" name="regpass" value="" required>
                    <br>
                    <input class="button1" type="submit" name="reg" value="Register" onclick="Register();emailValidation(document.formRegister.regemail)"
                        id="registerBT" required>
                </div>
                <div class="block1 right">
                    <b>Address</b>
                    <br>
                    <br> Street and House Number/Postcode
                    <br>
                    <input type="text" name="StreetHouse" value="" required>
                    <br> Town/City
                    <br>
                    <input type="text" name="Town" value="" required>
                    <br> Country
                    <br>
                    <input type="text" name="Country" value="" required>
                    <br>
                    <br>
                    <br>
                    <b>Bank Account</b>
                    <br>
                    <br> BIC(Swift-code)
                    <br>
                    <input type="text" name="BC" value="" required>
                    <br> IBAN
                    <br>
                    <input type="text" name="IBAN" value="" required>
                    <br> Bank Account Owner
                    <br>
                    <input type="text" name="BCOwner" value="" required>
                    <br>


                </div>
            </form>
        </div>

        <style type="text/css">
            .text-center{
                text-align: center;
                width: 100% !important;
            }
            .text-center > label{
                width: 100% !important;
                padding: 4px 5px;
            }
            .text-center > input{
                width:55% !important;
            }
            #login > .center{
                width: 70% !important; 
            }
        </style>

        <div class="signin">
            <h3>LOG IN</h3>
            <form name="formLogIn" method="post" id="login" action="MyAccount.php">
                <div class="text-center">
                    <label for ="EMAIL">Email Address: </label>
                    <br>
                    <input type="email" name="EMAIL" value="" id="emailLogIn" required>
                </div>
                
                
                <div class="text-center">
                    <label for ="pass"> Password: </label>
                    <br>
                    <input type="password" name="pass" value="" required>
                </div>

                <div class="center">
                    <input id="check" type="checkbox" name="forgot" value="">Remember password?
                    <input class="button1" type="submit" name="login" value="Log In" onclick="LogIn();emailValidation(document.formLogIn.EMAIL)" id="loginBT">
                </div>
            </form>
        </div>
    </div>

    <script>

        function Register() {
            var mainForm = document.getElementById("register");
            var errorElement = "";
            for (i = 0; i < mainForm.length; i++) {
                if (i != 4) {
                    if (mainForm.elements[i].value == "") {
                        errorElement += ", " + i;

                    }
                }

            }
            errorElement = errorElement.slice(1);
            if (errorElement.length > 0) {
                alert("the textbox " + errorElement + " of Register form are empty");
            }

        }
        function LogIn() {
            var mainForm = document.getElementById("login");
            var errorElement = "";
            for (i = 0; i < mainForm.length; i++) {
                if (i != 2) {
                    if (mainForm.elements[i].value == "") {
                        errorElement += ", " + i;

                    }
                }

            }
            errorElement = errorElement.slice(1);

            if (errorElement.length > 0) {
                alert("the textbox " + errorElement + " of Log In form are empty");
            }
           

        }

        function emailValidation(input) {
            var re = /^([a-zA-Z0-9_.+-])+\@([a-zA-Z0-9-])+\.([a-zA-Z0-9]{2,4})+$/;
            return re.test(input);
        }
        document.getElementById("registerBT").addEventListener(
            "click",
            function () {
                if (!emailValidation(document.getElementById("emailRegister").value)) {
                    alert("Please input the email of Log In form again!");
                }
            }
        );
        document.getElementById("loginBT").addEventListener(
            "click",
            function () {
                if (!emailValidation(document.getElementById("emailLogIn").value)) {
                    alert("Please input the email of Log In form again!");
                }
                if(document.getElementById("check").checked)
            {
                createCookie(document.getElementById("EMAILL").value,document.getElementById("pass").value,100)
            }
            }
        );

        function setcookie(email, value, days) {
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                var expires = "; expires=" + date.toGMTString();
            }
            else
                var expires = "";

            document.cookie = email + "=" + value + expires + "; path=/";
        }

        function readCookie(email) {
            var emailC = email + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ')
                    c = c.substring(1, c.length);
                if (c.indexOf(emailC) == 0)
                    return c.substring(emailC.length, c.length);
            }
            return null;
        }
        function deleteCookie(email) {
            deleteCookie(email, "", -1);
        }
    </script>

    <?php
       include ("footer.php");
       include ("newsalert.php");  

       include ("Errors.php");
       print_r($errors);
    ?>
<body>

<html>