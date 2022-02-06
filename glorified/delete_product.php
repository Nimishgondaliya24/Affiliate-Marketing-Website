<?php
    $con = mysqli_connect("localhost","root","","login_db");
    $deleteid=$_GET['delete_id'];
    $qdelete=mysqli_query($con,"delete from product_table where p_id='$deleteid'") or 
    die(mysqli_error($con));
    if($qdelete){
        echo "<script>window.location='edit_product.php';</script>";
    }


?>