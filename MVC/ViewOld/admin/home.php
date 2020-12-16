<<<<<<< HEAD
<?php if(!isset($_SESSION['ss_user_token'])) die ("not found file"); ?>
<h1>home_ admin</h1>
<h1>Hello <?php


include_once ('./MVC/view/components/header.php');echo "<hr/>";

?></h1>
<a href="http://localhost/WEB/?c=CustomerController&m=getListCustomer" > Danh sach Cus</a>
<a href="http://localhost/WEB/?c=ProductController&m=getListProduct" > Danh sach product</a>
=======
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../public/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include '../components/header_admin.php'; ?>
	<div class="admincontent">
		<div class="home">
			<div><h1>Thông tin các đơn hàng</h1></div>
			<table class="table">
			    <thead>
			      	<tr>
				        <th>Stt</th>
				        <th>Tên Khách hàng</th>
				        <th>Điện Thoại</th>
				        <th>Địa Chỉ</th>
				        <th>Trạng Thái</th>
				        
				        <th>Chi Tiết</th>
			      	</tr>
			    </thead>
			    <tbody>
			    <tr>
			    	<td>1</td>
			    	<td>Hieu Do</td>
			    	<td>0904533354</td>
			    	<td>322 le trong tan , dinh cong hoang mai hanoi</td>
			    	<td><span>Cho </span></td>
			    	<td><a href="http://localhost/BTLWEB/MVC/view/admin/orderDetail.php"><i class="fas fa-edit"></i></a></td>
			    </tr>
			    <tr>
			    	<td>1</td>
			    	<td>Hieu Do</td>
			    	<td>0904533354</td>
			    	<td>322 le trong tan , dinh cong hoang mai hanoi</td>
			    	<td><span>Stage</span></td>
			    	<td><a href="http://localhost/BTLWEB/MVC/view/admin/orderDetail.php"><i class="fas fa-edit"></i></a></td>
			    </tr>	
					
			    </tbody>
			</table>
		</div>
	</div>
</body>
</html>
>>>>>>> 95d914abe4ecd5e6a83aedd95fec97e829079d8e
