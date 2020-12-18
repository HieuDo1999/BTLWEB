
<!DOCTYPE html>
<html>
<head>
	<title>Delivery</title>
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
			<?php include'./MVC/view/components/sidebar.php'; ?>
		</div>
		<?php foreach($data['customer'] as $cus): ?>
		<div class="wrapper">
			<div>
				<form id="formdelivery" action="?c=PaymentController&m=payment" method="POST">
					<div><span id="headdelivery"><h1 align="center">Vui lòng nhập thông tin của bạn</h1></span></div>
					<div class="delivery">
						<div >
							<div><span>Name:</span></div>
							<input type="text" name="name" value="<?php echo $cus['name'] ?>">
						</div>
						<div>
							<div><span>Phone:</span></div>
							<input type="tel" name="phone" value="<?php echo $cus['phone'] ?>">
						</div>
						
						<div>
							<div><span>Address:</span></div>
							<input type="text" name="address" value="<?php echo $cus['address'] ?>">
						</div>
						<div>
							<div><span>Note:</span></div>
							<input type="text" name="note">
						</div>
						<div>
							<h2> tong tien: <?php echo $data['amount'] ?></h2>
						</div>
						<input name="amount" value="<?php echo $data['amount'] ?>" type="hidden"/>
						<div>

							<input id="submit" type="submit" name="submit" value="Dat hang">
						</div>	
					</div>
					</div>
				</form>
		</div>
		<?php endforeach; ?>
	</div>
	<?php include './MVC/view/components/footer.php'; ?>
</body>
</html>