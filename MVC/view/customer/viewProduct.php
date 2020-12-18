<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include './MVC/view/components/header.php'; 
	?>
	<?php include './MVC/view/components/sidebar.php'; ?>
	<div class=" detail_content">
		<div >
			<div><h1>Thông Tin Sản Phẩm</h1></div>
			<?php foreach($data as $product) ?>
			<form action="?c=PlaceOrderController&m=addProductToCard&p=<?php echo $product['id'];  ?>" method="post">
			<div class="content_head">
				<div id="img_pr"><img src="<?php echo $product['img'] ; ?>"></div>
				<div id="info_pr">
					<div><span><?php echo $product['name']?></span></div>
					<div><?php echo $product['price'] ?></div>
					<div>Số Lượng: <input type="number" name="qty" min="1" max="9" ></div>
					<div> <button id="add_to_cart" type="submit" >Add to cart </button></div>
					<div class="des"><h2><?php echo $product['description'] ?></h2></div>
				</div>
			</div>	
			</form>
		</div>
		
	</div>
	<?php include './MVC/view/components/footer.php' ?>

</body>
</html>