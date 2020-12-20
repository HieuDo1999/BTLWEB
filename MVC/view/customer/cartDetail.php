<!DOCTYPE html>
<html>
<head>
	<title>CartDetail </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
	 include ("./MVC/view/components/header.php");
	?> 
	<div>
		<div>
			<?php include_once ('./MVC/view/components/sidebar.php'); ?>
		</div>
		<form action="?c=PaymentController&m=saveOrder" method="post">
		<div class="wrapper">
			
			<div class="CartDetail">
				<div style="background: green"><h1>Giỏ Hàng của bạn</h1></div>
				
				<table class="table">
					    <thead>
					      	<tr>
						        <!-- <th>Stt</th> -->
						        <th>Sản Phẩm</th>
						        <th>Số Lượng</th>
						        <th>Đơn Giá</th>
						        <th>Thành Tiền</th>
								<th>Xóa</th>
								
					      	</tr>
					    </thead>
					    <tbody>
							<?php $total=0;
							if($data){
							 foreach($data as $products): ?>
					    	<tr class="list_item">
					    		<td>
					    			<div id="productName">
								<a href="http://localhost/WEB/?c=ProductController&m=viewProduct&p=<?php echo $products['product_id']?>">
									<img src="<?php echo $products['img'] ;?>"    />
									</a>
					    			<h2><?php echo $products['product_name']; ?></h2></div>
					    		</td>
					    		<td>
					    			<input type="number" name="soluong" value="<?php echo $products['quantity'] ?>" min="0" max="99" >
					    		</td>
					    		<td><?php echo $products['price'] ;?></td>
					    		<td><?php echo $money=$products['price'] * $products['quantity']; ?></td>
								<td><a href="?c=PlaceOrderController&m=deleteProductFromCart&p=<?php echo $products['product_id']; ?>" class="fas fa-trash-alt"></a></td>
								<?php
								
								$total+=$money; ?>
					    	</tr>
							<?php endforeach;
							} ?>
							<a class="fas fa-trash-alt" href="?c=PlaceOrderController&m=deleteCart"> xóa giỏ hàng</a>
					    </tbody>
					</table>
			</div>
			<div>
			<input name="amount" type="hidden" value="<?php echo $total; ?>"> </input>
				<h1 >Tổng tiền: <?php echo $total; ?></h1>
			</div>
			<div>
				<div> <button id="submit" type="submit" name="" value="Thanh Toán ">Thanh toan </div>
			</div>
			
		</div>
		</form>
	</div>
	<?php include './MVC/view/components/footer.php'; ?>
	
</body>
</html>