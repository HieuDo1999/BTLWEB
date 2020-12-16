<!DOCTYPE html>
<html>
<head>
	<title>DeleteProduct</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../public/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include '../components/header_admin.php'; ?>
	<div class="detailorder" >
		<div><h1>Thông tin đơn hàng</h1></div>
		<div>
			
				<table class="table">
				    <thead>
				      	<tr>
					        <th>Mã Số</th>
					        <th>Tên Khách hàng</th>
					        <th>Sản Phẩm</th>
					        <th>Điện Thoại</th>
					        <th>Địa Chỉ </th>
					        <th>Thành Tiền</th>
					        
				      	</tr>
				    </thead>
				    <tbody>
					    <tr>
					    	<td>0131</td>
					    	<td>Hieu Do</td>
					    	<td>Banh kem dâu</td>
					    	<td>0904533354</td>
					    	<td>322 le trong tan , dinh cong hoang mai hanoi</td>
					    	<td>320.000 vnd</td>
					    	
					   </tr>
					</tbody>
				</table>
				
				
				<?php if (1): ?>
				<div id="Accept_Cancel">
					<div><input id="Accept" type="submit" name="Accept" value="Chấp nhận"></div>
					<div><input id="Cancel" type="submit" name="Cancel" value="Hủy"></div>
					</div>
					
				 	
				<?php endif ?>
			
		</div>
	</div>

</body>
</html>