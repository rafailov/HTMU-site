<?php
$error = '';
include_once '../database/db.php';
$db = new DatabaseConnect;
$sql = "SELECT * FROM `users`";
$result = $db->execute($sql);
//$result = mysqli_query($connect, 'SELECT `user_name`, `user_pass` FROM `users`');
if ($_POST) {
    $user = trim($_POST['username']);
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    if (mb_strlen($user) < 3) {
        $error.='Потребителското име е прекалено къса ! ';
    }
    if (mb_strlen($pass) < 5) {
        $error.='Паролата е прекалено къса ! ';
    }
    if ($pass != $pass2) {
        $error.='Паролите не съвпадат !  ';
    }
    while ($row = $result->fetch_assoc()) {
        if ($row['user'] == $user) {
            $error.='Вече съществува такъв потребител !';
        }
    }
    //include 'ifCorect.php';
    if(strlen($error) > 0){
        $messageAdmin =  $error;
        $userIsAdd = false;
        //exit;
    }else{
        $options = [
            'cost' => 12,
        ];
        $hashPass = password_hash($pass, PASSWORD_BCRYPT, $options);

        $sql = "INSERT INTO `studsavet`.`users` (`user`, `password`) VALUES ('". $db->escape($user)."', '".$pass."');";//need to add $hashPass
        $db->execute($sql);
        $userIsAdd = true;
    }


}

include_once 'adminsProduct.php';