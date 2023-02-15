<?php 
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,'db_seminar');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
session_start();
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
    $_SESSION['error'] = "Username or Password is wrong, please recheck becarefull";
	header("location:sign-in.php");	
}
 
?>