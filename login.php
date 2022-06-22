<?php
include "dbconnection.php";
$login= $_POST['inputname'];
// echo($login)

$sql_query="INSERT into visitors(inputs) values ('$login')";
(mysqli_query($conn,$sql_query));
?>