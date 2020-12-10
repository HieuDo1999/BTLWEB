
<!DOCTYPE html>
<html>
<head>
	<title>Delivery</title>
	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css">
        <link rel="stylesheet" type="text/css" href="../../public/fontawesome/css/all.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
	 include ("../components/header.php");
	?> 
	<div>
		<div>
			<?php include'../components/sidebar.php'; ?>
		</div>
		<div class="wrapper">
			<div>
				<form id="formdelivery" action="" name="">
					<div><span id="headdelivery"><h1 align="center">Vui lòng nhập thông tin của bạn</h1></span></div>
					<div class="delivery">
						<div >
							<div><span>Name:</span></div>
							<input type="text" name="Name">
						</div>
						<div>
							<div><span>Phone:</span></div>
							<input type="tel" name="phone">
						</div>
						<div>
							<div><span>Email:</span></div>
							<input type="email" name="Address">
						</div>
						<div>
							<div><span>Address:</span></div>
							<input type="text" name="Address">
						</div>
						<div>
							<div><span>Note:</span></div>
							<input id="note" type="text" name="Note">
						</div>
						<div>

							<input id="submit" type="submit" name="submit" value="Submit">
						</div>	
					</div>
					</div>
				</form>
		</div>
	</div>
	<?php include '../components/footer.php'; ?>
</body>
</html>