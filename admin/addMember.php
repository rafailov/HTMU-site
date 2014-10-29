<?php
include_once '../database/db.php';
$db = new DatabaseConnect;
if ($_POST) {
	if ($_POST["faculty"]) {

		$fname = trim($_POST['firstname']);
		$lname = trim($_POST['lastname']);
		$email = trim($_POST['email']);
		$specialty = trim($_POST['specialty']);
		$faculty = (int)$_POST['faculty'];

		$sql = "SELECT composition.email FROM  `composition` JOIN faculty ON composition.faculty_id = faculty.id WHERE faculty.id =" . $faculty;
		$result = $db->execute($sql);
		$counter = 0;
		$exist = false;
		while ($row = $result->fetch_assoc()) {
			if ($row['email'] == $email) {
				$exist = true; 
			}
		}

		if (!$exist) {
			if (strlen($fname) > 3 || strlen($fname) < 35 || strlen($lname) > 3 || strlen($lname) < 35 || strlen($email) > 5 || strlen($email) < 250 || strlen($specialty) > 5 || strlen($specialty) < 300) {
				$sql = "INSERT INTO `composition` (`fname`, `lname`, `email`, `specialty`, `faculty_id`) VALUES ('".$db->escape($fname)."', '".$db->escape($lname)."', '".$db->escape($email)."', '".$db->escape($specialty)."', '".$db->escape($faculty)."')";
        		
        		$query = $db->execute($sql);
                if (is_array($query) && $query[0] == 'error') {
                        $error .= $query[1];
                }else{
                	$message = "Беше добавен нов член в структурата на студентски съвет!";
                }
			}else{
				$error = "Информацията не е въведена правилно. Излизате от диапазона за някое от полетата !";
				//TODO: ERROR MESSAGE : INVALID ARGUMENT OUT OF RANGE
			}
		}else{
			$error = "Членът вече съществува в този факултет !";
			//TODO: ERROR MESSAGE : This Person exist !
		}
	}
}
if (!isset($message) && !isset($error)) {
    $error = 'Добавянето на члена в студентски съвет не беше осъществено !'; 
}
  include_once 'adminsProduct.php';