<?php 

session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: login.php");
	}
/*
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: login.php");
	}
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"
</head>  
<body>
    <div class="container">
    <h2 class="text-center text-success">welcome <?php echo $_SESSION['firstname']; ?></h2>
    <a href="logout.php">LOGOUT</a>
    </div>
</body>
   
</html>