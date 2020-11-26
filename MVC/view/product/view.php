<?php 
    if(!isset($_SESSION['ss_user_token'])) die ("not found file");
    include_once ('./MVC/view/components/header.php');
?> 
<h1>view product</h1>

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
        <form action="http://localhost/WEB/?c=ProductController&m=editProduct&p=<?php echo $product['username']; ?>" method="POST">
        <tr> 
          <td><input name="username" value="<?php echo $product['id']; ?>"></input></td>
          <td><input name="password" value="<?php echo $product['name']; ?>"></input></td>
          <td><input name="name" value="<?php echo ($product['price']); ?>"></input></td>
          <td><input name="email" value="<?php echo $product['category_id']; ?>"></input></td>
          <td><input name="sex" value="<?php echo $product['quantity']; ?>"></input></td>
          <td><input name="phone" value="<?php echo $product['img']; ?>"></input></td>
         
          <td><button class="btn btn-primary" type="submit" >update product</button></td>
          <td><a href="http://localhost/WEB/?c=ProductController&m=deleteProduct&p=<?php echo $product['id']; ?>">delelte</a></td>
      </tr>
      </form> 
      <?php endforeach;?>
   
<?php endif; ?> 

</tbody>
           
    </table>