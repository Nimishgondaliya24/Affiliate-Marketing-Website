<?php
    $con = mysqli_connect("localhost","root","","login_db");
    
    if(isset($_GET['delete_id'])){
        $deleteaddid=$_GET['delete_id'];
        $q=mysqli_query($con,"delete from giveadd where u_id='$deleteaddid'") or  die(mysqli_error($con));
    }

    if(isset($_GET['add_id'])){
        $addid=$_GET['add_id'];    
        $q=mysqli_query($con,"update giveadd set u_permission='1' where u_id='$addid'") or die(mysqli_error($con));
    
    }

    if(isset($_GET['remove_id'])){
        $remid=$_GET['remove_id'];    
        $q1=mysqli_query($con,"delete from giveadd where u_id='$remid'") or die(mysqli_error($con));
    }

    if(isset($q)){
        echo "<script>window.location='add_ad.php';</script>";
    }
    else if(isset($q1)){
        echo "<script>window.location='edit_add.php';</script>";
    }
?>