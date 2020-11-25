<?php 
    if(!isset($_SESSION['ss_user_token'])) die ("not found file");
?> 

<h1>add</h1>
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
     
        <form method="POST" action="http://localhost/WEB/?c=AdminController&m=addCustomer" >
      <tr> 
          <td><input name="username"  ></input></td>
          <td><input name="password" ></input></td>
          <td><input name="name"></input></td>
          <td><input name="email"></input></td>
          <td><input name="sex"></input></td>
          <td><input name="phone"></input></td>
          <td><input name="address"></input></td>  

          <td><button type="submit"  >add customer</button></td>
         
      </tr>
      </form>
      
    


</tbody>

</table>