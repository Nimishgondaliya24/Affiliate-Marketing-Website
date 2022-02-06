<?php

    $con = mysqli_connect("localhost","root","","login_db");
    $qrem = mysqli_query($con,"select * from giveadd");
    
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
              <h3 class="page-title"> Advertisement For Edit </h3> 
            </div>
            <div class="row" style="background-image: url('images/bg-01.jpg');">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="">
                  <div class="card-body">
                    <h4 class="card-title">Remove Advertisement Which is outdated</h4>
                    <table border='1' align="center">
                        <tr>
                            <th>Image</th>
                            <th>Company</th>
                            <th>Description</th>
                            <th>Remove</th>
                            
                        </tr>
                        <?php
                            while($rowrem=mysqli_fetch_array($qrem)){
                              if($rowrem["u_permission"]==1){
                    	?>
                        <tr>
                        <td><img src="add/<?php echo $rowrem["u_image"]; ?>" alt="" width="320" height="150"/></td>
                        <td><?php echo $rowrem["u_platform"]; ?></td>
                        <td><?php echo $rowrem["u_description"]; ?></td>
                        <td><a type="button" class="btn btn-gradient-primary btn-rounded btn-fw" href='delete_add.php?remove_id=<?php echo $rowrem["u_id"]; ?>'>Remove</a></td>
                        <?php
                            }}
                        ?>                        
                    </table>
                            
                            
      

</html>
