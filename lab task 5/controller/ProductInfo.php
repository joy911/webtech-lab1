<?php 

require_once 'Model.php';

function fetchAllProduts(){
	return displayAll();

}
function fetchProducts($id){
	return display($id);

}
