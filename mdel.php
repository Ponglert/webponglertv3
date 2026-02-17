<?php
    include'dbconnect.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql = "DELETE FROM members WHERE id = '".$id."' ";
        $stmt = $con->prepare($sql);
        try{
            $stmt->execute();
            $response["success_msg"] = 1;
            echo json_encode($response);
        }catch(PDOException $e){
            $response["success_msg"] = -1;
            echo json_encode($response);
        }
    }
?>