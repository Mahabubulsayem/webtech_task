<?php 

require_once '../controller/advisorInfo.php';
$advisor = fetchAdvisor($_GET['id']);


 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../controller/updateAdvisor.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $advisor['name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Surname:</label><br>
  <input value="<?php echo $advisor['surname'] ?>" type="text" id="surname" name="surname"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $advisor['username'] ?>" type="text" id="username" name="username"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateAdvisor" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

