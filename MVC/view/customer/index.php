<?php 
    if(!defined('in_site')) die('not found');
?> 
<h1>this is index of customer</h1>
<?php 
 
    include_once ('./MVC/controller/AdminController.php');
   
?>
<h1>Danh sach cus</h1>
<a href="http://localhost/WEB/?c=AdminController&m=addCustomer">add customer</a>

<table id="cus" class="table table-striped table-bordered" style="width:100%" border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>pass</th>
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
        
      <tr> 
          <td><?php echo ($customer['name']); ?></td>
          <td><?php echo $customer['password']; ?></td>
          <td><?php echo $customer['email']; ?></td>
          <td><?php echo $customer['sex']; ?></td>
          <td><?php echo $customer['phone']; ?></td>
          <td><?php echo $customer['address']; ?></td>  
          <td><a name="name" href="http://localhost/WEB/?c=AdminController&m=editCustomer&p=<?php echo $customer['name']; ?>" value="<?php echo $customer['name'] ;?>" >edit customer</a></td>
          <td><a href="http://localhost/WEB/?c=AdminController&m=deleteCustomer">delelte</a></td>
      </tr>
      
     
           
        

<?php endforeach;?>

<?php endif; ?> 
</tbody>
           
    </table>


</table>