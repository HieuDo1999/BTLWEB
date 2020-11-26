<?php 
    if(!isset($_SESSION['ss_user_token'])) die ("not found file");
    include_once ('./MVC/view/components/header.php');
?> 
<h1>this is index of customer</h1>
<?php 
 
    include_once ('./MVC/controller//CustomerController.php');
   
?>
<h1>Danh sach cus</h1>
<a href="http://localhost/WEB/?c=CustomerController&m=viewFormAddCustomer">add customer</a>

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

      <?php if(!empty($data)):  ?>
        
      <?php foreach($data as $customer):  ?>
        
      <tr> 
          <td><?php echo ($customer['username']); ?></td>
          <td><?php echo $customer['password']; ?></td>
          <td><?php echo ($customer['name']); ?></td>
          <td><?php echo $customer['email']; ?></td>
          <td><?php echo $customer['sex']; ?></td>
          <td><?php echo $customer['phone']; ?></td>
          <td><?php echo $customer['address']; ?></td>  

          <td><a name="name" href="http://localhost/WEB/?c=CustomerController&m=viewCustomer&p=<?php echo $customer['username']; ?>" value="<?php echo $customer['name'] ;?>" >view customer</a></td>
          <td><a href="http://localhost/WEB/?c=CustomerController&m=deleteCustomer&p=<?php echo $customer['username'];?>">delelte</a></td>
      </tr>
      
    

<?php endforeach;?>

<?php endif; ?> 
</tbody>
           
    </table>


</table>