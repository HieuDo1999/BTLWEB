
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <link rel="stylesheet" type="text/css" href="../../public/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include '../components/header.php'; 
	?>
	<?php include '../components/sidebar.php'; ?>
	<div class=" detail_content">
		<div >
			<div><h1>Thông Tin Sản Phẩm</h1></div>
			<div class="content_head">
				<div id="img_pr"><img src="../../public/image/banhlavachocolate.jpg"></div>
				<div id="info_pr">
					<div><span>Bánh Kem Socola</span></div>
					<div>150.000 vnd</div>
					<div>Số Lượng: <input type="number" name="soluong" min="1" max="9" ></div>
					<div> <input id="add_to_cart" type="button" name="" value="Add_to_cart"></div>
					<div class="des"><h2>Description</h2></div>
				</div>
			</div>	
		</div>
		<div>
			<div>Sản Phẩm Tương Tự</div>
			<div>
		    <div id="product">
		        <div  class="image_product"><a href="#"><img class="image_product" src="../../public/image/iphon12.jpg"></a></div>
		        <div class="name_product"><a href="#"><h3 class="name_product">Iphone 12</h3></a></div>
		        <div><h5 class="price_product">32.000.000 vnd</h5></div>
		        <div class="detail_add">
		          <div class="detail_product"><a href="#">Detaile</a></div>
		          <!-- <div class="add_to_cart"><a href="#">Add to cart</a></div> -->
		        </div>
		      </div>
		    </div>
		</div>
	</div>
	<?php include '../components/footer.php' ?>

</body>
</html>