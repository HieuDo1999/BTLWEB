<!DOCTYPE html>
<html>
<head>
	<title>ViewProduct</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../public/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include '../components/header_admin.php'; ?>
	<div class="content">
			<div><h1>Danh Sách Sản Phẩm</h1></div>
			<table class="table">
			    <thead>
			      	<tr>
				        <th>Mã Số</th>
				        <th>Tên Sản Phẩm</th>
				        <th>Loại Sản Phẩm</th>
				        <th>Giá</th>
				        <th>Số Lượng</th>
				        <th>Sửa </th>
				        <th>Xóa</th>
			      	</tr>
			    </thead>
			    <tbody>
			    <tr>
			    	<td>1</td>
			    	<td>Bánh kem Socola</td>
			    	<td>bánh kem</td>
			    	<td>300.000 vnd</td>
			    	<td>26</td>
			    	<td> <a href="http://localhost/BTLWEB/MVC/view/admin/updateProduct.php"><i class="fas fa-edit"></i></a></td>
			    	<td><a href=""><i class="fas fa-trash"></i></a></td>

			    </tr>
			   <tr>
			    	<td>1</td>
			    	<td>Bánh kem Socola</td>
			    	<td>bánh kem</td>
			    	<td>300.000 vnd</td>
			    	<td>26</td>
			    	<td> <a href="http://localhost/BTLWEB/MVC/view/admin/updateProduct.php"><i class="fas fa-edit"></i></a></td>
			    	<td><a href=""><i class="fas fa-trash"></i></a></td>

			    </tr>
					
			    </tbody>
			</table>
		</div>

</body>
</html>