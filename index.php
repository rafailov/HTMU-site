<?php
require_once('header.html');
require_once('getNews.php');
?>
                        <li ><a href="index.php" id="newsbutton" class="active help">Новини</a></li>
                        <li ><a href="For-us.php" id="forus" class="unActive help">За Нас</a></li>
                        <li ><a href="students.php" id="forStudents" class="unActive help">За Студентите</a></li>
                        <li><a href="contacts.php" id="contacts" class="unActive help">Контакти</a></li>
                        <li><a href="#" id="faq" class="unActive help">FAQ</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <article></article>
                <article>
                    <section>
                        <article>
                            <div id="image">
                                <?php
                                if(isset($imageNameSpecial) && isset($newsIdSpecial)){
                                    $size = sizeof($imageNameSpecial);
                                ?>
                                <a id="bigImage" href="news.php?id=<?php echo$newsIdSpecial[$size - 1];?>">
                                <img  src="img/<?php echo $imageNameSpecial[$size-1];?>" alt="aaasdd"/>
                                </a>
                                <?php
                                }
                                ?>
                            </div>
                            <aside>
                                <div class="miniImage">
                                    <?php
                                    if(isset($imageNameSpecial) && isset($size) && isset($newsIdSpecial)){
                                    ?>
                                    <a href="javascript:setImage('img/<?php echo $imageNameSpecial[$size-1];?>', 'first', '<?php echo$newsIdSpecial[$size-1];?>')" ><img id="first" class="visual" src="img/<?php echo $imageNameSpecial[$size-1];?>"/></a>
                                    <a href="javascript:setImage('img/<?php echo $imageNameSpecial[$size-2];?>', 'second', '<?php echo$newsIdSpecial[$size-2];?>')" ><img id="second" src="img/<?php echo $imageNameSpecial[$size-2];?>"/></a>
                                    <a href="javascript:setImage('img/<?php echo $imageNameSpecial[$size-3];?>', 'third', '<?php echo$newsIdSpecial[$size-3];?>')" ><img id="third" src="img/<?php echo $imageNameSpecial[$size-3];?>"/></a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </aside>
                        </article>
                        <article id="news">
                            <nav>
                                <ul>
                                    <li><a style="color:white" href="?sort=lastest">НАЙ-НОВИ</a></li>
                                    <li><a style="color:white" href="?sort=desc">НАЙ-ЧЕТЕНИ</a></li>
                                </ul>
                            </nav>
                            <div id="newsImages">

                                <?php
                                if(isset($imageNameSimple) && isset($newsIdSimple) && isset($newsDateSimple) && isset($newsTitleSimple)){
                                    $size = sizeof($imageNameSimple);
                                    for($ID = $size - 1; $ID >= 0; $ID--){
                                    ?>
                                    <div class="theNews">
                                        <a href="news.php?id=<?php echo$newsIdSimple[$ID];?>">
                                            <div class="title"><h3><?php echo$newsTitleSimple[$ID];?><h3></div>
                                            <span><?php echo$newsDateSimple[$ID];?></span>
                                            <img  src="img/<?php echo$imageNameSimple[$ID];?>"/>
                                        </a>
                                    </div>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                            <aside>
                                <ul>
                                    <li id="listTitle"><h3>Новини с прикачени документи</h3></li>
                                    <?php
                                    if(isset($newsIdInfo) && isset($newsIsHavePDFInfo) && isset($newsTitleInfo)){
                                        $size = sizeof($newsIdInfo);
                                        for($ID = $size - 1; $ID >= 0; $ID--){
                                            
                                        ?>
                                        <hr>
                                            <li><a href="news.php?id=<?php echo$newsIdInfo[$ID];?>"><?php echo$newsTitleInfo[$ID];?></a></li>

                                        <?php
                                        }
                                    }
                                    ?>

                                </ul>
                            </aside>
                            <div id="advertising" >
                                
                                <div class="advertising">
                                    <a href="http://dl.uctm.edu/bg/"><img src="img/UCTM-logo.jpg" widht="155" height="150"/></a>
                                </div>

                                <div class="advertising">
                                    <a href="http://mmu2.uctm.edu/erasmus/index.html"><img src="img/erasmus_logos.png" widht="155" height="150" alt/></a>
                                </div>

                                <div class="advertising">
                                    <a href="http://www.mon.bg"><img src="img/logo-mon.png" widht="155" height="150" alt/></a>
                                </div>

                                <div class="advertising">
                                    <a href="http://www.esn.org"><img src="img/logo-erasmus.png" widht="155" height="150" alt/></a>
                                </div>

                                <div class="advertising">
                                    <a href="http://www.isic.bg"><img src="img/isic-logo.png" widht="155" height="150" alt/></a>
                                </div>

                            </div>
                        </article>
                    </section>
                </article>
                <article></article>
            </section>
<?php
require_once('Footer.html');