<!DOCTYPE html>
    <html lang="en">
<!-- /*--------------------------Head-------------------------------------*/ -->
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>HÚP BOOKSTORE | Đăng Ký</title>
            <link rel="icon" href="./img/logo.png">
            <link rel="stylesheet" href="./CSS/signUp.css">
            <script src = 'check.js' > </script> 
            <script type="text/javascript">
        function checkpass() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("repass").value;
            if (password != confirmPassword) {
                alert( "Mật khẩu không khớp!" );
                document.getElementById("repass").focus() ;
                return false;
            }
            return true;
        }
    </script>
        </head>
<!-- /*--------------------------Body-----------------------------------*/ -->
        <body>
            <div id="main_div">
                <div id="block">
                    <div id="flex">
                            <div id="text">
                                <h1>Đăng ký</h1>
                                <div id="p_tag">
                                    <p>Vui lòng nhập đầy đủ thông tin</p>
                                </div>
                            </div>
                            <div>
                                <a href="./index.php"><svg class="cross" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg></a> 
                            </div>
                    </div>
                <div class="form_div">
                <form  name='registration' action = 'process_signup.php' onSubmit="return validate();" method="POST">
                            <div class="broder">
                                <h4> <strong>Mã số sinh viên</strong> </h4>
                                <input type="text" id="mssv" name="mssv" class="control" placeholder="Mã số sinh viên" >
                            </div> 
                            <div class="broder">
                                <h4> <strong>Họ và Tên</strong></h4>
                                <input type="text" id="HoTen" name="HoTen" class="control" placeholder="Nhập họ và tên" >
                            </div>
                            <div class="broder">
                                <h4> <strong>Tên đăng nhập</strong></h4>
                                <input type="text" id="username" name="username" class="control" placeholder="Tên đăng nhập" >
                            </div>
                            <div class="broder">
                                <h5> <strong>Mật khẩu</strong> </h5>
                                <input type="password" id="password" name="password" class="control" placeholder="Nhập mật khẩu" >
                            </div>
                            <div class="broder">
                                <h5> <strong>Nhập lại Mật khẩu</strong> </h5>
                                <input type="password" id="repass" name="repass" class="control" placeholder="Nhập lại mật khẩu" >
                            </div>
                            <div class="broder">
                                <h4> <strong>EMAIL</strong> </h4>
                                <input type="email" id="email" name="email" class="control" placeholder="name@gmail.com" >
                            </div>
                            <div class="broder">
                                <h4> <strong>Địa chỉ </strong> </h4>
                                <input type="text" id="address" name="address" class="control" >
                                <br>
                                <button type = 'Submit' class="join_btn"  onclick="return checkpass()">Đăng ký</button>   
                            </div>
                        </form>
            </div>
        </body>
    </html>
