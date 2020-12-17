<!DOCTYPE html>
<html>
<head>
	<title>ViewProduct</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/fontawesome/css/all.css">
</head>
<body>
	<?php include './MVC/view/components/header_admin.php'; ?>
			<div><h1>Danh Sách Sản Phẩm</h1></div>
			<table class="table">
			    <thead>
			      	<tr>
				        <th>Mã sản phẩm</th>
						<th>Tên Sản Phẩm</th>
						<th>Ảnh</th>
						<th>file ảnh</th>
						<th>Loại Sản Phẩm</th>
				        <th>Giá</th>
						<th>Số Lượng</th>
						<th>Mô tả</th>
				        <th>Sửa </th>
				        <th>Xóa</th>
			      	</tr>
			    </thead>
			    <tbody>
					<?php  foreach($data as $products): ?>
						<form method="POST" action="?c=ProductController&m=editProduct">
			    <tr>
						
			    	<td><input name="id" value="<?php echo $products['id']?>" /></td>
					<td><input name="name" value="<?php echo $products['name']?>" /></td>
					<a type="hiden" name="old_img" value="<?php echo $products['img']?>"></a>
					<td><img name="" src="<?php echo $products['img']?>" style="width: 50px;"> </img></td>
					<td><input type="file" name="img" /></td>
					<td><input name="category_id" value="<?php echo $products['category_id']?>" /></td>
					<td><input name="price" value="<?php echo $products['price']?>" /></td>
			    	<td><input name="quantity" value="<?php echo $products['quantity']?>" /></td>
					<td><input name="description" value="<?php echo $products['description']?>" /></td>
			    	<td> <button class="btn" type="submit"><i class="fas fa-edit"></i></button></td>
			    	<td><a href="?c=ProductController&m=deleteProduct&p=<?php echo $products['id'];?>"><i class="fas fa-trash"></i></a></td>
					
			    </tr>
						</form>
					<?php endforeach;?>
			    </tbody>
			</table>
		</div>

</body>
</html>