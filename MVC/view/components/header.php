
<div class="header">
    <div class="menu_header">
         <div class="list_header">
             <ul>
                <li><a href="http://localhost/WEB/?c=AccountController&amp;m=home"><i class="fas fa-home"></i>
                Trang Chủ</a></li>
                <li>
                    <a href="#">Loại Sản Phẩm</a>
                    <div class="list_navigation">
                        <!-- <br />
<b>Warning</b>:  Undefined variable $listSupplier in <b>C:\xampp\htdocs\WEB\MVC\view\components\header.php</b> on line <b>11</b><br />
<br />
<b>Warning</b>:  foreach() argument must be of type array|object, null given in <b>C:\xampp\htdocs\WEB\MVC\view\components\header.php</b> on line <b>11</b><br />
 <--></-->
                    </div>
                </li>
                <li><a href="">Giới Thiệu</a></li>
                <li><a href="">Liên Hệ</a></li>
            </ul>
         </div>       
                                     <div id="re_lo">
                    <a href="?c=AccountController&amp;m=viewSignUpForm">Đăng ký</a>
                    
                    <a href="http://localhost/WEB/?c=AccountController&amp;m=login">Đăng nhập</a>
                </div>
                 

        </div>
        
    
    <div class="logoheader">
        <div id="img"><img id="logo" src="http://localhost/WEB/MVC/public/image/logobanh.png"></div>
        <div id="logoheader">Chức Đào Bakery </div>
        <div class="search">
            <form action="?c=ProductController&amp;m=viewProductByName" method="POST" style="
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 1px;
    margin-right: auto;
">
                 <input placeholder="tên sản phẩm" id="text_search" type="text" name="product_name">
                <input id="submit_search" type="submit" name="" value="Tìm kiếm ">
                
            </form> 
           
        </div>  
        <div style="width: 10%;display:flex;margin-left: auto;">               
            <div class="cart">
                <a href="http://localhost/WEB/?c=PlaceOrderController&amp;m=viewCart">
                <i class="fas fa-shopping-cart" style="font-size: 50px;"></i>
                </a>
           </div>
        </div>         
        
    </div>
    
</div>