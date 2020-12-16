

<!DOCTYPE html>
<html>
<head>
  <title>Chức Đào Cakes</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php 
   include ("../components/header.php");
  ?>
  <div><img id="img_head" src="../../public/image/anhnen.jpg"></div>
   <?php include ("../components/sidebar.php") ?>
  <div>

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

  <!-- <div class="carousel-inner">
    <?php foreach ($carousel_item as $key => $value): ?>
        <div class="item {{ $key == 0 ? 'active' : ''}}">
          <div class="item_wrapper">
            <div class="image_wrapper">
                <img src="{{ asset($value->image_url) }}">
            </div>
              <div class="top">
                <a href="{{ route('customer.item', ['id' => $value->id]) }}" class="content_wrapper">
              <div class="content_item">
                <div class="title_item">
                  <div class="text">
                    <?php echo $value->item_name ?>
                  </div>
                </div>
                <div class="detail_item">
                  <div class="text">
                    <?php echo $value->item_description ?>
                  </div>
                </div>
                <div class="prices_item">
                  <div class="text">
                    @if ( $value->item_discount != 0 )
                      <?php echo number_format($value->item_price - ($value->item_price  * $value->item_discount / 100)). " đ" ?> 
                      <span class="discount"><?php echo number_format($value->item_price). " đ" ?> </span>
                    @else
                      <?php echo number_format($value->item_price). " đ" ?> 
                    @endif
                    <!-- Giá : <span><?php echo $value->item_description ?></span> -->
                  </div>
                </div>
              </div>
                </a>
              </div>
          </div>
        </div>
    <?php endforeach ?>
  </div> -->
