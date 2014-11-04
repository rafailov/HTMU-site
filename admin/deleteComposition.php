<?php 
include_once '../database/db.php';
$db = new DatabaseConnect;
$id = $db->escape($_POST['value']);
$sql = "DELETE FROM `composition`  WHERE `composition`.`id` = ".$id.";";
$res = $db->execute($sql);
if (is_array($res) && $res[0] == 'error') {
        $error .= $res[1];
}else{
	$message = "Изтриването успешно";
}