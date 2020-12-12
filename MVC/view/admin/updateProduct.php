<!DOCTYPE html>
<html>
<head>
	<title>UpdateProduct</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../public/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include '../components/header_admin.php'; ?>
	<div class="content_update">
		<div id="headupdate"><h1>Thông tin sản phẩm</h1></div>
		<form>
			<div class="updateproduct">
				<div>
					<div><span>Mã Số</span></div>
					<div><input type="text" name="" value="0101"></div>
				</div>
				<div>
					<div><span>Tên Sản Phẩm</span></div>
					<div><input type="text" name="" value="Banh kem Socola"></div>
				</div>
				<div>
					<div><span>Loại Sản Phẩm</span></div>
					<div>
						<select>
						<option>banh Kem</option>
						<option>Banh Trai cay</option>
						<option>Banh Sinh Nhat</option>
						<option>Banh trung</option>
					</select>
					</div>
				</div>
				<div>
					<div><span>Số Lượng</span></div>
					<div><input type="number" name="" min="0" max="1000" value="38" ></div>
				</div>
				<div>
					<div><span>Đơn Giá</span></div>
					<div><input type="text" name="" value="300.000 vnd"></div>
				</div>
				<div>
					<div><span>Mô Tả</span></div>
					<div>
						<textarea name="description_product" style=" width: 100% " > jvshdfksdkfhaskdfbksadbfkjasbdfj
						</textarea>
					</div>
				</div>

			</div>
			<div ><input id="submit" type="Submit" name="" value="Update"></div>
		</form>
	</div>

</body>
</html>S