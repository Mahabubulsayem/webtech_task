<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
    <script src="../assets/script.js"></script>
</head>
<body>
    <h1>Login</h1>
    <form action="../index.php?action=login" method="post" onsubmit="return validateLoginForm()">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
