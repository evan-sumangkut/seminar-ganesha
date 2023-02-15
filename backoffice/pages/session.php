<?php 

	session_start();
    if(isset($_SESSION['status'])){
        if($_SESSION['status']=="login"){
            return;
        }
    }
	header("location:sign-in.php");
    return;

?>