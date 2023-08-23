<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Advisor Dashboard</title>
</head>
<body>
</body>
</html>

<?php

 

include '../model/db_connect.php';
$conn= db_conn();
if(isset($_POST['submit'])){

 

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];

 

 

    $select = "SELECT * FROM user WHERE username = :username AND password = :password";
    $stmt = $conn->prepare($select);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

 

    if($stmt->rowCount() > 0){
        $error[] = 'User already exists!';
    } else {
        if($password != $cpassword){
            $error[] = 'Passwords do not match!';
        } else {
            $insert = "INSERT INTO user(name, username, password, cpassword, email, dob, phone, role) VALUES(:name, :username, :password, :cpassword, :email, :dob, :phone, :role)";
            $stmt = $conn->prepare($insert);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':cpassword', $cpassword);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':dob', $dob);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':role', $role);
            $stmt->execute();
            header('location:../view/login.php');
        }
    }

 

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>register form</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css">

<script>

   function validateName() {
    const Name = document.getElementById("Name").value;
    const nameError = document.getElementById("nameError");

    if (Name.trim() === "") {
      nameError.textContent = "Name is required";
      return false;
    }

    nameError.textContent = "";
    return true;
  }

  function validateUserName() {
    const username = document.getElementById("username").value;
    const usernameError = document.getElementById("usernameError");

    if (username.trim() === "") {
      usernameError.textContent = " username is required";
      return false;
    }

    usernameError.textContent = "";
    return true;
  }

 function validatePassword() {
    const password = document.getElementById("password").value;
    const passwordError = document.getElementById("passwordError");

    if (password.trim() === "") {
      passwordError.textContent = "Password is required";
      return false;
    }

    passwordError.textContent = "";
    return true;
  }

  function validateConfirmPassword() {
    const cpassword = document.getElementById("cpassword").value;
    const cpasswordError = document.getElementById("cpasswordError");

    if (cpassword.trim() === "") {
      cpasswordError.textContent = "Confirm Password is required";
      return false;
    }

    cpasswordError.textContent = "";
    return true;
  }

  function validateEmail() {
    const email = document.getElementById("email").value;
    const emailError = document.getElementById("emailError");

    if (email.trim() === "") {
      emailError.textContent = "Email is required";
      return false;
    }

    emailError.textContent = "";
    return true;
  }

  function validateDob() {
    const dob = document.getElementById("dob").value;
    const dobError = document.getElementById("dobError");

    if (dob.trim() === "") {
      dobError.textContent = "dob is required";
      return false;
    }

    dobError.textContent = "";
    return true;
  }

  function validatePhone() {
    const phone = document.getElementById("phone").value;
    const phoneError = document.getElementById("phoneError");

    if (phone.trim() === "") {
      phoneError.textContent = "phone is required";
      return false;
    }

    phoneError.textContent = "";
    return true;
  }

 

  function validateForm() {
    return (
      validateName() &&
      validateUserName()&&
      validatePassword()&&
      validateEmail()&&
      validateDob()&&
      validatePhone()
      );
   }
</script>
</head>
<body>
<div class="header">
        <h1 class="website-title">ProCare Solutions</h1>

       

        <div class="header">
        <nav>
            <ul>
                <li><a href="../index.php" class="button">Home</a></li>
                <li><a href="/view/login.php" class="button">Login</a></li>
            </ul>
        </nav>
        </div>
        
    </div><br>


      <b><h1 class="text">This Is Advisor regristration</h1><br></b>

<div class="center-content">

 

   <form action="" class="form_content" method="post">
<?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      
<form onsubmit="return validateForm();">

<div class="form-group">
<label for="Name">First Name:</label>
<input type="text" id="Name" name="name" onblur="validateName();" required>
<span id="nameError" style="color: red;"></span>
<br><br>


<div class="form-group">
<label for="username">User Name:</label>
<input type="text" id="username" name="username" onblur="validateUserName();" required>
<span id="usernameError" style="color: red;"></span>
<br><br>


<div class="form-group">
<label for="password">Password:</label>
<input type="text" id="password" name="password" onblur="validatePassword();" required>
<span id="passwordError" style="color: red;"></span><br>

<br>

<div class="form-group">
<label for="cpassword">Confirm Password:</label>
<input type="text" id="cpassword" name="cpassword" onblur="validateConfirmPassword();" required>
<span id="cpasswordError" style="color: red;"></span><br>
<br>


<div class="form-group">

<label for="email">Email:</label>
<input type="email" id="email" name="email" onblur="validateEmail();" required>
<span id="emailError" style="color: red;"></span><br>
<br>



<div class="form-group">

<label for="DOB">Date of Birth:</label>
<input type="date" id= "dob" name="dob" onblur="validateDob();" required ><br><br>
<span id="dobError" style="color: red;"></span><br>


<div class="form-group">

<label for="phone">Phone:</label>
<input type="text" id="phone" name="phone" onblur="validatePhone();" required>
<span id="phoneError" style="color: red;"></span><br>
<br>

<br>


<div class="form-group">
<select name="role">
<option value="user">User</option>

<!-- <option value="admin">admin</option> -->
</select></div><br>

<div class="text">
   <h2>
      <input type="submit" class="cta-button" name="submit" value="REGISTER NOW" class="form-btn"><br>
      <br></h2>
</div>      

</form>

 

</div>

 

</body>
</html>













