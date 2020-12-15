
<div class="header">
    <div class="menu_header">
         <div class="list_header">
             <ul>
                <li><a href="http://localhost/BTLWEB/MVC/view/customer/index.php"><i class="fas fa-home"></i>
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
                
                <span><a href="#">Đăng nhập</a></span>
            </div>
            <?php else: ?>
                <div id="re_lo"><span><a href="#">Đăng Xuất</a></span></div>
        <?php endif ?>  
    </div>
    
    <div class="logoheader">
        <div id="img"><img id="logo" src="../../public/image/logobanh.png"></div>
        <div id="logoheader">Chức Đào Bakery </div>
        <div class="search"> 
            <input id="text_search" type="text" name="textsearch">
            <input id="submit_search" type="submit" name="" value="search">
        </div>           
        <div >
           <div class="cart"><a href="http://localhost/BTLWEB/MVC/view/customer/cartDetail.php">
               <i class="fas fa-shopping-cart fa-2x"></i>
           </a></div>
        </div>
    </div>
    
</div>
        