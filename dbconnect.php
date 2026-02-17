<?php
    $host = "localhost";
    $username = "root"; //UserName ที่ใช้ login ใน phpMyAdmin
    $password = ""; //Password ที่ใช้ login ใน phpMyAdmin
    $dbname = "ponglertv2"; //ชื่อฐานข้อมูลที่เราสร้าง
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