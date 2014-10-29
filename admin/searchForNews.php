<?php
include_once '../database/db.php';
include_once 'functions.php';
$db = new DatabaseConnect;
$sql = "SELECT * FROM `news` where `isDeleted` = '0'";
$result = $db->execute($sql);
$counter = 0;
while ($row = $result->fetch_assoc()) {

    $content = stringWrapper($row["content"],24);
    $titleMini = stringWrapper($row["title"], 15);


    $isHavePdf = $row['isHavePdf'];
    if($isHavePdf == '1'){
        $isHavePdf = "Да";
    }else{
        $isHavePdf = "Не";
    }
    $news[$counter]["id"] = $row["id"];
    $news[$counter]["titleMini"] = $titleMini;
    $news[$counter]["date"] = $row["date"];
    $news[$counter]["content"] = $content;
    $news[$counter]["picture"] = $row["picture"];
    $news[$counter]["isImportant"] = $row["isImportant"];
    $news[$counter]["isHavePdf"] = $isHavePdf;
    $news[$counter]["readable"] = $row["readable"];

    $news[$counter]["unwrContent"] = $row["content"];
    $news[$counter]["title"] = $row["title"];
    $counter++;
}

