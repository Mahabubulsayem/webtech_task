<?php 
session_start();
if (isset($_SESSION['user']))
{
    if ($_SESSION['user']['role']!== 'user'){
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
    <title>User Dashboard</title>
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
    
    <h2 class="text"> Welcome User Dashboard </h2><br>

    
    
    <div class="side-content">
        
        <div class="side-content" >
            
            <ul>
                <li><a href="clientDashboard.php" class="cta-button">Dashboard</a></li><br>
                <li><a href="clientProfile.php" class="cta-button">Profile </a></li><br>
                <li><a href="clientEditProfile.php" class="cta-button">Edit Profile </a></li><br>
                <li><a href="clientSelectpac.php" class="cta-button"> Select Pacage </a></li><br>
                <li><a href="../logout.php" class="cta-button">Logout</a></li><br>
            </ul>


            <div class="body, h1, h2, p, ul, li text ">
<div class="div">
    
<p class="content p ">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut a tempora sunt iusto culpa quisquam possimus eligendi, fugit illo aspernaaaaa aaaaaaaa aaaaaa aaa aaaaa aaaaaaa aaa aaaa aaaaaa aaa    a  aatur.  Debitis vel noaeufiadf uhaiu auh auh puhap u piua u a pa puhapiu pa pah pu ap hpaoui hpoiash  h oihouihopui hoa ophopao oh af n nulla cumque molestias! Assumenda sed ducimus nostrum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, ut commodi nostrum aspernatur qui a odit, provident optio aliquid dignissimos vitae. Deserunt, explicabo quaerat aut porro culpa ipsam ipsum commodi ut blanditiis totam dolores voluptatibus, suscipit libero aliquam cum ratione quisquam facilis fugit voluptatum nemo. Eligendi minus quia ducimus aperiam, earum, obcaecati sit hic nihil reiciendis tenetur natus fugiat provident nam ipsum ut maiores commodi porro corporis, voluptatum aliquid voluptate nobis! Optio voluptatum fuga iusto, vero porro ipsum dolorem ab maiores quo, maxime eligendi esse nemo officiis est obcaecati tenetur excepturi beatae accusantium ipsa totam itaque deserunt fugit. Tempora doloremque voluptates laudantium consequatur. Ea tempore maxime perspiciatis et laborum, aut nulla eum, incidunt nobis totam pariatur quae magni odit dolores quaerat ut! Ducimus, enim repellendus. Tempore eaque voluptatum in vel suscipit eligendi adipisci quas expedita repudiandae cumque molestiae, accusamus ullam? Voluptates pariatur incidunt suscipit doloribus obcaecati assumenda consectetur fugiat numquam provident ipsam quisquam dolorem, veniam beatae dolorum autem temporibus sit molestias praesentium, modi facilis similique amet excepturi fugit. Porro, autem fugiat labore ipsam sequi, ducimus quaerat ratione ut eligendi soluta, molestias tempora libero cum odio ab sed doloribus! Quis ut nihil minima, maxime nisi at. Esse, ex facilis distinctio explicabo repellendus dicta culpa illo? Impedit quidem ex doloremque. Earum dignissimos iste culpa veritatis nobis id et voluptates in, modi fugit tempore nulla. Reiciendis repellat blanditiis quis sequi soluta optio laboriosam perspiciatis rerum quos officiis, aperiam sit dolorem iure facilis dolores delectus hic voluptatem voluptas eaque non placeat aut? Amet quam quaerat sunt enim officiis distinctio et velit. Expedita dignissimos veritatis laborum corrupti, molestiae ratione pariatur deleniti fugit alias voluptatem, repellat sed. Voluptatem molestiae dolorem velit repudiandae, saepe facilis sapiente eveniet illo ex cupiditate nobis nihil vel ipsum ut. Cumque, pariatur deserunt? Saepe ipsum reprehenderit, quod doloribus vero nam fugit veniam?</p>
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
