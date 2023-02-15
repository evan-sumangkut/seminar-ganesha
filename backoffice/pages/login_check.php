<?php 
include '../../connection.php';

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