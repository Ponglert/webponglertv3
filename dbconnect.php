<?php
    $host = "localhost";
    $username = "ponglert"; //UserName ที่ใช้ login ใน phpMyAdmin
    $password = "masterx0"; //Password ที่ใช้ login ใน phpMyAdmin
    $dbname = "ponglert_myshop"; //ชื่อฐานข้อมูลที่เราสร้าง
    try{
        $con = new PDO('mysql:host='.$host.';dbname='.$dbname,$username,$password);
        $con ->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e){
        $str_err = $e->getMessage();
        echo $str_err;
        $e->getMessage()."<br>";
        exit();
    }
?>