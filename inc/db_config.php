<?php

$host = "localhost";
$user = "root";
$pass = "1234";
$dbname = "hatekhori";

$con = mysqli_connect($host,$user,$pass,$dbname);

if (!$con) {
	die("Connection Error");
}

