<?php 

require_once 'db_connect.php';


function showAllAdvisors(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `advisor` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showAdvisor($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `advisor` where advisor_id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchAdvisor($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `advisor` WHERE name LIKE '%$name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addAdvisor($data){
	$conn = db_conn();
    $selectQuery = "INSERT into advisor (name, surname, username, password)
VALUES (:name, :surname, :username, :password)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':surname' => $data['surname'],
        	':username' => $data['username'],
        	':password' => $data['password'],
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateAdvisor($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE advisor set name = ?, surname = ?, username = ? where advisor_id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['surname'], $data['username'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteAdvisor($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `advisor` WHERE `advisor_id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
?>