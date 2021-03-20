<?php

require_once 'Model.php';

if (isset($_POST['findProduct'])) {
	
		echo $_POST['product_name'];

    try {
    	
    	$allSearchedProduct = searchProduct($_POST['product_name']);
    	require_once '../searchallProduct.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

