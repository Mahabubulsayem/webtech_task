
<?php

 

include '../model/db_connect.php';
$conn= db_conn();
if(isset($_POST['submit'])){

 
    function updateStudent($id, $data){
        $conn = db_conn();
        $selectQuery = "UPDATE user_info set Name = ?, Surname = ?, Username = ? where ID = ?";
        try{
            $stmt = $conn->prepare($selectQuery);
            $stmt->execute([
                $data['name'], $data['surname'], $data['username'], $id
            ]);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
        $conn = null;
        return true;
    }

 

};
?>