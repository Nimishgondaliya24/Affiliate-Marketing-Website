<?php

    $con = mysqli_connect("localhost","root","","login_db");
    $editid=$_GET['edit_id'];
    $qselect=mysqli_query($con,"select * from product_table where p_id=$editid");
    $rowedit=mysqli_fetch_array($qselect);        
    if(isset($_POST['submit'])){
        $name=ucwords(strtolower(TRIM($_POST['pname'])));
    	$site=ucfirst(strtolower(TRIM($_POST['psite'])));
        $catagory=strtoupper(TRIM($_POST['pcatagory']));
        $link=TRIM($_POST['plink']);
        $brand=strtoupper(TRIM($_POST['pbrand']));   
        $imagename = $_FILES['pimg']['name']; //storing image name
        $tempimagename = $_FILES['pimg']['tmp_name']; //temp name 
        move_uploaded_file($tempimagename,"product_image/$imagename");
         //storing image name
        if($imagename==""){
            $qupdate=mysqli_query($con,"update product_table set p_name='{$name}',p_site='{$site}',p_catagory='{$catagory}',p_link='{$link}',p_brand='{$brand}' where p_id='$editid'");    
        }else{
            $qupdate=mysqli_query($con,"update product_table set p_name='{$name}',p_site='{$site}',p_catagory='{$catagory}',p_image='{$imagename}',p_link='{$link}',p_brand='{$brand}' where p_id='$editid'");
        }

        if($qupdate){
            echo "<script>alert('Image Uploaded Successfully');</script>";
            echo "<script>window.location='edit_product.php';</script>";

        }

    
        /*    
    
    $name=ucwords(strtolower(TRIM($_POST['pname'])));
    		$site=ucfirst(strtolower(TRIM($_POST['psite'])));
        $catagory=strtoupper(TRIM($_POST['pcatagory']));
        $link=TRIM($_POST['plink']);
        $brand=strtoupper(TRIM($_POST['pbrand']));
        
        $imagename = $_FILES['pimg']['name']; //storing image name
        $tempimagename = $_FILES['pimg']['tmp_name']; //temp name 
        move_uploaded_file($tempimagename,"product_image/$imagename");
        
        $q = mysqli_query($con,"insert into product_table(p_name,p_site,p_catagory,p_image,p_link,p_brand) VALUES 
			('{$name}','{$site}','{$catagory}','{$imagename}','{$link}','{$brand}')") or die(mysqli_error($con));
		  if($q){
       		echo "<script>alert('Image Uploaded Successfully');</script>";
               //header("location:main_page.php");	
   
        }
    }*/}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <?php
	    include "header_admin.php";
	  ?>    
      <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Edit Product </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Edit Product</a></li>
                  <li class="breadcrumb-item active" aria-current="#">Edit Product</li>
                </ol>
              </nav>
            </div>
            <div class="row" style="background-image: url('images/bg-01.jpg');">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Edit Details About Product</h4>
                    <form class="forms-sample" action="" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                      <img src="product_image/<?php echo $rowedit["p_image"]; ?>" alt="" width="315" height="350" /><br><br>
  
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" name="pname" value="<?php echo $rowedit["p_name"]; ?>" class="form-control"  placeholder="Enter The Product Name">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Choose Site</label>
                        <input type="text" name="psite" value="<?php echo $rowedit["p_site"]; ?>" class="form-control"  placeholder="Enter The Site Name">
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Choose Catagory</label>
                        <input type="text" name="pcatagory" value="<?php echo $rowedit["p_catagory"]; ?>" class="form-control"  placeholder="Enter The Catagory" >
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Choose Brand</label>
                        <input type="text" name="pbrand" value="<?php echo $rowedit["p_brand"]; ?>" class="form-control"  placeholder="Enter The Brand Name">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Choose Image</label>
                        <input class="form-control" type="file" accept="image/*" name="pimg">
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleInputUsername1">Prouduct Link</label>
                        <input type="text" name="plink" class="form-control"  value="<?php echo $rowedit["p_link"]; ?>" placeholder="Enter The Link">
                      </div>
                      <button type="submit" class="btn btn-gradient-primary mr-2" name="submit" >Edit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>              
</html>