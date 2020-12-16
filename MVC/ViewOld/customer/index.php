<?php 
    if(!isset($_SESSION['ss_user_token'])) die ("not found file");
    include_once ('./MVC/view/components/header.php');
?> 
<h1>this is index of customer</h1>
<?php 
 
    include_once ('./MVC/controller//CustomerController.php');
   
?>
<h1>Danh sach cus</h1>
<a href="http://localhost/WEB/?c=CustomerController&m=viewFormAddCustomer">add customer</a>

<table id="cus" class="table table-striped table-bordered" style="width:100%" border="1">
        <thead>
            <tr>
                <th>Username</th>
                <th>Pass</th>
                <th>Name</th>
                <th>email</th>
                <th>sex</th>
                <th>phone</th>
                <th>adddress</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>

      <?php if(!empty($data)):  ?>
        
      <?php foreach($data as $customer):  ?>
        
      <tr> 
          <td><?php echo ($customer['username']); ?></td>
          <td><?php echo $customer['password']; ?></td>
          <td><?php echo ($customer['name']); ?></td>
          <td><?php echo $customer['email']; ?></td>
          <td><?php echo $customer['sex']; ?></td>
          <td><?php echo $customer['phone']; ?></td>
          <td><?php echo $customer['address']; ?></td>  

          <td><a name="name" href="http://localhost/WEB/?c=CustomerController&m=viewCustomer&p=<?php echo $customer['username']; ?>" value="<?php echo $customer['name'] ;?>" >view customer</a></td>
          <td><a href="http://localhost/WEB/?c=CustomerController&m=deleteCustomer&p=<?php echo $customer['username'];?>">delelte</a></td>
      </tr>
      
    

<?php endforeach;?>

<?php endif; ?> 
</tbody>
           
    </table>

<<<<<<< HEAD
=======
<!DOCTYPE html>
<html>
<head>
  <title>Chức Đào Cakes</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div>
    <?php 
   include ("../components/header.php");
  ?>
  <div><img id="img_head" src="../../public/image/anhnen.jpg"></div>
  </div>
  <div>
    <div>
     <?php include ("../components/sidebar.php") ?>
    </div>

    <div class="wrapper">
      <div id="index_title"><h1>Các sản phẩm</h1></div>
      <div class="list_product">
        <div>
          <div id="product">
            <div  class="image_product"><a href="#"><img class="image_product" src="../../public/image/opera.jpg"></a></div>
            <div class="name_product"><a href="#"><h3 class="name_product">Iphone 12</h3></a></div>
            <div><h5 class="price_product">32.000.000 vnd</h5></div>
            <div class="detail_add">
              <div class="detail_product"><a href="http://localhost/BTLWEB/MVC/view/customer/productdetail.php">Chi tiết</a></div>
              <div class="add_to_cart"><a href="#">Mua</a></div>
            </div>
          </div>
        </div>
        <div>
          <div id="product">
            <div  class="image_product"><a href="#"><img class="image_product" src="../../public/image/Banhkemtraicay.jpg"></a></div>
            <div class="name_product"><a href="#"><h3 class="name_product">Iphone 12</h3></a></div>
            <div><h5 class="price_product">32.000.000 vnd</h5></div>
            <div class="detail_add">
              <div class="detail_product"><a href="#">Detaile</a></div>
              <div class="add_to_cart"><a href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div>
          <div id="product">
            <div  class="image_product"><a href="#"><img class="image_product" src="../../public/image/crepetrungbo.jpg"></a></div>
            <div class="name_product"><a href="#"><h3 class="name_product">Iphone 12</h3></a></div>
            <div><h5 class="price_product">32.000.000 vnd</h5></div>
            <div class="detail_add">
              <div class="detail_product"><a href="#">Detaile</a></div>
              <div class="add_to_cart"><a href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
        <div>
          <div id="product">
            <div  class="image_product"><a href="#"><img class="image_product" src="../../public/image/banhlavachocolate.jpg"></a></div>
            <div class="name_product"><a href="#"><h3 class="name_product">Iphone 12</h3></a></div>
            <div><h5 class="price_product">32.000.000 vnd</h5></div>
            <div class="detail_add">
              <div class="detail_product"><a href="#">Detaile</a></div>
              <div class="add_to_cart"><a href="#">Add to cart</a></div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  <div> 
    <?php include ("../components/footer.php"); ?>
  </div> 
  
</body>
</html>
>>>>>>> 95d914abe4ecd5e6a83aedd95fec97e829079d8e

</table>