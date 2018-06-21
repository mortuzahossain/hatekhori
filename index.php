<?php
include 'inc/db_config.php';

session_start();

if (!isset($_SESSION['id'])) {
    header('Location:login/login.php');
    exit();
}

$fname = $_SESSION['firstname'];
$id_no = $_SESSION['id_no'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Project || Index Page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <div>
         <a href="login/logout.php" class="right-shift"><button class="btn btn-success">Logout</button></a>
    </div>
	
	<div class="text-center header-img">
		<a href="index.php"><img class="logo" src="img/logo.jpg"></a>
	</div>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>