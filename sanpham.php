<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link rel="stylesheet" href="reset.css">
    <!-- Link slider -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- slider -->
    <div class="container mt-5 pb-5">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="https://theme.hstatic.net/200000343865/1000938429/14/ms_banner_img2.jpg?v=52"
                        alt="Los Angeles" style="width:100%;">
                </div>
                <div class="item">
                    <img src="https://theme.hstatic.net/200000343865/1000938429/14/ms_banner_img3.jpg?v=52"
                        alt="Chicago" style="width:100%;">
                </div>
                <div class="item">
                    <img src="https://theme.hstatic.net/200000343865/1000938429/14/ms_banner_img4.jpg?v=52"
                        alt="New york" style="width:100%;">
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- Product 1 -->
    <div class="container my-5">
        <div class="d-flex align-items-center gap-3 p-4 mb-5" style="background-color: #17CAC4;">
            <i class="fa-solid fa-crown" style="font-size: 30px; color: white;"></i>
            <h1 class="text-secondary text-white mb-0" style="font-size: 30px;">Sách bán chạy</h1>
        </div>
        <!-- Sách bán chạy -->
        <div class="row">
            <div class="col-6 col-lg-3 col-md-4 mb-5">
                <div class="text-center">
                    <img class="img-thumbnail border-0" src="./img/xerac.jpg" alt="" style="height: 225px;">
                </div>
                <div style="height: 75px;">
                    <h2 class="mt-4">Bài Học Diệu Kỳ Từ Chiếc Xe Rác</h2>
                    <span class="mt-3 h2">100.000 đ</span>
                </div>
                <button type="button" class="btn btn-primary w-100 mt-3"
                    style="height: 40px; border-radius: 20px; font-size: 16px;">
                    <a href="chitiet.php" class="text-white text-decoration-none">Xem chi tiết</a>
                </button>
            </div>

            <div class="col-6 col-lg-3 col-md-4 mb-5">
                <div class="text-center">
                    <img class="img-thumbnail border-0" src="./img/cam.png" alt="" style="height: 225px;">
                </div>
                <div style="height: 75px;">
                    <h2 class="mt-4">Cây Cam Ngọt Của Tôi</h2>
                    <span class="mt-3 h2">110.000 đ</span>
                </div>
                <button type="button" class="btn btn-primary w-100 mt-3"
                    style="height: 40px; border-radius: 20px; font-size: 16px;">
                    <a href="chitiet.php" class="text-white text-decoration-none">Xem chi tiết</a>
                </button>
            </div>

            <div class="col-6 col-lg-3 col-md-4 mb-5">
                <div class="text-center">
                    <img class="img-thumbnail border-0" src="./img/danhthuc.jpg" alt="" style="height: 225px;">
                </div>
                <div style="height: 75px;">
                    <h2 class="mt-4">Đánh Thức Con Người Phi Thường Trong Bạn</h2>
                    <span class="mt-3 h2">100.000 đ</span>
                </div>
                <button type="button" class="btn btn-primary w-100 mt-3"
                    style="height: 40px; border-radius: 20px; font-size: 16px;">
                    <a href="chitiet.php" class="text-white text-decoration-none">Xem chi tiết</a>
                </button>
            </div>

            <div class="col-6 col-lg-3 col-md-4 mb-5">
                <div class="text-center">
                    <img class="img-thumbnail border-0" src="./img/doi.jpg" alt="" style="height: 225px;">
                </div>
                <div style="height: 75px;">
                    <h2 class="mt-4">Đời Ngắn Đừng Ngủ Dài</h2>
                    <span class="mt-3 h2">75.000 đ</span>
                </div>
                <button type="button" class="btn btn-primary w-100 mt-3"
                    style="height: 40px; border-radius: 20px; font-size: 16px;">
                    <a href="chitiet.php" class="text-white text-decoration-none">Xem chi tiết</a>
                </button>
            </div>
        </div>
    </div>
    <!-- Product 2 -->
    <div class="container my-5">
        <div class="d-flex align-items-center gap-3 p-4 mb-5" style="background-color: #17CAC4;">
            <i class="fa-solid fa-filter" style="font-size: 30px; color: white;"></i>
            <h1 class="text-secondary text-white mb-0" style="font-size: 30px;">Sách hot & Nổi bật</h1>
        </div>
        <!-- Sách hot và nổi bật -->
        <div class="col-6 col-lg-3 col-md-4 mb-5">
            <div class="text-center">
                <img class="img-thumbnail border-0" src="./img/luat.jpg" alt="" style="height: 225px;">
            </div>
            <div style="height: 75px;">
                <h2 class="mt-4">Luật Hấp Dẫn</h2>
                <span class="mt-3 h2">100.000 đ</span>
            </div>
            <button type="button" class="btn btn-primary w-100 mt-3"
                style="height: 40px; border-radius: 20px; font-size: 16px;">
                <a href="chitiet.php" class="text-white text-decoration-none">Xem chi tiết</a>
            </button>
        </div>

        <div class="col-6 col-lg-3 col-md-4 mb-5">
            <div class="text-center">
                <img class="img-thumbnail border-0" src="./img/20.jpg" alt="" style="height: 225px;">
            </div>
            <div style="height: 75px;">
                <h2 class="mt-4">Nếu Tôi Biết Được Khi Còn</h2>
                <span class="mt-3 h2">80.000 đ</span>
            </div>
            <button type="button" class="btn btn-primary w-100 mt-3"
                style="height: 40px; border-radius: 20px; font-size: 16px;">
                <a href="chitiet.php" class="text-white text-decoration-none">Xem chi tiết</a>
            </button>
        </div>

        <div class="col-6 col-lg-3 col-md-4 mb-5">
            <div class="text-center">
                <img class="img-thumbnail border-0" src="./img/giau.jpg" alt="" style="height: 225px;">
            </div>
            <div style="height: 75px;">
                <h2 class="mt-4">Nghĩ Giàu Làm Giàu</h2>
                <span class="mt-3 h2">100.000 đ</span>
            </div>
            <button type="button" class="btn btn-primary w-100 mt-3"
                style="height: 40px; border-radius: 20px; font-size: 16px;">
                <a href="chitiet.php" class="text-white text-decoration-none">Xem chi tiết</a>
            </button>
        </div>

        <div class="col-6 col-lg-3 col-md-4 mb-5">
            <div class="text-center">
                <img class="img-thumbnail border-0" src="./img/kim.jpg" alt="" style="height: 225px;">
            </div>
            <div style="height: 75px;">
                <h2 class="mt-4">Nhà Giả Kim</h2>
                <span class="mt-3 h2">79.000 đ</span>
            </div>
            <button type="button" class="btn btn-primary w-100 mt-3"
                style="height: 40px; border-radius: 20px; font-size: 16px;">
                <a href="chitiet.php" class="text-white text-decoration-none">Xem chi tiết</a>
            </button>
        </div>
    </div>
</body>
</html>