<?php
require_once('header.html');
?>
                        <li ><a href="index.php" id="newsbutton" class="active">Новини</a></li>
                        <li ><a href="For-us.php" id="forus" class="unActive">За Нас</a></li>
                        <li ><a href="#" id="forStudents" class="unActive">За Студентите</a></li>
                        <li><a href="#" id="contacts" class="unActive">Контакти</a></li>
                        <li><a href="#" id="faq" class="unActive">FAQ</a></li>
                    </ul>
                </nav>
            </header>
            <section>
                <article></article>
                <article>
                    <section>
                        <article>
                            <div id="image">
                                <img id="bigImage" src="img/DSC09158.JPG"/>
                            </div>
                            <aside>
                                <div class="miniImage">
                                    <a href="javascript:setImage('img/DSC09158.JPG', 'first')" ><img id="first" class="visual" src="img/DSC09158.JPG"/></a>
                                    <a href="javascript:setImage('img/DSC091582.JPG', 'second')" ><img id="second" src="img/DSC091582.JPG"/></a>
                                    <a href="javascript:setImage('img/DSC091583.JPG', 'third')" ><img id="third" src="img/DSC091583.JPG"/></a>
                                </div>
                            </aside>
                        </article>
                        <article id="news">
                            <nav>
                                <ul>
                                    <li>НАЙ-НОВИ</li>
                                    <li>НАЙ-ЧЕТЕНИ</li>
                                </ul>
                            </nav>
                            <div id="newsImages">
                                <div class="theNews"><a href="news.php?id=1"><div class="title">Lorem ipsum dolor sit amet elit, sed diam nonummy nibh  tincidunt</div><span>22.08.2014</span><img  src="img/DSC09158.JPG"/></a></div>
                                <div class="theNews"><a href="news.php?id=12"><div class="title">Lorem ipsum dolor sit amet, sed diam nonummy nibh euismod tincidunt</div><span>22.08.2014</span><img  src="img/DSC091582.JPG"/></a></div>
                                <div class="theNews"><a href="news.php?id=13"><div class="title">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed  nibh euismod tincidunt</div><span>22.08.2014</span><img  src="img/DSC091583.JPG"/></a></div>
                                <div class="theNews"><a href="news.php?id=14"><div class="title">Lorem  adipiscing elit, sed diam nonummy nibh euismod tincidunt</div><span>22.08.2014</span><img  src="img/DSC091583.JPG"/></a></div>
                                <div class="theNews"><a href="news.php?id=15"><div class="title">Lorem ipsum dolor sit amet, , sed diam nonummy nibh euismod tincidunt</div><span>22.08.2014</span><img  src="img/DSC091582.JPG"/></a></div>
                                <div class="theNews"><a href="news.php?id=16"><div class="title">Lorem ipsum sed diam nonummy nibh euismod tincidunt</div><span>22.08.2014</span><img  src="img/DSC09158.JPG"/></a></div>

                            </div>
                            <aside>
                                <ul>
                                    <li><a href="#">Lorem ipsum dolor sit amet,</a></li>
                                    <li><a href="#">Lorem dolor  in sit amet,</a></li>
                                    <li><a href="#">Lorem ipsum sit amet,</a></li>
                                    <li><a href="#">Lorem ipsum dolor amet,</a></li>
                                </ul>
                            </aside>
                        </article>
                    </section>
                </article>
                <article></article>
            </section>
<?php
require_once('Footer.html');