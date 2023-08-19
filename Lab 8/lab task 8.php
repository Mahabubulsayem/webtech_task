<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<script>
  function validateForm() {
    var firstName = document.forms["registrationForm"]["firstName"].value;
    var lastName = document.forms["registrationForm"]["lastName"].value;
    var username = document.forms["registrationForm"]["username"].value;
    var password = document.forms["registrationForm"]["password"].value;
    var confirmPassword = document.forms["registrationForm"]["confirmPassword"].value;
    var email = document.forms["registrationForm"]["email"].value;
    var nationality = document.forms["registrationForm"]["nationality"].value;
    var dob = document.forms["registrationForm"]["dob"].value;

    if (firstName === "" || lastName === "" || username === "" || password === "" || confirmPassword === "" || email === "" || nationality === "" || dob === "") {
      alert("All fields are required.");
      return false;
    }

    if (password !== confirmPassword) {
      alert("Passwords do not match.");
      return false;
    }

    return true;
  }
</script>
</head>
<body>
<h2>Registration Form</h2>
<form name="registrationForm" onsubmit="return validateForm()" method="post">
  <label for="firstName">First Name:</label>
  <input type="text" id="firstName" name="firstName" required><br>

  <label for="lastName">Last Name:</label>
  <input type="text" id="lastName" name="lastName" required><br>

  <label for="username">User Name:</label>
  <input type="text" id="username" name="username" required><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required><br>

  <label for="confirmPassword">Confirm Password:</label>
  <input type="password" id="confirmPassword" name="confirmPassword" required><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br>

  <label for="nationality">Nationality:</label>
  <input type="text" id="nationality" name="nationality" required><br>

  <label for="dob">Date of Birth:</label>
  <input type="date" id="dob" name="dob" required><br>

  <input type="submit" value="Register">
</form>
</body>
</html>
