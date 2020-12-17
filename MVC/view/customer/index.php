<!DOCTYPE html>
<html>
<head>
  <title>Chức Đào Bakery</title>
  <meta charset="utf-8">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php 
   include ("./MVC/view/components/header.php");
  ?>
  <div><img id="img_head" src="http://localhost/WEB/MVC/public/image/anhnen.jpg"></div>
   <?php include_once ("./MVC/view/components/sidebar.php") ?>
  <div>

    <div class="wrapper">
      <div id="index_title"><h1>Các sản phẩm</h1></div>
      <div class="list_product">
      <?php foreach($data as $products): ?>
        <div>
        
          <div id="product">
            <div  class="image_product"><a href="#"><img class="image_product" src="<?php echo $products['img']; ?>"></a></div>
            <div class="name_product"><a href="#"><h3 class="name_product"><?php echo $products['name'] ?></h3></a></div>
            <div><h5 class="price_product">Giá: <?php echo $products['price'] ?></h5></div>
            <div class="detail_add">
              <div class="detail_product"><a href="http://localhost/WEB/?c=ProductController&m=viewProduct&p=<?php echo $products['id']?>">Chi tiết</a></div>
              <div class="add_to_cart"><a href="#">Thêm vào giỏ</a></div>
            </div>
          </div>
        
        </div>
        <?php endforeach ;?>
      </div>
    </div> 
  <div> 
    <?php include ("./MVC/view/components/footer.php"); ?>
  </div> 
  
</body>
</html>

 