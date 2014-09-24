<?php
if (ini_get("session.use_cookies")) {
    // Prepare and swipe cookies
    $params = session_get_cookie_params();
    // clear cookies and sessions
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

include 'isLogged.php';
$_SESSION['isLogged']=FALSE;
$title = "Administration";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
<link href="../css/adminsLog.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../js/jsLog.js"></script>
</head>
<body class="body">
<div class="errorMenu">
    <img src="../img/stop.jpg"
    <h2>Your user or password is wrong !</h2>
</div>
<div class="wrapper">
    <form method="POST" action="isLogged.php">
        <div class="imgLogo">
            <img src="../img/lock.jpg"/>
        </div>
        <div class="log">
            <!--<label for="user">Admin User</label>-->
            <input type="text" name="user" placeholder="Портебителско име" required="required" autofocus="autofocus" style="height:25px;padding-left:5px;">
            <!--<label for="pass">Password</label>-->
            <input type="password" name="pass" placeholder="Парола" required="required" style="height:25px;padding-left:5px;"/>
            <input type="submit" class="button" value="Вход"/>
        </div>
    </form>
</div>
</body>
</html>