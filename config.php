<?php
$XVWA_WEBROOT = "";
$host = "localhost";
$dbname = 'xvwa';
$user = "root";
$password = "948493284JDKASJDKASjdksjdks434&$#";
$conn = new mysqli($host,$user,$pass,$dbname);
$conn1 = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$conn1->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
