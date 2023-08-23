
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
    
    <h2 class="text"> Welcome To Your Profile  </h2><br>

    
    
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

            <div class="form_profile">



<div class="text"> 
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



    @include('../../model/db_connect.php');
    $conn= db_conn();
    if (!isset($_SESSION['user'])) {
        header("Location: login.php");
        exit();
    }

    $user = $_SESSION['user'];

    // Retrieve additional user information
    $query = "SELECT name, username, dob, email, phone FROM user WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $user['id']);
    $stmt->execute();



    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>



       <!-- <h2>Welcome, <?php echo $user      ['username']; ?>!</h2> -->
    

<table border="1"> 

<thead>
<tr>
        <th>NAME</th>
        <th>USER NAME </th>
        <th>DATE OF BIRTH</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        
</tr>
</thead>
<tbody>
<tr>
   <td> <p><?php echo $user['name']; ?></p></td>
   <td> <p><?php echo $user['username']; ?></p></td>
   <td> <p><?php echo $user['dob']; ?></p></td>
   <td> <p><?php echo $user['email']; ?></p></td>
   <td> <p><?php echo $user['phone']; ?></p></td>
   
</tr>


</tbody>


</table>

<br><br>
<a href="advisorEditProfile.php" class="cta-button">Edit </a>


</div>




</div>




</div>
</div>

<br><br><br>
    
    <div class="footer">
        <p>&copy; 2023 Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>
