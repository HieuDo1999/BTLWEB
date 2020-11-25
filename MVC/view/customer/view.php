<?php 
    if(!defined('in_site')) die('not found');
?> 
<h1>view customer</h1>

<table id="cus" class="table table-striped table-bordered" style="width:100%" border="1">
        <thead>
            <tr>
                <th>Username</th>
                <th>Pass</th>
                <th>Name</th>
                <th>email</th>
                <th>sex</th>
                <th>phone</th>
                <th>adddress</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
      <?php if(!empty($data)): ?>  
    
      <?php foreach($data as $customer):  ?>   
        <form action="http://localhost/WEB/?c=AdminController&m=editCustomer&p=<?php echo $customer['username']; ?>" method="POST">
        <tr> 
          <td><input name="username" value="<?php echo $customer['username']; ?>"></input></td>
          <td><input name="password" value="<?php echo $customer['password']; ?>"></input></td>
          <td><input name="name" value="<?php echo ($customer['name']); ?>"></input></td>
          <td><input name="email" value="<?php echo $customer['email']; ?>"></input></td>
          <td><input name="sex" value="<?php echo $customer['sex']; ?>"></input></td>
          <td><input name="phone" value="<?php echo $customer['phone']; ?>"></input></td>
          <td><input name="address" value="<?php echo $customer['address']; ?>"></input></td>  
          <td><button class="btn btn-primary" type="submit" >update customer</button></td>
          <td><a href="http://localhost/WEB/?c=AdminController&m=deleteCustomer&p=<?php echo $customer['username']; ?>">delelte</a></td>
      </tr>
      </form> 
      <?php endforeach;?>
   
<?php endif; ?> 

</tbody>
           
    </table>