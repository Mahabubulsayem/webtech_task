

<?php  
require_once '../model/a_model.php';


if (isset($_POST['createPack'])) {
	$data['name'] = $_POST['name'];
	$data['day'] = $_POST['day'];
	$data['price'] = $_POST['price'];
	//$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
	
  if (addPack($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>