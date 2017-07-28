<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index.php');
}
?>

<html>
<head>
<title>PHP Login & Register</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
       <a href="logout.php" class="btn btn-primary">Logout</a>
        <div style="width: 500px; margin: 50px auto;">
         <center>  <h3>Welcome <?php echo $_SESSION['username']; ?></h3></center>

        </div>
        <div class="fill">
		<center><a href="index1.php" class="btn btn-primary">Click here to fill admission Form</a></center></div>
    </div>
</body>
</html>