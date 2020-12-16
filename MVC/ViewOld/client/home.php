<h1> home client and customer</h1>
<a href="http://localhost/WEB/?c=AccountController&m=loginCustomer" > login</a>
<a href="http://localhost/WEB/?c=ProductController&m=getListProduct">danh sach product</a>
<a href="http://localhost/WEB/?c=PaymentController&m=viewFormPayment">Payment</a>
<a href="http://localhost/WEB/?c=AccountController&m=logout" > logout</a>

<?php 
$level= isset($_SESSION['ss_user_token'])?$_SESSION['ss_user_token']:"";
if($level!="")
echo $level['level'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <?php $product['id']=11  ?>
    <a href="http://localhost/WEB/?c=PlaceOrderController&m=deleteCart">delete cart</a>
    <?php 
        if(isset($_SESSION['cart'])){
            print_r($_SESSION['cart']);
        }
    ?>
    <a href="http://localhost/WEB/?c=PlaceOrderController&m=viewCart"> cart</a> 

</head>
<body>
   

</body>
</html>
