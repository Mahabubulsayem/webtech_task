<?php  
require_once '../model/a_model.php';


if (isset($_POST['updatePack'])) {
	$pack['name'] = $_POST['name'];
	$pack['day'] = $_POST['day'];
	$pack['price'] = $_POST['price'];
	
  if (updatePack($_POST['id'], $pack)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../view/showPack.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>