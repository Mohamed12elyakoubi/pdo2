<?php
$dbsevername = 'localhost';
$username = "root"; 
$password = ""; 
$dbname = "Winkel"; 

$conn =  mysqli_connect($servername, $username, $password, $dbname);

echo "Connected to database ($dbname).";
$conn->close();
?>