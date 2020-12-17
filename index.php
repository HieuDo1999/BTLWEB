<!DOCTYPE html>
<html>
<head>
  <title>Chức Đào Cakes</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="MVC/public/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="MVC/public/fontawesome/css/all.css">
</head>
<body>
  <?php 
   include ("MVC/view/components/header.php");
  ?>
  <div><img id="img_head" src="MVC/public/image/anhnen.jpg"></div>
   <?php include ("MVC/view/components/sidebar.php") ?>
  <div>

    <div class="wrapper">
      <div id="index_title"><h1>Các sản phẩm</h1></div>
      <div class="list_product">
        <div>
          <div id="product">
            <div  class="image_product"><a href="#"><img class="image_product" src="MVC/public/image/opera.jpg"></a></div>
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
            <div  class="image_product"><a href="#"><img class="image_product" src="MVC/public/image/Banhkemtraicay.jpg"></a></div>
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
            <div  class="image_product"><a href="#"><img class="image_product" src="MVC/public/image/crepetrungbo.jpg"></a></div>
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
            <div  class="image_product"><a href="#"><img class="image_product" src="MVC/public/image/banhlavachocolate.jpg"></a></div>
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
    <?php include ("MVC/view/components/footer.php"); ?>
  </div> 
  
</body>
</html>