
<div class="header">
    <div class="menu_header">
         <div class="list_header">
             <ul>
                <li><a href="http://localhost/WEB/MVC/view/customer/index.php"><i class="fas fa-home"></i>
                Trang Chủ</a></li>
                <li>
                    <a href="#">Loại Sản Phẩm</a>
                    <div class="list_navigation">
                        <!-- <?php foreach ($listSupplier as $key => $value): ?>
                            <a href="#" class="item_navigation"><?php echo $value->supplier_name ?></a>
                        <?php endforeach ?> -->
                    </div>
                </li>
                <li><a href="">Giới Thiệu</a></li>
                <li><a href="">Liên Hệ</a></li>
            </ul>
         </div>       
        
            <?php if (1): ?>
                 <div id="re_lo">
                    <span><a href="#">Đăng ký</a></span>
                    
                    <span><a href="http://localhost/WEB/?c=AccountController&m=login">Đăng nhập</a></span>
                </div>
                <?php else: ?>
                    <div id="re_lo"><span><a href="#">Đăng Xuất</a></span></div>
            <?php endif ?> 
            <div >
               <div class="cart"><a href="http://localhost/WEB/MVC/view/customer/cartDetail.php">
                   <i class="fas fa-shopping-cart "></i>
               </a></div>
            </div> 
        </div>
        
    
    <div class="logoheader">
        <div id="img"><img id="logo" src="http://localhost/WEB/MVC/public/image/logobanh.png"></div>
        <div id="logoheader">Chức Đào Bakery </div>
        <div class="search">
            <form action="" method="POST">
                 <input id="text_search" type="text" name="textsearch">
                <input id="submit_search" type="submit" name="" value="search">
                <a href="http://localhost/WEB/MVC/view/customer/cart.php"><i class="fas fa-shopping-cart fa-2x"></i></a>
            </form> 
           
        </div>           
        
    </div>
    
</div>
        