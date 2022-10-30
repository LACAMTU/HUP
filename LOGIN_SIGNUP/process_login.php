<?php
if(isset($_POST)) 
{   
    session_start();  
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    require_once  'config.php';
    $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$pwd' Limit 1";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)  
    {    
        $row = mysqli_fetch_assoc($result); 
        $_SESSION['email']=$row['email'];      
        $_SESSION['name']=$row['HoTen'];   
        $_SESSION['password']=$row['pass'];   
        header("Location:http://localhost/HUP/home.php");  
    } else{
        ?>
     <script type ="text/JavaScript"> 
          alert("Email hoặc mật khẩu không tồn tại");
          location.assign("./login.php");
     </script>
<?php   }        
}  
?> 

