<?php

include_once '../database/db.php';
/*$db = new DatabaseConnect;
$sql = "SELECT * FROM `news`";
$result = $db->execute($sql);*/
if ($_POST) {
    if (!empty($_POST['title'])) {
        if (isset($_FILES['file'])) {
            $allowedExt = array("gif", "jpeg", "jpg", "png", "JPG");
            $temp = explode(".", $_FILES["file"]["name"]);
            $extension = end($temp);

            if ((($_FILES["file"]["type"] == "image/gif")
                    || ($_FILES["file"]["type"] == "image/jpeg")
                    || ($_FILES["file"]["type"] == "image/jpg")
                    || ($_FILES["file"]["type"] == "image/pjpeg")
                    || ($_FILES["file"]["type"] == "image/x-png")
                    || ($_FILES["file"]["type"] == "image/png")) && in_array($extension, $allowedExt)) {
                if ($_FILES["file"]["size"] < 8000000) {
                    if ($_FILES["file"]["error"] > 0) {
                        $error = "Имаме проблем с прикачването на тази снимка !";
                    } else {
                        if (file_exists("../img/" . $_FILES["file"]["name"])) {
                            $error = $_FILES["file"]["name"] . " вече съществува. ";
                        } else {
                            if ($_POST) {
                                $err = '';
                                $message = '';
                                $title = trim($_POST['title']);
                                $date = trim($_POST['date']);
                                $content = trim($_POST['text']);
                                $typeNews = trim($_POST['typeNews']);
                                if($typeNews == 'special'){
                                    $digTypeNews = 1;
                                }else{
                                    $digTypeNews = 0;
                                }
                                if (mb_strlen($title) < 5) {
                                    $err.=' Заглавието е прекалено кратко. ';
                                }
                                if (mb_strlen($content) < 5) {
                                    $err.=' Новината е прекалено кратко. ';
                                }
                                if (mb_strlen($err) > 1) {
                                    $error = $err;
                                } else {
                                    $db = new DatabaseConnect;
                                    $filepath = $_FILES["file"]["name"];
                                    $sql="INSERT INTO `studsavet`.`news` (`title`, `date`, `content`, `picture`, `isImportant`, `readable`) VALUES ('" . $db->escape($title) . "', '" . $db->escape($date) . "', '" . $db->escape($content) . "', '" . $filepath . "', '".$digTypeNews."', '0');";
                                    $query = $db->execute($sql);
                                    move_uploaded_file($_FILES["file"]["tmp_name"], "../img/" . $_FILES["file"]["name"]);

                                    $message = "Новината е качена успешно !";
                                   // echo $message;
                                }
                            }
                        }
                    }
                } else {
                    $error = 'Файлът е прекалено голям';
                }
            } else {
                $error = "Грешен тип файл или проблем с файла!";
            }
        }
    } else {

    }
}
if (isset($message)) {
    //echo $message;
    include_once 'adminsProduct.php';
} else if (isset($error)) {
    //echo $error;
    include_once 'adminsProduct.php';
}