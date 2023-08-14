<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "mim's_boutique";

try {
  $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if (isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
  $Confirm_password = $_POST['Confirm_password'];
  $email = $_POST['email'];


if (validate_username($username) && validate_password($password, $Confirm_password) && validate_email($email)) {
  $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
  $connection->prepare($sql)->execute([$username, $password, $email]);
  header("location: login.php");
} else {
  if (strlen($username) <= 3) {
    echo "<div class='message'><br><b style='color:pink; '>Contains minimun three characthers.<br>Please, enter the new username</b></div>";
  }
  if ($password != $Confirm_password && !preg_match('/[A-Z]/', $password && strlen($password) <= 8)) {
    echo "<div class='message'><br><b style='color:pink; '>Password isn't match and <br> you don't have one capital letter.</b></div>";
  }
  if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
    echo "<div class='message'><br><b style='color:pink; '>This email is not valid.</b></div>";
  }
  // header("location: register.php");
}
// echo "<script>window.location.href ='register.php';</script>";

}
//дали има такъв регистриран имейл и паролата се хешира

  //unset(); да изчезнат грешките


function validate_username($username){
  if (strlen($username) >= 3) {
    return true;
  } else {
    return false;
   
  }
}

function validate_password($password, $Confirm_password){
  if ($password == $Confirm_password) {
    return true;
  } elseif (preg_match('/[A-Z]/', $password)) {
    return true;
  }elseif (strlen($password) >= 8){
    return true;
  }
   else {
    return false;
  }
}


function validate_email($email){

  $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

  if (preg_match($pattern, $email)) {
    return true;
  } else {
    return false;
  }
}

?>


<html>

<head>
  <link rel="stylesheet" href="register.css">
</head>

<body>

  <div class="center">
    <h1>Register</h1>
    <form action="" method="post">

    <!-- <p style="text-decoration: none; color:pink;">*Contains minimum three characthers.</p> -->
      <div class="txt_field">
        <input type="text" name="username" placeholder="*Contains minimum three characthers." autocomplete="off">
        <span></span>
        <label>Username</label>
      </div>
      <!-- <p style="text-decoration: none; color:pink;">*Contains one capital letter and lenght of password is eight characters.</p> -->
      <div class="txt_field">
        <input type="password" name="password" placeholder="*Contains one capital letter and lenght eight .">
        <span></span>
        <label>Password</label>
      </div>

  
      <div class="txt_field">
        <input type="password" name="Confirm_password" >
        <span></span>
        <label>Confirm_password</label>
      </div>

      <!-- <p style="text-decoration: none; color:pink;">*Must contains{characher}@{extention}.</p> -->
      <div class="txt_field">
        <input type="email" name="email" placeholder="*Must contains{characher}@{extention}." autocomplete="off">
        <span></span>
        <label>Email</label>
      </div>
      <input type="submit" name="submit" value="Register">
     
      
      <br><br>
      
    </form>

</body>

</html>