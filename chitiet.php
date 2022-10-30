<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css" >
    </head>
    <body>
        <?php
        include '/.connect_db.php';
        $result = mysqli_query($con, "SELECT * FROM `sanpham` WHERE `id` = ".$_GET['id']);
        $product = mysqli_fetch_assoc($result);
        $imgLibrary = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = ".$_GET['id']);
        $product['images'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
        ?>
        <div class="container">
            <h2>Chi tiết sản phẩm</h2>
            <div id="product-detail">
                <div id="product-img">
                    <img src="<?=$product['pic']?>" />
                </div>
                <div id="product-info">
                    <h1><?=$product['ten']?></h1>
                    <h2>Tác giả:<?=$product['TacGia']?></h2>
                    <h3>Thể loại:<?=$product['TheLoai']?></h3>
                    <label>Giá: </label><span class="product-price"><?= number_format($product['Gia'], 0, ",", ".") ?> VND</span><br/>
                    <form id="add-to-cart-form" action="cart.php?action=add" method="POST">
                        <input type="text" value="1" name="quantity[<?=$product['id']?>]" size="2" /><br/>
                        <input type="submit" value="Mua sản phẩm" />
                    </form>
                    <?php if(!empty($product['pic'])){ ?>
                    <div id="gallery">
                        <ul>
                            <?php foreach($product['images'] as $img) { ?> 
                                 <li><img src="<?=$img['path']?>"/></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
                <div class="clear-both"></div>
                <?=$product['MoTa']?>
            </div>
        </div>
    </body>
</html>