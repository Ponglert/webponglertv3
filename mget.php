<?php
    include'dbconnect.php';
    if(isset($_GET['id_user'])){
	if($_GET['id_user'] == '123456'){
           $stmt=$con->prepare("SELECT * from members");
           $stmt->execute();
           $results = $stmt->fetchAll();
           echo json_encode($results);
	}else{
	   $response["id"] = 0;
           echo json_encode($response);
	}
    }else{
        $response["id"] = 0;
        echo json_encode($response);
    }
?>