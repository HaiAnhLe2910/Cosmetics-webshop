<?php
session_start();

// initializing variables
$errors = array(); 

// connect to the database
$db = mysqli_connect('studmysql01.fhict.local', 'dbi383721', '1234', 'dbi383721');

// REGISTER USER
if (isset($_POST['reg'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['fn']);
  $lastname = mysqli_real_escape_string($db, $_POST['ln']);
  $RegEmail = mysqli_real_escape_string($db, $_POST['regemail']);
  $RegPass1 = mysqli_real_escape_string($db, $_POST['regpass']);
  $streetHouse= mysqli_real_escape_string($db, $_POST['StreetHouse']);
  $town= mysqli_real_escape_string($db, $_POST['Town']);
  $country= mysqli_real_escape_string($db, $_POST['Country']); 
  $BIC=mysqli_real_escape_string($db, $_POST['BC']);
  $IBAN=mysqli_real_escape_string($db, $_POST['IBAN']); 
  $owner=mysqli_real_escape_string($db, $_POST['BCOwner']); 
      
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  // first check the database to make sure 
  // a user does not already exist with the same email
  $user_check_query = "SELECT * FROM users WHERE Email='$RegEmail'";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Email'] === $RegEmail) {
      array_push($errors, "Email already exists. Please input the email again!");
      
    }
    

  }
  if (!filter_var($RegEmail, FILTER_VALIDATE_EMAIL)) {
  array_push($errors,"Invalid email format"); 
}
  
  

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    echo "true";
  	$RegPass2 = md5($RegPass1);//encrypt the password before saving in the database

  	$query = "INSERT INTO `users` (`FirstName`, `LastName`, `Email`, `Password`, `PostcodeOrHouseStreet`, `TownOrCity`, `Country`, `BIC`, `IBAN`, `Owner`)"
  			    ."VALUES('".$firstname."', '".$lastname."', '".$RegEmail."', '".$RegPass2."', '".$streetHouse."', '".$town."', '".$country."', '".$BIC."', '".$IBAN."', '".$owner."')";
  	mysqli_query($db, $query);
  	$_SESSION['EMAIL'] = $RegEmail;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: LogInSuccess.php');
  }
}
// LOGIN USER
if (isset($_POST['login'])) {
    $LogInemail = mysqli_real_escape_string($db, $_POST['EMAIL']);
    $LogInPass = mysqli_real_escape_string($db, $_POST['pass']);
  
    if (empty($LogInemail)) {
        array_push($errors, "Email is required");
    }
    if (empty($LogInPass)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $LogInPass = md5($LogInPass);
        $query = "SELECT * FROM users WHERE Email='$LogInemail' AND Password='$LogInPass'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['EMAIL'] = $LogInemail;
          $_SESSION['success'] = "You are now logged in";
          header('location: LogInSuccess.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>