<!DOCTYPE html>
<html>
<head>
	<title>CartDetail </title>
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
	<!-- @if ( Session::has('cart') )
								@if(Session::has('customer'))
									<input type="hidden" name="id_user" value="<?php echo Session::get('customer')->customer['id'] ?>">
								@endif 
						    	<?php foreach ($item as $key => $value): ?>
							      	<tr class="list_array_item item_<?php echo $value['data']->id ?>">
								        <!-- <td>{{ $key }}</td> -->
								       <!-- <td><?php echo $value['data']->item_name ?></td>
								        <td>
											<div class="calc_item">
												<div class="down_calc">
													<i class="fas fa-caret-left"></i>
												</div>
												<div class="val_calc">
													<?php echo $value['value'] ?>
												</div>
												<div class="up_calc">
													<i class="fas fa-caret-right"></i>
												</div>
												<input type="hidden" name="" class="value_input" value="<?php echo $value['value'] ?>">
											</div>
								        </td>
								        <td class="single_price" value="<?php echo $value['prices'] ?>"><?php echo number_format($value['prices']) . " Đồng" ?></td>
								        <td class="count_prices"><?php echo number_format($value['prices'] * $value['value']) . " Đồng" ?></td>
								        <td><a class="open_remove" data-toggle="modal" data-target="#myModal"><i class="far fa-trash-alt"></i></a></td>
								    	<input type="hidden" name="item[]" value="<?php echo $value['data']->id ?>" class="data_id">
								    	<input type="hidden" name="amount[]" value="<?php echo $value['value'] ?>" class="data_amount">
							      	</tr>
						    	<?php endforeach ?>
							@endif -->

</body>
</html>