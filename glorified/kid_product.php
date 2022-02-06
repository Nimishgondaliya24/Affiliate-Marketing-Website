<?php
    $con = mysqli_connect("localhost","root","","login_db");	
	$conadd = mysqli_query($con,"select * from giveadd") or die(mysqli_error($con));
	$num_add = mysqli_num_rows($conadd);
	echo $num_add;
?>