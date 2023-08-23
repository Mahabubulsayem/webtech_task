<?php 

require_once '../model/model.php';

if (deleteAdvisor($_GET['id'])) {
    header('Location: ../view/showAllAdvisors.php');
}

 ?>