<?php  
require_once '../model/model.php';


if (isset($_POST['updateAdvisor'])) {
	$data['name'] = $_POST['name'];
	$data['surname'] = $_POST['surname'];
	$data['username'] = $_POST['username'];
	//$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);;

  if (updateAdvisor($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../view/showAdvisor.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>