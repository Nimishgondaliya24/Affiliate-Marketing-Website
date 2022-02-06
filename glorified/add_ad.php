<?php

    $con = mysqli_connect("localhost","root","","login_db");
    $qadd = mysqli_query($con,"select * from giveadd");
    
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
              <h3 class="page-title"> Advertisement Details </h3> 
            </div>
            <div class="row" style="background-image: url('images/bg-01.jpg');">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="">
                  <div class="card-body">
                    <h4 class="card-title">Add Some Advertisement About Different Products</h4>
                    <table border='1' align="center">
                        <tr>
                            <th>Image</th>
                            <th>Company</th>
                            <th>Description</th>
                            <th>Accept</th>
                            <th>Decline</th>
                        </tr>
                        <?php
                            while($rowadd=mysqli_fetch_array($qadd)){
                              if($rowadd["u_permission"]==0){
                    	?>
                        <tr>
                        <td><img src="add/<?php echo $rowadd["u_image"]; ?>" alt="" width="320" height="150"/></td>
                        <td><?php echo $rowadd["u_platform"]; ?></td>
                        <td><?php echo $rowadd["u_description"]; ?></td>
                        <td><a type="button" class="btn btn-gradient-primary btn-rounded btn-fw" href='delete_add.php?add_id=<?php echo $rowadd["u_id"]; ?>'>Accept</a></td>
                        <td><a type="button" class="btn btn-gradient-danger btn-rounded btn-fw" href='delete_add.php?delete_id=<?php echo $rowadd["u_id"];?>'>Decline</a></td>                                                   </tr>
                        <?php
                            }}
                        ?>                        
                    </table>
                            
                            
      

</html>
