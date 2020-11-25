<?php 
    if(!isset($_SESSION['ss_user_token'])) die ("not found file");
?> 
<h1>edit of customer</h1>
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
        <tr> 
          <td><?php echo ($customer['username']); ?></td>
          <td><?php echo $customer['password']; ?></td>
          <td><?php echo ($customer['name']); ?></td>
          <td><?php echo $customer['email']; ?></td>
          <td><?php echo $customer['sex']; ?></td>
          <td><?php echo $customer['phone']; ?></td>
          <td><?php echo $customer['address']; ?></td>  
          <td><a name="name" href="http://localhost/WEB/?c=AdminController&m=editCustomer&p=<?php echo $customer['username']; ?>" value="<?php echo $customer['name'] ;?>" >edit customer</a></td>
          <td><a href="http://localhost/WEB/?c=AdminController&m=deleteCustomer">delelte</a></td>
      </tr>

<?php endif; ?> 
</tbody>
           
    </table>