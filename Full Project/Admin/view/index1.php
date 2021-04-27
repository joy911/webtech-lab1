<?php

include("dbconnection.php");
    
	if(isset($_POST['type']) == 1){
		$loginid =$_POST['loginid'];
		 $query ="SELECT * FROM doctor where loginid ='".$loginid."' ";
		$result =mysqli_query($con, $query);
		$rowcount=mysqli_num_rows($result);
		if($rowcount >0){
			echo "<span class='status-not-available'>Loginid is exist.</span>";
		}else{
			 // echo "<span class='status-available'> Loginid Not Available.</span>";
		}
	}
?>


<!-- <?php

include("dbconnection.php");
    
	if(isset($_POST['type']) == 1){
		$loginid =$_POST['loginid'];
		 $query ="SELECT * FROM patient where loginid ='".$loginid."' ";
		$result =mysqli_query($con, $query);
		$rowcount=mysqli_num_rows($result);
		if($rowcount >0){
			echo "<span class='status-not-available'>Loginid is exist.</span>";
		}else{
			 // echo "<span class='status-available'> Loginid Not Available.</span>";
		}
	}
?> -->