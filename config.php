<?php
$XVWA_WEBROOT = "";
$host = "localhost";
$dbname = 'xvwa';
$user = "root";
$pass = "a_F3k3_Password";
$conn = new mysqli($host,$user,$pass,$dbname);
$conn1 = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
