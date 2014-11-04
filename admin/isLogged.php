<?php
session_start();
include '../database/db.php';
$db = new DatabaseConnect;
$sql = "SELECT * FROM `users`";
$result = $db->execute($sql);
if(isset($_POST) && !empty($_POST['user'])){
$user = trim($_POST['user']);
$pass = $_POST['pass'];

}
if(!empty($user) && !empty($result)){
    while($row=$result->fetch_assoc()){
       if($row['user'] == $user && password_verify($pass, $row['password'])){
           $_SESSION['isLogged']=TRUE;
           $_SESSION['user']=$user;
           header('Location: adminsProduct.php');
       }
    }
    if(!$_SESSION['isLogged']){
        header('Location: login.php');
    }

}
