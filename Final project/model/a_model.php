<?php 

require_once 'db_connect.php';
 

function showAllPack(){
	$conn = db_conn();
    $selectQuery = 'SELECT  * FROM `pack_list` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function showPack($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `pack_list` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}




function searchPack($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `pack_list` WHERE name = ? ";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addPack($data){
	$conn = db_conn();
    $selectQuery = "INSERT into pack_list (name, day, price)
VALUES (:name, :day, :price)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':day' => $data['day'],
        	':price' => $data['price']
        	
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updatePack($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE pack_list set  name = ?, day = ?, price = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'],$data['day'],$data['price'], 
            $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    } 
    
    $conn = null;
    return true;
}

function deletePack($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `pack_list` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}