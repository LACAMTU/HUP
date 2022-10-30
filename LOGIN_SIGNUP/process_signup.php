
<?php
if(isset($_POST)) 
{   
    require_once  'config.php';
    $mssv = $_POST['mssv'];
    $HoTen = $_POST['HoTen'];
    $user = $_POST['username'];
    $pwd = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $sql = "INSERT INTO `users`(`mssv`, `HoTen`, `username`, `pass`, `email`, `address`) VALUES ('$mssv','$HoTen','$user','$pwd','$email','$address')";
       if (mysqli_query($conn, $sql) > 0) {
           
           echo "<script type ='text/JavaScript'> 
           alert('Đăng ký thành công');
           location.assign('./login.php');
      </script>";
        }
        else 
        {
           echo "<script type ='text/JavaScript'> 
           alert('Tài khoản đã tồn tại');
           location.assign('./signup.php');
      </script>";
        }  
}
mysqli_close($conn);
?>
