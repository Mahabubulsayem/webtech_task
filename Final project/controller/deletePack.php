<?php 

require_once '../model/a_model.php';

if (deletePack($_GET['id'])) {
    header('Location: ../view/showAllPack.php');
}


 ?>