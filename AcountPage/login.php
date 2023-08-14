

<?php 

session_start();

$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "mim's_boutique";

try {
  $connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if ( isset( $_POST['submit'] ) ) {

	

	$username = $_POST['username'];
	$password = $_POST['password'];

	
	$stmt = $connection->prepare("SELECT * FROM users WHERE username = ? AND password = ?"); 
	$stmt->execute([ $username, $password ]); 
	$user = $stmt->fetch();
	
	if (  isset( $user ) ) {
	
	
		$_SESSION['user'] = $user;
		
		header("location: ../HomePage/index.php");
		exit;
		
	} else {
		
		echo "<b style='color:red;'>Невалидни потребителски данни</b><br><br>";
	}
}
	
?>	

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="login.css?а=2">
</head>

<body>

<div class="center">
      <h1>Login</h1>
      <form  action="" method="post">
        <div class="txt_field">
          <input type="text" name="username" required autocomplete="off">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required autocomplete="off">
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass"></div>
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="register.php">Signup</a>
        </div>
      </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
</body>
</html>



