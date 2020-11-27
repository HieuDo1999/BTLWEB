<?php if(!isset($_SESSION['ss_user_token'])) die ("not found file"); ?>
<?php

include_once ("./MVC/view/components/header.php");
echo "<hr/>";

?>
<a href="http://localhost/WEB/?c=AdminController&m=getListCustomer" > Danh sach Cus</a>