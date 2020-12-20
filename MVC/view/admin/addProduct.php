<!DOCTYPE html>
<html>
<head>
	<title>AddProduct</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

	<?php include './MVC/view/components/header_admin.php'; ?>
	<div class="content_update">
		<div id="headupdate"><h1>Thêm sản phảm</h1></div>
		<form action="?c=ProductController&m=addProduct" method="POST" enctype="multipart/form-data">
			<div class="updateproduct">
				<div>
					<div><span>Mã sản phẩm</span></div>
					<div><input type="text" name="product_id" value=""></div>
				</div>
				<div>
					<div><span>Tên Sản Phẩm</span></div>
					<div><input type="text" name="product_name" value=""></div>
				</div>
				<div>
					<div><span>Loại Sản Phẩm</span></div>
					<div>
						<select name="category_id">
						<option >banh Kem</option>
						<option>Banh Trai cay</option>
						<option>Banh Sinh Nhat</option>
						<option>Banh trung</option>
					</select>
					</div>
				</div>
				<div>
					<div><span>Hình ảnh</span></div>
					<div><input type="file" name="img" ></div>
				</div>
				<div>
					<div><span>Giá tiền</span></div>
					<div><input type="text" name="price" value=""></div>
				</div>
				<div>
					<div><span>Số lượng</span></div>
					<div><input type="text" name="quantity" value=""></div>
				</div>
				<div>
					<div><span>Mô Tả</span></div>
					<div>
						<textarea name="description" style=" width: 100% " > 
						</textarea>
					</div>
				</div>

			</div>

			<div ><input id="submit" type="Submit" name="" value="Thêm"></div>

		</form>
	</div>

	<!--  -->

</body>
</html>