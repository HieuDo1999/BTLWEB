<?php 
    if(!isset($_SESSION['ss_user_token'])) die ("not found file");
    include_once ('./MVC/view/components/header.php');
?> 
<h1>edit of product</h1>
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
      <?php if(!empty($product)): ?>      
        <tr> 
          <td><?php echo ($product['id']); ?></td>
          <td><?php echo $product['name']; ?></td>
          <td><?php echo ($product['price']); ?></td>
          <td><?php echo $product['category_id']; ?></td>
          <td><?php echo $product['quantity']; ?></td>
          <td><?php echo $product['img']; ?></td>
           
          <td><a name="name" href="http://localhost/WEB/?c=ProductController&m=editProduct&p=<?php echo $product['id']; ?>"  >edit product</a></td>
          <td><a href="http://localhost/WEB/?c=ProductController&m=deleteProduct">delelte</a></td>
      </tr>

<?php endif; ?> 
</tbody>
           
    </table>