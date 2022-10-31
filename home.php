
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!--Đảm bảo hiển thị tương thích -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HÚP | BOOK STORE </title>
    <link rel="icon" href="img/logo2.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style ="background-color: hsl(205, 60%, 88%)">
        <div id="wrapper">
            <div id="header">
                <a href="" class="logo">
                    <div style = "text-align:center">
                    <img src= "img/logo2.png" text-align = "center" alt="Submit" vspace = "10" width="100" height="100"/>
                    </div>
                </a>
                    <?php  
                        session_start();
                        if (!$_SESSION){
                    ?>
                    <nav class="navbar bg-light">
                        <div class="container-fluid"; style ="background-color: hsl(205, 60%, 88%)">
                            <a class="navbar-brand" href="./LOGIN_SIGNUP/login.php">
                                <img src="./img/user.png" alt="" width="20" height="20" class="d-inline-block align-text-top">Đăng Nhập
                            </a>
                        </div>
                    </nav>
                    <?php
                    } else
                    {
                        $pw = $_SESSION['password'];
                        require_once './LOGIN_SIGNUP/config.php';
                        $sql = "SELECT * from users where pass = '$pw'";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        echo "<h4>$row['username']</h4> <a href='./LOGIN_SIGNUP/logout.php'>Đăng xuất</a>";
                    }
                    ?>
                   
                    <ul class="nav nav-pills nav-fill" >
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"  style="background-color: lightslategray" href="home.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gioithieu.php" style = "color: black">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sanpham.php" style = "color: black">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lienhe.php" style = "color: black">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </li>
                    </ul>

                    <br/>
                    <div style = "text-align:center">
                        <img  src= "img/bkg.png" alt="Submit" vspace = "10" hspace="475" width="automatic" height="300">
                    </div>

                <div id="actions">
                    
                    <div class="item">
                        <a href="../features/login.php" data-original-title="Dang nhap" class="tooltip">
                            <img src="./img/user.png" alt="" class=""><span class="tooltiptext">Đăng nhập</span>
                        </a>
                    </div>
                </div>
            </div>


            <h1 style="text-align:center; background-color: lightslategray; color: white;">BEST SELLERS</h1>
        
            <div id="wp-products">
                <div style= "width:25%;padding:20px;text-align:justify; float:left; box-sizing: border-box">
                    <div style="background-color: lightgray; padding: 10px";boder-radius:10px>
                        <img style= width:100% src="img/cam.png" alt=""/>
                        <h2 style ="text-align:center" > Cây Cam Ngọt Của Tôi </h2>
                        <p> Làm quen với Zezé, cậu bé tinh nghịch siêu hạng đồng thời cũng đáng yêu, với ước mơ lớn lên trở thành nhà thơ cổ thắt nơ bướm. Chẳng phải ai cũng công nhận khoản “đáng yêu” kia đâu nhé. Bởi vì, ở cái xóm ngoại ô nghèo ấy, nỗi khắc khổ bủa vây đã che mờ mắt người ta trước trái tim thiện lương cùng trí tưởng tượng tuyệt vời của cậu bé con năm tuổi. 
                        </p>
                        <div class="stars" style ="text-align:center">
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                        </div>
                        <p style ="text-align:center"><b>Giá: 108.000 VNĐ</b></p>
                    </div>
                </div>

                <div style= "width:25%;padding:20px;text-align:justify; float:left; box-sizing: border-box">
                    <div style="background-color: lightgray;padding:10px";boder-radius:10px>
                        <img style= width:100% src="img/luat.jpg" alt=""/>
                        <h2 style ="text-align:center" > Luật Hấp Dẫn </h2>
                        <p>Cách chúng ta suy nghĩ tạo nên thực tế cuộc sống của chúng ta. Nuôi dưỡng tâm trí và linh hồn chính là nuôi dưỡng con người chân thực của mình, để chữa lành bản thân từ bên trong và khơi gợi những sức mạnh tiềm ẩn. 
                        </p>
                        <div class="stars" style ="text-align:center">
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                        </div>
                        <p style ="text-align:center"><b>Giá: 108.000 VNĐ</b></p>
                    </div>
                </div>
                
                <div style= "width:25%;padding:20px;text-align:justify;float:left; box-sizing: border-box">
                    <div style="background-color: lightgray;padding:10px";boder-radius:10px>
                        <img style= width:100% src="img/xerac.jpg" alt=""/>
                        <h2 style ="text-align:center" > Bài Học Diệu Kỳ Từ Chiếc Xe Rác </h2>
                        <p> “Có những người giống như “chiếc xe rác” vậy: họ chứa trong mình đầy “rác rưởi”-sự thất vọng, tức giận và chán nản. Và tất nhiên, họ phải tìm chỗ để trút bỏ mớ rác rưởi đó. Nếu thấy họ trút lên bạn thì bạn đừng đón nhận. Hãy mỉm cười, vẫy chào, chúc họ vui, rồi tiếp tục công việc của mình. Cứ tin tôi đi, rồi bạn sẽ thấy hạnh phúc hơn.”-David J.Pollay 
                        </p>
                        <div class="stars" style ="text-align:center">
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                        </div>
                        <p style ="text-align:center"><b>Giá: 100.000 VNĐ</b></p>
                    </div>
                </div>
            
                <div style= "width:25%;padding:20px;text-align:justify; float:left; box-sizing: border-box">
                    <div style="background-color: lightgray;padding:10px";boder-radius:10px>
                        <img style= width:100% src="img/hoa.png" alt=""/>
                        <h2 style ="text-align:center" > Hoa Vẫn Nở Mỗi Ngày </h2>
                        <p> “Một tiểu thuyết đầy cảm xúc, một cuốn sách đưa ta đi từ tiếng cười đến những giọt nước mắt với các nhân vật hài hước và cuốn hút.”-Ban giám khảo giải thưởng Prix des Maisons de la Presse. 
                        </p>
                        <div class="stars" style ="text-align:center">
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                            <span>
                                <img src="img/star.png" alt="">
                            </span>
                        </div>
                        <p style ="text-align:center"><b>Giá: 209.500 VNĐ</b></p>
                    </div>
                </div>
            </div>
            
        </div>


        <br/><div id="footer">
            <h3 style ="text-align:center" >  Cảm ơn bạn đã ghé thăm HÚP BOOK STORE </br> <h3> <br/>
            </div>

            
                <br/> <p style ="text-align:center"><b><br/>Mang kiến thức đến cho độc giả!<br/>
                 Bạn cần sách? Chúng tôi có!</b></p>
            </div> 
            <div style= "width:30%;float:left">
            
                <h3>      HÚP BOOK STORE</h3>
                <h3>          -HUB-</h3> 
            <div style= "width:30%;float:left">
                <ul class="quick-menu">
                    <div class="item">
                        <a href="">Trang chủ</a>
                    </div>
                    <div class="item">
                        <a href="">Giới thiệu</a>
                    </div>
                    <div class="item">
                        <a href="">Sản phẩm</a>
                    </div>
                    <div class="item">
                        <a href="">Liên hệ</a>
                    </div>  
            </div>  
        
                </ul>
            </div> 

             <div class="box">
                <h3>LIÊN HỆ</h3>
                <div class="textwidget">
                    <p><strong>Địa chỉ</strong>: <a href="https://goo.gl/maps/WxVPLtNa7NB32Yee7">56, Hoàng Diệu 2, phường Linh Chiểu, quận Thủ Đức, TP.Thủ Đức</a></p>
                    <p><strong>Điện thoại</strong>: 0903-663-733</p>
                    <p><strong>Email</strong>: hup.bookstore@gmail.com</p>
                    <p><strong>Thời gian: </strong>24/7</p>
            
                </div>
            </div>

            <div class="footer_copyright_left" style ="text-align:center" >© HUB - 2022 BẢN QUYỀN CỦA HÚP BOOK STORE | hupbookstore.vn <br></div>
  			

        </div> 
</body>

</html>