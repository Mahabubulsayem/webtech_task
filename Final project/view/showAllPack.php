<?php 
session_start();
if (isset($_SESSION['user']))
{
    if ($_SESSION['user']['role']!== 'advisor'){
        header("location: ../login.php");
    }

    }
    else{
        header("location: ../login.php");
    }
?>


<?php  
require_once '../controller/packInfo.php';

$packs = fetchAllPack();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
    <div class="header">
        <h1 class="website-title">ProCare Solutions</h1>
        <nav>
            <ul>
                <li><a href="../../index.php" class="button">Home</a></li>

            </ul>
        </nav>
    </div><br> 
    
    <h2 class="text"> Updated List  </h2><br>

    
    
    <div class="side-content">
        
        <div class="side-content" >
            
        <ul>
                <li><a href="../view/advisor/advisordashboard.php" class="cta-button">Dashboard</a></li><br>
                <li><a href="../view/advisor/advisorProfile.php" class="cta-button">Profile </a></li><br>
                <li><a href="../view/advisor/advisorEditProfile.php" class="cta-button">Edit Profile </a></li><br>
                <li><a href="../view/advisor/packagelist.php" class="cta-button"> Package List</a></li><br>
                <li><a href="../controller/addPack.php" class="cta-button"> Add Package </a></li><br>
                <li><a href="../controller/deletePack.php" class="cta-button"> Add/Delete Package </a></li><br>
                <li><a href="../view/advisor/advisorPendingPak.php" class="cta-button"> Pending Package List </a></li><br>

                <li><a href="../view/advisor/advisorComPak.php" class="cta-button"> Compleate Package List</a></li><br>

                <li><a href="../view/logout.php" class="cta-button">Logout</a></li><br>
            </ul>
            </div>

            <div class="form_content">

 
<table border="1">
	<thead>
		<tr>
			<th>Name</th>
			<th>Day</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($packs as $i => $pack): ?>
			<tr>
				<td><a href="showPack.php?id=<?php echo $pack['id'] ?>"><?php echo $pack['name'] ?></a></td>
				<td><?php echo $pack['day'] ?></td>
				<td><?php echo $pack['price'] ?></td>
				
				<td><a href="editPack.php?id=<?php echo $pack['id'] ?>">Edit</a>&nbsp;<a href="../controller/deletePack.php?id=<?php echo $pack['id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>

			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>

</div>
</div>
</div>
<br><br><br>  
    <div class="footer">
        <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>


