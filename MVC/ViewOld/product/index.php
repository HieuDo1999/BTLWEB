<?php 
    include_once ('./MVC/view/components/header.php');
?> 
<h1>this is index of product</h1>
<?php 
 
    include_once ('./MVC/controller/productController.php');
   
?>
<h1>Danh sach cus</h1>
<a href="http://localhost/WEB/?c=ProductController&m=viewFormAddProduct">add product</a>

<table id="cus" class="table table-striped table-bordered" style="width:100%" border="1">
        <thead>
            <tr>
                <th>Product id</th>
                <th>Product name</th>
                <th>Product price</th>
                <th>Category id</th>
                <th>Quantity</th>
                <th>img</th>
            </tr>
        </thead>
        <tbody>
      <?php if(!empty($data)): ?>
        
      <?php foreach($data as $product):  ?>
        
      <tr> 
      <td><?php echo ($product['id']); ?></td>
          <td><?php echo $product['name']; ?></td>
          <td><?php echo ($product['price']); ?></td>
          <td><?php echo $product['category_id']; ?></td>
          <td><?php echo $product['quantity']; ?></td>
          <td><?php echo $product['img']; ?></td>

          <td><a name="name" href="http://localhost/WEB/?c=ProductController&m=viewProduct&p=<?php echo $product['id']; ?>"  >view product</a></td>
          <td><a href="http://localhost/WEB/?c=ProductController&m=deleteProduct&p=<?php echo $product['id'];?>">delelte</a></td>
      </tr>
      
    

<?php endforeach;?>

<?php endif; ?> 
</tbody>
           
    </table>


</table>