<?php  
require_once 'Model.php';


if (isset($_POST['addProduct'])) {
	$data['name'] = $_POST['name'];
	$data['buyingPrice'] = $_POST['buyingPrice'];
	$data['sellingPrice'] = $_POST['sellingPrice'];
	
	

  if (addProduct($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>