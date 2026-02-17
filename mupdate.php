<?php
    include 'dbconnect.php';
    if(isset($_POST['id'])){ 
        $id = $_POST['id'];
        $names = trim($_POST['names']);
        $tel = trim($_POST['tel']);
        $email = trim($_POST['email']);
        try {
            $stmt=$con->prepare("UPDATE members SET names=:names,tel=:tel,email=:email 
                WHERE id=:id");
            $stmt->execute(array('names'=>$names,':tel'=>$tel,':email'=>$email,':id'=>$id));
            if($stmt){
                $response["success_msg"] = 1;
                echo json_encode($response);
            }else{
                $response["success_msg"] = 0;
                echo json_encode($response);
            }
        }
        catch(PDOException $e) {
            $response["success_msg"] = -1;
            echo json_encode($response);
        }
    }
?>