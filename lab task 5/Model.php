<?php 

require_once 'db_connection.php';


function displyAll(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `addProduct` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function display($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `addProduct` where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchProduct($product_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `addProduct` WHERE buyingPrice LIKE '%$buying_Price%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addProduct($data){
	$conn = db_conn();
    $selectQuery = "INSERT into addProduct (Name, buyingPrice, sellingPrice)
VALUES (:name, :buyingPrice, :sellingPrice)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':buyingPrice' => $data['buyingPrice'],
        	':sellingPrice ' => $data['sellingPrice'],
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function editProduct($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE addProduct set Name = ?,name  = ?,sellingPrice=?,sellingPrice=? where ID = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['buyingPrice '], $data['sellingPrice'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `addProduct` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}