<!DOCTYPE html>
<html>
<head>
	<title>CartDetail </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./WEB/MVC/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="./WEB/MVC/public/fontawesome/css/all.css">
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
		<div class="wrapper">
			<div class="CartDetail">
				<div style="background: green"><h1>Giỏ Hàng của bạn</h1></div>
				<!-- <div class="carthead">
					<ul>
						<li>STT</li>
						<li>Product</li>
						<li>Quantity</li>
						<li>Price</li>
						<li>Pay Total </li>
						<li>Delete</li>
					</ul>
				</div> -->
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
					    	<tr class="list_item">
					    		<td>
					    			<img src="../../public/image/opera.jpg">
					    			<div><h2>Banh Opera</h2></div>
					    		</td>
					    		<td>
					    			<input type="number" name="soluong" value="1" min="0" max="99" >
					    		</td>
					    		<td>50.000 vnd</td>
					    		<td>1.000.000 vnd</td>
					    		<td><i class="fas fa-trash-alt"></i></td>
					    	</tr>
					    	<tr class="list_item">
					    		<td >
					    			<img src="../../public/image/opera.jpg">
					    			<div><h2>Banh Opera</h2></div>
					    		</td>
					    		<td>
					    			<input type="number" name="soluong" value="1" min="0" max="99" >
					    		</td>
					    		<td>50.000 vnd</td>
					    		<td>1.000.000 vnd</td>
					    		<td><i class="fas fa-trash-alt"></i></td>
					    	</tr>
							
					    </tbody>
					</table>
			</div>
			
			<div>
				<h1>Tổng tiền: <?php echo "500.000 vnd"; ?></h1>
			</div>
			<div>
				<div> <input id="submit" type="submit" name="" value="Thanh Toán "> </div>
			</div>
			
		</div>
	</div>
	<?php include '../components/footer.php'; ?>
	
</body>
</html>