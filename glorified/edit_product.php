<?php

    $con = mysqli_connect("localhost","root","","login_db");
    $qproduct = mysqli_query($con,"select * from product_table");
    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <?php
	    include "header_admin.php";
	?>
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Details </h3> 
            </div>
            <div class="row" style="background-image: url('images/bg-01.jpg');">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="">
                  <div class="card-body">
                    <h4 class="card-title">Add Details About Product</h4>
                    <table border='1' align="center">
                        <tr>
                            <th>Name</th>
                            <th>Site</th>
                            <th>Catagory</th>
                            <th>Brand</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php
                            while($rowpro=mysqli_fetch_array($qproduct)){
                    	?>
                        <tr>
                            <td><?php echo $rowpro["p_name"]; ?></td>
                            <td><?php echo $rowpro["p_site"]; ?></td>
                            <td><?php echo $rowpro["p_catagory"]; ?></td>
                            <td><?php echo $rowpro["p_brand"]; ?></td>
                            <td><img src="product_image/<?php echo $rowpro["p_image"]; ?>" alt="" width="315" height="350" /></td>
                            <td><a type="button" class="btn btn-gradient-primary btn-rounded btn-fw" href='edit_product_page.php?edit_id=<?php echo $rowpro["p_id"];?>'>Edit</a></td>
                            <td><a type="button" class="btn btn-gradient-danger btn-rounded btn-fw" href='delete_product.php?delete_id=<?php echo $rowpro["p_id"];?>'>Delete</a></td>                            
                        </tr>
                        <?php
                            }
                        ?>                        
                    </table>
                            
                            
      

</html>
