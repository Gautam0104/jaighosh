<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jaighosh";

$dbconn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>