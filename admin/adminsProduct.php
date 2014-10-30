<?php
session_start();
$title = "Administration";
if(!isset($_SESSION['user'])){
    header('Location: login.php');
}
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
                <li id="composition"><a href="javascript:void(0)" id="composition" title="Списъл с членове">Списък на състава</a></li>
                <li><a href="../index.php" title="Към сайта">Към сайта</a></li>
                <li><a href="login.php" title="Изход">Изход</a></li>
            </ul></nav>
    </div>
    <div id="result">

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
                <input type="radio" value="simple" name="typeNews"/><br/>
                <label for="isHavePdf">Ще добавяте ли PDF файл</label>
                <input type="checkbox" value="pdf" name="isHavePdf"/>
                <div class="infoPDF" id="idInforPdf">
                    <input type="text" name="pdfHref" placeholder="Текстът за линка на PDF / Ако липсва текст ще бъде зададен такъв от системата" />
                    <input type="file" name="file2" id="file2"/><br/>
                </div>
                <input type="submit" value="Добави новината"/>

            </form>
        </div>

        <div id="allNews">
            <table class="table">
                <tr><th>№</th><th>Заглавие</th><th>Дата</th><th>Новина</th><th>Снимка</th><th>Важност</th><th>PDF</th><th>Четена</th><th>Изтриване</th></tr>
                <?php
                include_once 'searchForNews.php';
                for ($i=0; $i < $counter; $i++) { 
                    $showedId = $i + 1;
                      echo '<tr id="newsRow'. $news[$i]["id"].'">
                            <td>' . $showedId . '</td>
                            <td title="'.htmlspecialchars($news[$i]["title"]).'">' . htmlspecialchars($news[$i]["titleMini"]) . '</td>
                            <td>' . htmlspecialchars($news[$i]["date"]) . '</td>
                            <td title="'.htmlspecialchars($news[$i]["unwrContent"]).'">' . htmlspecialchars($news[$i]["content"]) . '</td>
                            <td style="width: 8%;"><a href="../news.php?id='. $news[$i]["id"].'"><img src="../img/' . $news[$i]["picture"] . '"/></a></td>
                            <td>' . $news[$i]["isImportant"] . '</td>
                            <td>'. $news[$i]["isHavePdf"] .'</td>
                            <td>' . $news[$i]["readable"] . '</td>
                            <td class="imgRemove"><img class="imgForRemoveNews" id="news'.$news[$i]["id"].'" src="../img/removeNews.png"/></td></tr>';
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

        <div class = "composition">
            <div class="addMember">
                <img src="../img/AddMember.png" alt="" />
                <form method="post" action="addMember.php">
                    <input type="text" name="firstname" required="required" placeholder="Име"/>
                    <input type="text" name="lastname" required="required" placeholder="Фамилия"/>
                    <input type="email" name="email" required="required" placeholder="Емайл"/>
                    <input type="text" name="specialty" required="required" placeholder="Специалност"/>
                    <select name="faculty">
                        <option value="1">ФАКУЛТЕТ ПО ХИМИЧНИ ТЕХНОЛОГИИ</option>
                        <option value="2">ФАКУЛТЕТ ПО ХИМИЧНО И СИСТЕМНО ИНЖЕНЕРСТВО</option>
                        <option value="3">ФАКУЛТЕТ ПО МЕТАЛУРГИЯ И МАТЕРИАЛОЗНАНИЕ</option>
                    </select>  
                    <input type="submit" value="Добави"/>
                </form>
            </div>
            <div class = "members">
                <table>
                    <tbody>
                    <tr><th>№</th><th>Име</th><th>Фамилия</th><th>Емайл</th><th>Специалност</th><th>Факултет</th><th>Изтриване</th></tr>
                    <?php
                        include_once 'searchForComposition.php';
                        for ($i=0; $i < $counter; $i++) { 
                            $showedId = $i + 1;
                          echo '<tr id="compositionRow' . $composition[$i]["id"] .'">
                                <td>' . $showedId. '</td>
                                <td>' . $composition[$i]["fname"] .'</td>
                                <td>' . $composition[$i]["lname"] . '</td>
                                <td>' . $composition[$i]["email"] . '</td>
                                <td title="'.$composition[$i]["specialty"].'">' . $composition[$i]["specialtyWrapped"]  . '</td>
                                <td>' . $composition[$i]["faculty"]  . '</td>
                                <td class="imgRemove"><img class="imgForRemoveComposition" id="composition'.$composition[$i]["id"].'" src="../img/removeMember.png"/></td></tr>';
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>











