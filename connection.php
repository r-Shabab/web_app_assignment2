<?php
 // Connect to the database
$server = "127.0.0.1"; // server should be localhost or 127.0.0.1
$username = "root";
$password = "";
$db = "webappa2";
$con = mysqli_connect($server, $username, $password, $db);
if(!$con){
    die("Connection to database failed due to ".mysqli_connect_error());
}
?>