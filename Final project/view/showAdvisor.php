<?php  
require_once '../controller/advisorInfo.php';

$advisor = fetchAdvisor($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
<div class="header">
        <h1 class="website-title">ProCare Solutions</h1>
        <nav>
            <ul>
                <li><a href="../index.php" class="button">Home</a></li>

            </ul>
        </nav>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Surname</th>
		<th>Username</th>
		<th>Password</th>
	</tr>
	<tr>
		<td><a href="showAdvisor.php?id=<?php echo $advisor['advisor_id'] ?>"><?php echo $advisor['name'] ?></a></td>
		<td><?php echo $advisor['surname'] ?></td>
		<td><?php echo $advisor['username'] ?></td>
		<td><?php echo $advisor['password'] ?></td>
	</tr>

</table>


</body>
</html>