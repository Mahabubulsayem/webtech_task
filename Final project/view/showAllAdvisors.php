<?php  
require_once '../controller/advisorInfo.php';

$advisors = fetchAllAdvisors();




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Surname</th>
			<th>Username</th>
			<th>Password</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($advisors as $i => $advisor): ?>
			<tr>
				<td><a href="showAdvisor.php?id=<?php echo $advisor['advisor_id'] ?>"><?php echo $advisor['name'] ?></a></td>
				<td><?php echo $advisor['surname'] ?></td>
				<td><?php echo $advisor['username'] ?></td>
				<td><?php echo $advisor['password'] ?></td>
				<td><a href="editAdvisor.php?id=<?php echo $advisor['advisor_id'] ?>">Edit</a>&nbsp;<a href="../controller/deleteAdvisor.php?id=<?php echo $advisor['advisor_id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>

			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>