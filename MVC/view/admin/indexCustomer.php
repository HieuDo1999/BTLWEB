<!DOCTYPE html>
<html>
<head>
	<title>ViewCustomer</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/css/style.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/WEB/MVC/public/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php include './MVC/view/components/header_admin.php'; ?>
	<div class="content">
			<div><h1>Danh Sách Khách Hàng</h1></div>
			<form method="POST" action="?c=CustomerController&m=findCustomerByName">
			<div><input name="customer_name"  placeholder="Tên khách hàng"></input></div>
			<div><button type="submit" name="btn-submit">Tìm</button></div>
			</form>
			<table class="table">
			    <thead>
			      	<tr>
				        <th>Tên tài khoản</th>
				        <th>Tên Khách hàng</th>
				        <th>Điện Thoại</th>
				        <th>Địa Chỉ</th>
			      	</tr>
			    </thead>
			    <tbody>
					<?php foreach($data as $customers): ?>
			    <tr>
			    	<td><?php echo $customers['username'] ?></td>
			    	<td><?php echo $customers['name'] ?></td>
			    	<td><?php echo $customers['phone'] ?></td>
			    	<td><?php echo $customers['address'] ?></td>
			   
			    	
				</tr>
				<?php endforeach ; ?>
			    
			    </tbody>
			</table>
		</div>

</body>
</html>