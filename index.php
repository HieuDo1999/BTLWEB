<?php 
 include_once ("./MVC/view/components/header.php");
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Chức Store</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./MVC/public/css/style.css">
</head>
<body>
	<div class="list_product">
		<div>
			<div id="product">
				<div  class="image_product"><a href="#"><img class="image_product" src="./MVC/public/image/iphon12.jpg"></a></div>
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
				<div  class="image_product"><a href="#"><img class="image_product" src="./MVC/public/image/iphon12.jpg"></a></div>
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
				<div  class="image_product"><a href="#"><img class="image_product" src="./MVC/public/image/iphon12.jpg"></a></div>
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
				<div  class="image_product"><a href="#"><img class="image_product" src="./MVC/public/image/iphon12.jpg"></a></div>
				<div class="name_product"><a href="#"><h3 class="name_product">Iphone 12</h3></a></div>
				<div><h5 class="price_product">32.000.000 vnd</h5></div>
				<div class="detail_add">
					<div class="detail_product"><a href="#">Detaile</a></div>
					<div class="add_to_cart"><a href="#">Add to cart</a></div>
				</div>
			</div>
		</div>
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
