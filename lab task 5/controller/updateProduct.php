<?php  
require_once 'Model.php';


if (isset($_POST['updateProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buyingPrice'] = $_POST['buyingPrice'];
	$data['sellingPrice'] = $_POST['sellingPrice'];
	
	


  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to display product
  	header('Location: ../display.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are displayd to access this page.';
}


?>
