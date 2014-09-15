<?php
$title = "Administration";
//include_once('addNews.php');

//include_once '../database/db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="../js/jsProduct.js"></script>
<link href="../css/adminsProduct.css" rel="stylesheet" type="text/css"/>
</head>
<body class="body">
<img src="../img/Background.jpg" id="background">
    <div class="menu">
        <nav><ul>
                <li id="newsLink"><a href="javascript:void(0)" id="newsLink" title="Новини">Новини</a></li>
                <li id="addAdminLink"><a href="javascript:void(0)" id="addAdminLink" title="Добави Администратор">Добави Администратор</a></li>
                <li><a href="../index.php" title="Към сайта">Към сайта</a></li>
                <li><a href="login.php" title="Изход">Изход</a></li>
            </ul></nav>
    </div>
    <div class="wrapper" id="mainWrapper">
        <?php
        if(!empty($message)){?>
            <div id="message"><p><?php echo $message;?></p><span id="removeMessage">X</span></div>
        <?php
        }elseif(!empty($error)){?>
            <div id="errorMessage"><p><?php echo $error;?></p><span id="removeError">X</span></div>
        <?php
        }elseif(!empty($messageAdmin)){?>
            <div id="errorMessage"><p><?php echo $messageAdmin;?></p><span id="removeError">X</span></div>
            <!--<style>#allNews{display: none!important;}.addAdmin{display: block !important;}</style>-->
        <?php
        }elseif(isset($userIsAdd)){
            if($userIsAdd == true){?>
            <div id="message"><p><?php echo "Допълнителният админски акаунт беше добавен успешно";?></p><span id="removeMessage">X</span></div>
        <?php
        }
        }

        ?>
        <div class="addNews">
            <form method="POST" action="addNews.php" enctype="multipart/form-data">
                <input type="text" name="title" required="required" placeholder="Заглавие на новината" autofocus="autofocus"/><br/>
                <input type="date" name="date" required="required" placeholder="Дата"/><br/>
                <textarea name="text" required="required" placeholder="Новината"></textarea><br/>
                <input type="file" name="file" id="file"/><br/>
                <label for="radioSave">Важна новина</label>
                <input type="radio" value="special" name="typeNews"/><br/>
                <label for="radioSpecial">Обикновена новина</label>
                <input type="radio" value="simple" name="typeNews"/>
                <input type="submit" value="Добави новината"/>
            </form>
        </div>

        <div id="allNews">
            <table class="table">
                <tr><th>Номер</th><th>Заглавие</th><th>Дата</th><th>Новина</th><th>Снимка</th><th>Важност</th><th>Четимост</th><th>Премахване</th></tr>
                <?php
                include_once '../database/db.php';
                $db = new DatabaseConnect;
                $sql = "SELECT * FROM `news`";
                $result = $db->execute($sql);
                while ($row = $result->fetch_assoc()) {
                    if(strlen($row["content"])> 50){
                        $content="";
                        $helpString = $row["content"];
                        for($i=0;$i<50;$i++){
                            $content.=$helpString[$i];
                        }
                        $content.="...";
                    }else{
                        $content=$row["content"];
                    }
                    echo '<tr id="newsRow'. $row["id"].'"><td>' . $row["id"] . '</td><td>' . htmlspecialchars($row["title"]) . '</td><td>' . htmlspecialchars($row["date"]) . '</td><td>' . htmlspecialchars($content) . '</td><td style="width: 8%;"><img src="../img/' . $row["picture"] . '"/></td><td>' . $row["isImportant"] . '</td><td>' . $row["readable"] . '</td><td class="imgRemove"><img class="imgForRemoveNews" id="news'.$row["id"].'" src="../img/removeNews.png"/></td></tr>';
                }
                ?>
            </table>
        </div>
        <div class="addNews addAdmin">
            <form method="post" action="addAdmin.php">
                <input type="text" name="username" required="required" placeholder="Потребителско име">
                <input type="password" name="pass" required="required" placeholder="Парола">
                <input type="password" name="pass2" required="required" placeholder="Потвърдете паролата">
                <input type="submit" value="Регистрирай"/>
            </form>
        </div>
    </div>
</body>
</html>
