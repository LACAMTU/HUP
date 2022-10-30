<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HÚB BOOKSTORE| Đăng nhập</title>
        <link rel="icon" href="./img/logo.png">
        <link rel="stylesheet" href="./CSS/signUp.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <div id="main_div">
            <div id="block">
                <div id="flex">
                        <div id="text">
                            <h1>Welcome Back</h1>
                        </div>
                        <div>
                        <a href="./signup.php"><svg class="cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg></a> 
                        </div>
            </div>
            <div class="form_div">
                    <form name = 'Login' action="process_login.php" method="POST">
                    <div class="broder">
                              <h4> <strong>EMAIL</strong> </h4>
                              <input type="email" id="email" name ="email" class="control" placeholder="name@gmail.com" pattern="[^ @]*@[^ @]*" value required>
                         </div>

                         <div class="broder">
                              <h5> <strong>PASSWORD</strong> </h5>
                              <input type='password' id='password' name='password' class='control' placeholder='Nhập Mật Khẩu' value required>                          
                              <br>
                              <button class="join_btn">Đăng nhập</button>
                              <a href="./signup.php">Chưa có tài khoản?</a>
                         </div>
                    </form>       
    </body>
</html>