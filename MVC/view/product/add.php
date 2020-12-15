<?php 
    if(!isset($_SESSION['ss_user_token'])) die ("not found file");
    include_once ('./MVC/view/components/header.php');
?> 

<h1>add</h1>
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
     
        <form method="POST" action="http://localhost/WEB/?c=ProductController&m=addProduct" >
      <tr> 
          <td><input name="id"  ></input></td>
          <td><input name="name" ></input></td>
          <td><input name="price"></input></td>
          <td><input name="catgory_id"></input></td>
          <td><input name="quantity"></input></td>
          <td><input name="img"></input></td>

          <td><button type="submit"  >add product</button></td>
         
      </tr>
      </form>
      
    


</tbody>

</table>