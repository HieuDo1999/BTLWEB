
<div class="header">
    <div class="menu_header">
         <div class="list_header">
             <ul>
                <li><a href="http://localhost/WEB/?c=AccountController&m=home"><i class="fas fa-home"></i>
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
        <?php  $cus=(isset($_SESSION['ss_user_token']) && $_SESSION['ss_user_token']['level'] == 1) ? 
        $_SESSION['ss_user_token']['username'] : ""; ?>
            <?php if (!$cus): ?>
                 <div id="re_lo">
                    <span><a href="?c=AccountController&m=viewSignUpForm">Đăng ký</a></span>
                    
                    <span><a href="http://localhost/WEB/?c=AccountController&m=login">Đăng nhập</a></span>
                </div>
                <?php else: ?>
                    <div id="re_lo"><span><a href="?c=AccountController&m=logout">Đăng Xuất</a></span></div>
            <?php endif ?> 
            <div >
               <div class="cart"><a href="http://localhost/WEB/?c=PlaceOrderController&m=viewCart">
                   <i class="fas fa-shopping-cart "></i>
               </a></div>
            </div> 
        </div>
        
    
    <div class="logoheader">
        <div id="img"><img id="logo" src="http://localhost/WEB/MVC/public/image/logobanh.png"></div>
        <div id="logoheader">Chức Đào Bakery </div>
        <div class="search">
            <form action="?c=ProductController&m=viewProductByName" method="POST">
                 <input  placeholder="tên sản phẩm"  id="text_search" type="text" name="product_name">
                <input id="submit_search" type="submit" name="" value="Tìm kiếm ">
                
            </form> 
           
        </div>           
        
    </div>
    
</div>
        