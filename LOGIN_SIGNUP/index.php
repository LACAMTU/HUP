<?php 
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <a href="logout.php">Logout</a>
</body>
</html>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>