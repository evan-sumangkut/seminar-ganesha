<?php
$servername = "172.18.20.6";
$username = "root";
$password = "password";
$conn = new mysqli($servername, $username, $password,'db');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>