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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advisor Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
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
    
    <h2 class="text"> Welcome! Advisor </h2><br>

    
    
    <div class="side-content">
        
        <div class="side-content" >
            
            <ul>
                <li><a href="advisordashboard.php" class="cta-button">Dashboard</a></li><br>
                <li><a href="advisorProfile.php" class="cta-button">Profile </a></li><br>
                <li><a href="advisorEditProfile.php" class="cta-button">Edit Profile </a></li><br>
                <li><a href="packagelist.php" class="cta-button"> Package List</a></li><br>
                <li><a href="../../controller/addPack.php" class="cta-button"> Add Package </a></li><br>
                <li><a href="../../controller/deletePack.php" class="cta-button"> Add/Delete Package </a></li><br>
                <li><a href="advisorPendingPak.php" class="cta-button"> Pending Package List </a></li><br>

                <li><a href="advisorComPak.php" class="cta-button"> Compleate Package List</a></li><br>

                <li><a href="../logout.php" class="cta-button">Logout</a></li><br>
            </ul>

            </div>

            
    
<p class=" p ">
    <div class="form_content">

  
<table border="1">
    <?php 
@include '../../model/db_connect.php';
$conn= db_conn();
$query = "SELECT id, name, day, price FROM pack_list  ";
$stmt = $conn->prepare($query);

 

// Execute the query
$stmt->execute();

 

// Fetch all rows from the result set
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<tr>
<th>Name</th>
<th>Duration</th>
<th>Price</th>

</tr>
<?php foreach ($users as $users): ?>
<tr>

<td><a href="../showPack.php ?id=<?php echo $users['id'] ?>"><?php echo $users['name'] ?></a></td>

<td><?php echo $users['day']; ?></td>
<td><?php echo $users['price']; ?></td>

</tr>
<?php endforeach; ?>
</table>  </div>

</p>


</div>

        
    <br><br><br>
       
    
    <div class="footer">
        <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>
