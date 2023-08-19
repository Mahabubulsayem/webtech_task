<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>
<body>
    <h1>Welcome to the Home Page</h1>
    <?php if (!$loggedIn): ?>
        <p><a href="login.php">Login</a> or <a href="registration.php">Register</a></p>
    <?php else: ?>
        <p><a href="dashboard.php">Dashboard</a> | <a href="profile.php">Profile</a> | <a href="logout.php">Logout</a></p>
    <?php endif; ?>
</body>
</html>
