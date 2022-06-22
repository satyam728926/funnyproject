<?php
$servername = "localhost";
$username = "root";
$password = "";
// $login= $_POST['inputname'];

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
 
}else{
  // echo("succesfull");
}
$conn -> select_db("fun_project");
?>