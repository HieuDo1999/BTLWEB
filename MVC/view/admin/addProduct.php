<!DOCTYPE html>
<html>
<head>
	<title>AddProduct</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
	<link rel="stylesheet" type="text/css" href="../../public/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php include '../components/header_admin.php'; ?>
	
	<div class="content_update">
		<div id="headupdate"><h1>Thêm sản phảm</h1></div>
		<form action=" " method="POST" enctype="multipart/form-data">
			<div class="updateproduct">
				<div>
					<div><span>Mã Số</span></div>
					<div><input type="text" name="" value=""></div>
				</div>
				<div>
					<div><span>Tên Sản Phẩm</span></div>
					<div><input type="text" name="" value=""></div>
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
					<div><span>Hình ảnh</span></div>
					<div><input type="file" name="image" ></div>
				</div>
				<div>
					<div><span>Đơn Giá</span></div>
					<div><input type="text" name="" value=""></div>
				</div>
				<div>
					<div><span>Mô Tả</span></div>
					<div>
						<textarea name="description_product" style=" width: 100% " > 
						</textarea>
					</div>
				</div>

			</div>
			<div ><input id="submit" type="Submit" name="Update" value="Update"></div>
		</form>
	</div>

	<?php if(isset($_FILES["image"]))
	$img_url="";
		$file= $_FILES["image"];
		$file_name = $_FILES["image"]["name"];
      	$file_size = $_FILES["image"]["size"]; 
      	$file_tmp = $_FILES["image"]["tmp_name"];
      	$file_type= $_FILES["image"]["type"];
      	$ext = explode(".", $file_name);
      	$file_ext = strtolower(end($ext));

      	$array_ext = array("png" ,"jpg" );


      	if(!in_array($file_ext, $array_ext)){
      		echo "file khong dung dinh dang";
      		exit();
      	}
      	
		move_uploaded_file($file_tmp, "../../public/image/".$file_name);
		exit();
			$img_url="../../public/image/".$file_name;
	?>
	<?php if ($img_url): ?>
		<img src="<?php echo $img_url; ?>">
	<?php endif ?>

</body>
</html>