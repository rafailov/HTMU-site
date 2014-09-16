<?php
include_once 'database/db.php';
$db = new DatabaseConnect;
if(isset($newsId)){
    $sql = "SELECT * FROM `news` where `id` = ".$newsId;
    $result = $db->execute($sql);
    while($row=$result->fetch_assoc()){
        if($row['isDeleted'] == 0){
            $newsImageArr[] = $row['picture'];
            $newsIdArr[] = $row['id'];
            $newsDateArr[] = $row['date'];
            $newsTitleArr[] = $row['title'];
            $newsContentArr[] = $row['content'];
            $newsReadableArr[] = $row['readable'];
            $newsIsDeletedArr[] = $row['isDeleted'];
        }

    }
    $readable = intval($newsReadableArr[0]);
    $readable = $readable + 1;
    $sql = "UPDATE `news` SET `readable` = '".$readable."' WHERE `news`.`id` = ".$newsId;
    $db->execute($sql);
}

$sql = "SELECT * FROM `news`";
$result = $db->execute($sql);
while($row=$result->fetch_assoc()){
    if($row['isImportant'] == '1' && $row['isDeleted'] == 0){
        $imageNameSpecial[] = $row['picture'];
        $newsIdSpecial[] = $row['id'];
    }

    if($row['isDeleted'] == 0){
        $imageNameSimple[] = $row['picture'];
        $newsIdSimple[] = $row['id'];
        $newsDateSimple[] = $row['date'];
        $newsTitleSimple[] = $row['title'];
    }

}
