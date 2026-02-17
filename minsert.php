<?php
    include 'dbconnect.php';
    if(isset($_POST['names'])){ 
        $names = trim($_POST['names']);
        $tel = trim($_POST['tel']);
        $email = trim($_POST['email']);
        try {
            $stmt = $con->prepare("INSERT INTO members (names, tel,email) VALUES (:names, :tel, :email)");
            $stmt->bindparam(':names', $names);
            $stmt->bindparam(':tel', $tel);
            $stmt->bindparam(':email', $email);
            $stmt->execute();
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