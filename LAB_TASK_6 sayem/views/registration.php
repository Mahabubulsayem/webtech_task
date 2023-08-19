<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <script src="../assets/script.js"></script>
</head>
<body>
    <h1>Registration</h1>
    <form action="../index.php?action=register" method="post" onsubmit="return validateRegistrationForm()">
        <input type="text" name="username" id="username" placeholder="Username" required><br>
        <input type="password" name="password" id="password" placeholder="Password" required><br>
        <span id="usernameError" class="error"></span><br>
        <span id="passwordError" class="error"></span><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
