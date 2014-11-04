<?php include '../database/db.php';
$db = new DatabaseConnect;
$id = $db->escape($_POST['value']);
$sql = "UPDATE `news` SET `isDeleted` = '1' WHERE `news`.`id` = ".$id.";";
$db->execute($sql);
