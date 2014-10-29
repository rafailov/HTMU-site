<?php
$path = substr($_SERVER['PHP_SELF'],0,12); //--->/HTMU-site/trunk/ OR /nstudsavet/
include_once $_SERVER["DOCUMENT_ROOT"] . $path . 'database/db.php';
include_once $_SERVER["DOCUMENT_ROOT"] . $path . 'admin/functions.php';
$db = new DatabaseConnect;
$sql =  "SELECT composition.id, composition.fname , composition.lname , composition.email , composition.specialty , composition.faculty_id "
        ."FROM composition LEFT JOIN faculty ON faculty_id = faculty.id ORDER BY faculty.id";

$result = $db->execute($sql);
$counter = 0;
while ($row = $result->fetch_assoc()) {
    $specialtyWrapped = stringWrapper($row['specialty'],20);

    switch ($row['faculty_id']) {
    	case 1:
    		$faculty = "ФХТ";
    		break;
		case 2:
			$faculty = "ФХСИ";
			break;
		case 3:
			$faculty = "ФММ";
			break;
    	default:
    		$faculty = "Не Дефиниран";
    		break;
    }

    $composition[$counter]["id"] = $row["id"];
    $composition[$counter]["fname"] = $row['fname'];
    $composition[$counter]["lname"] = $row["lname"];
    $composition[$counter]["email"] = $row['email'];
    $composition[$counter]["specialtyWrapped"] = $specialtyWrapped;
    $composition[$counter]["specialty"] = $row['specialty'];
    $composition[$counter]["faculty"] = $faculty;
    $counter++;
}