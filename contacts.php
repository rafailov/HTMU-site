<?php
require_once('header.html');
?>
                <li ><a href="index.php" id="newsbutton" class="unActive help">Новини</a></li>
                <li ><a href="For-us.php" id="forus" class="unActive help">За Нас</a></li>
                <li ><a href="students.php" id="forStudents" class="unActive help">За Студентите</a></li>
                <li><a href="contacts.php" id="contacts" class="active help">Контакти</a></li>
                <li><a href="#" id="faq" class="unActive help">FAQ</a></li>
            </ul>
        </nav>
    </header>
    <section>
        <article></article>
        <article>
            <section id="contactSection">
                <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
                <script>
                   function initialize() {
                       var coords = new google.maps.LatLng(42.655394, 23.358625);
                       var center = new google.maps.LatLng(42.654083, 23.350469);

                       var stylesArray =
                           [{ "featureType": "road.local","elementType": "labels.text.fill", "stylers": [ { "visibility": "on" }, { "color": "#244464" }] },
                           {"featureType": "poi.business","elementType": "labels.text.fill", "stylers": [ { "color": "#224566" }]},
                           {"featureType": "poi.government","elementType": "labels.text","stylers": [{ "color": "#244566" }]},
                           { "featureType": "road.local", "elementType": "labels.text.fill", "stylers": [ { "color": "#224564" } ]},
                           { "featureType": "road.arterial", "elementType": "labels.text.fill", "stylers": [ { "color": "#224464" }]},
                           {"featureType": "landscape.man_made", "elementType": "geometry.fill", "stylers": [{ "color": "#FFE5D6" } ]},
                           { "featureType": "poi.park","elementType": "geometry.fill", "stylers": [ { "color": "#28b05f" } ]},
                           {"featureType": "poi.sports_complex", "elementType": "geometry.fill", "stylers": [ { "color": "#2c3d51" }]},
                           { "featureType": "poi.business", "elementType": "geometry.fill",  "stylers": [ { "color": "#28ae60" } ] },
                           { "featureType": "water", "elementType": "geometry.fill","stylers": [ { "color": "#1982da" }]},
                           { } ];

                       var mapOptions = {
                           zoom: 16,
                           center: center,
                           panControl: true,
                           zoomControl: true,
                           mapTypeControl: true,
                           styles: stylesArray,
                           scaleControl: true,
                           streetViewControl: true,
                           overviewMapControl: true
                       };
                       var map = new google.maps.Map(document.getElementById("map-canvas"),
                           mapOptions);

                       var marker = new google.maps.Marker({
                           position: coords,
                           map: map,
                           icon: 'img/markerIcon.png'
                       });

                       map = new google.maps.Map(document.getElementById('map-canvas'), myOptions);


                   }

                   google.maps.event.addDomListener(window, 'load', initialize);
                </script>

                <div class="contactInfo">

                    <h2>Приемно време:</h2>
                    <p><span>Николай Яворов</span> / Председател на Студентски съвет при ХТМУ/</p>
                    Вторник: 13:00 - 14:00 ч.<br/>
                    Четвъртък: 13:00 - 14:00 ч.

                    <p><span>Полина Петрова</span> / Секретар на Студентски съвет при ХТМУ/</p>
                    Понеделник: 14:00 - 15:00 ч.<br/>
                    Сряда: 13:00 - 14:00 ч.<br/><br/>
                     <h1>Контакти</h1>
                    <address>1756 София, България</address>
                    <address>Бул. Св. Климент Охридски 8</address>
                    <p>Химикотехнологичен и металургичен университет, сграда А, каб. 427</p>


                    <address>тел: (+359 2) 8163 146</address>
                    <span>e-mail:</span> <a href="mailto:student_council@my.uctm.edu">student_council@my.uctm.edu</a>,  <a href="mailto:ssuctm@gmail.com">ssuctm@gmail.com</a>

                </div>
            </section>
        </article>
        <article></article>
        <div id="map-canvas">

        </div>
    </section>
<?php
require_once('Footer.html');