<?php if(!isset($_SESSION['ss_user_token'])) die ("not found file"); ?>
<h1>home_ admin</h1>
<h1>Hello <?php


include_once ('./MVC/view/components/header.php');echo "<hr/>";

?></h1>
<a href="http://localhost/WEB/?c=CustomerController&m=getListCustomer" > Danh sach Cus</a>
<a href="http://localhost/WEB/?c=ProductController&m=getListProduct" > Danh sach product</a>