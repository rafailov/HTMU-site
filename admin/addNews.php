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
                            if(!empty($_FILES['file2']['name']) && isset($_FILES['file2']['name'])){
                                $allowedExt = array("pdf");
                                $temp = explode(".", $_FILES["file2"]["name"]);
                                $extension = end($temp);
                                if(($_FILES["file2"]["type"] == "text/pdf" || $_FILES["file2"]["type"] == "application/pdf"  ) && $_FILES["file"]["error"] == 0 && $_FILES["file2"]["size"] < 20000000 && in_array($extension, $allowedExt)){
                                    if (file_exists("../docs/" . $_FILES["file2"]["name"])) {
                                        $error = $_FILES["file2"]["name"] . " вече съществува. ";
                                    }else{
                                        $pdfHref = trim($_POST['pdfHref']);
                                        if(mb_strlen($pdfHref) < 1){
                                            $pdfHref = 'Прикаченият PDF можете да свалите от ТУК';
                                        }
                                       $tmpPDF = $_FILES["file2"]["tmp_name"];
                                       $pathPDF = "" . $_FILES["file2"]["name"];
                                    }
                                }else{
                                    $error .= " Има проблем с PDF файла";
                                }
                            }
                            if (!isset($error)) {
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
                                    if(isset($tmpPDF)){
                                        $sql="INSERT INTO `studsavet`.`news` (`title`, `date`, `content`, `picture`, `isImportant`,`isHavePdf`, `pdfPath`, `hrefText`, `readable`) VALUES ('" . $db->escape($title) . "', '" . $db->escape($date) . "', '" . $db->escape($content) . "', '" . $filepath . "', '".$digTypeNews."', '1', '" . $db->escape($pathPDF) . "', '" . $db->escape($pdfHref) . "',  '0');";
                                        
                                    }else{
                                        $sql="INSERT INTO `studsavet`.`news` (`title`, `date`, `content`, `picture`, `isImportant`, `readable`) VALUES ('" . $db->escape($title) . "', '" . $db->escape($date) . "', '" . $db->escape($content) . "', '" . $filepath . "', '".$digTypeNews."', '0');";

                                    }

                                    $query = $db->execute($sql);
                                    if (is_array($query) && $query[0] == 'error') {
                                            $error .= $query[1];
                                    }else{
                                        if(isset($tmpPDF)){
                                            move_uploaded_file($tmpPDF, $pathPDF);
                                        }
                                        move_uploaded_file($_FILES["file"]["tmp_name"], "../img/" . $_FILES["file"]["name"]);
                                        $message = "Новината е качена успешно !";
                                    }
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

if (!isset($message) && !isset($error)) {
    $error = ' Качването на новината не беше осъществено !'; 
}
  include_once 'adminsProduct.php';