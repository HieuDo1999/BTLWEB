<!DOCTYPE html>
<html>
<head>
  <title>Chức Đào Cakes</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php 
   include_once ("./MVC/view/components/header.php");
  ?>
  <div><img id="img_head" src="http://localhost/WEB/MVC/public/image/anhnen.jpg"></div>
   <?php include_once ("./MVC/view/components/sidebar.php") ?>
  <div>

    <div class="wrapper">
      <div id="index_title"><h1>Các sản phẩm</h1></div>
      <div class="list_product">
        <div>
          <div id="product">
            <div  class="image_product"><a href="#"><img class="image_product" src="http://localhost/WEB/MVC/public/image/opera.jpg"></a></div>
            <div class="name_product"><a href="#"><h3 class="name_product">Iphone 12</h3></a></div>
            <div><h5 class="price_product">32.000.000 vnd</h5></div>
            <div class="detail_add">
              <div class="detail_product"><a href="http://localhost/WEB/?c=ProductController&m=productDetail&p=">Chi tiết</a></div>
              <div class="add_to_cart"><a href="#">Thêm vào giỏ</a></div>
            </div>
          </div>
        </div>
        <div>
          <div id="product">
            <div  class="image_product"><a href="#"><img class="image_product" src="http://localhost/WEB/MVC/public/image/Banhkemtraicay.jpg"></a></div>
            <div class="name_product"><a href="#"><h3 class="name_product">Iphone 12</h3></a></div>
            <div><h5 class="price_product">32.000.000 vnd</h5></div>
            <div class="detail_add">
              <div class="detail_product"><a href="#">Chi tiết</a></div>
              <div class="add_to_cart"><a href="#">Thêm vào giỏ</a></div>
            </div>
          </div>
        </div>
        <div>
          <div id="product">
            <div  class="image_product"><a href="#"><img class="image_product" src="http://localhost/WEB/MVC/public/image/crepetrungbo.jpg"></a></div>
            <div class="name_product"><a href="#"><h3 class="name_product">Iphone 12</h3></a></div>
            <div><h5 class="price_product">32.000.000 vnd</h5></div>
            <div class="detail_add">
              <div class="detail_product"><a href="#">Chi tiết</a></div>
              <div class="add_to_cart"><a href="#">Thêm vào giỏ</a></div>
            </div>
          </div>
        </div>
        <div>
          <div id="product">
            <div  class="image_product"><a href="#"><img class="image_product" src="http://localhost/WEB/MVC/public/image/banhlavachocolate.jpg"></a></div>
            <div class="name_product"><a href="#"><h3 class="name_product">Iphone 12</h3></a></div>
            <div><h5 class="price_product">32.000.000 vnd</h5></div>
            <div class="detail_add">
              <div class="detail_product"><a href="#">Chi tiết</a></div>
              <div class="add_to_cart"><a href="#">Thêm vào giỏ</a></div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  <div> 
    <?php include ("./MVC/view/components/footer.php"); ?>
  </div> 
  
</body>
</html>

 