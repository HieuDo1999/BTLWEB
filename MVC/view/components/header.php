
<!DOCTYPE html>
<html>
    <head>
        <title>Shoping</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="./MVC/public/css/style.css">
    </head>
    <body>

        <div class="logoheader">
            <div><img id="logo" src="./MVC/public/image/logo.png"></div>
            <div id="logoheader"><h2>Mua sắp online</h2></div>
        </div>
        <header>
            <div class="wrapper">
                 <div>
                     <ul>
                        <li><a href="#">Trang Chủ</a></li>
                        <li>
                            <a href="#">Danh Mục Sản Phẩm</a>
                            <div class="list_navigation">
                                <!-- <?php foreach ($listSupplier as $key => $value): ?>
                                    <a href="#" class="item_navigation"><?php echo $value->supplier_name ?></a>
                                <?php endforeach ?> -->
                            </div>
                        </li>
                        <li><a href="">Về Chúng Tôi</a></li>
                        <li><a href="">Liên Hệ</a></li>
                    </ul>
                 </div>       
                
                <div class="search"> 
                    <div><input type="text" name="textsearch"></div>
                    <div ><input  type="submit" name="" value="search"></div>         
                </div>
                <div>
                    <span><a href="#">Đăng ký</a></span>
                    <span>|</span>
                    <span><a href="#">Đăng nhập</a></span>
                </div>
            </div>
        </header>
        
