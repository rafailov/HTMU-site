<?php
require_once('header.html');
if(isset($_GET['id'])){
    $newsId = $_GET['id'];
    require_once('getNews.php');
    if(isset($newsImageArr)){
        $theImage = $newsImageArr[0];
        $theId = $newsIdArr[0];
        $theDate = $newsDateArr[0];
        $theTitle = $newsTitleArr[0];
        $theContent = $newsContentArr[0];

    }else{
        header('location: index.php');
    }
}else{
    header('location: index.php');
}
?>
    <li ><a href="index.php" id="newsbutton" class="active">Новини</a></li>
    <li ><a href="For-us.php" id="forus" class="unActive">За Нас</a></li>
    <li ><a href="#" id="forStudents" class="unActive">За Студентите</a></li>
    <li><a href="contacts.php" id="contacts" class="unActive">Контакти</a></li>
    <li><a href="#" id="faq" class="unActive">FAQ</a></li>
    </ul>
    </nav>
    </header>
    <div id="newsBox">
        <div id="fullNews">
            <div class="bigTitle"><?php echo $theTitle;?></div>
            <span><?php echo $theDate;?></span>
            <img  src="img/<?php echo $theImage;?>"/>
            <p><?php echo $theContent;?></p>
        </div>

        <div id="otherNews">
            <?php
            if(isset($imageNameSimple) && isset($newsIdSimple) && isset($newsDateSimple) && isset($newsTitleSimple)){
                $size = sizeof($imageNameSimple);
                for($id = $size-1;$id>=0;$id--){
                    ?>
                    <div class="miniNews">
                        <a href="?id=<?php echo$newsIdSimple[$id];?>">
                            <img  src="img/<?php echo $imageNameSimple[$id];?>"/>
                            <div class="minititle"><?php echo$newsTitleSimple[$id];?></div>
                            <span><?php echo $newsDateSimple[$id];?></span>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
<?php
require_once('Footer.html');