<!-- FOOTER -->

<footer id="footer">

    <div class="container" style="margin-bottom: 0px">



        <div class="row">


            <div class="col-md-2">



                <!-- Links -->

                <h4 class="letter-spacing-1">Наші сторінки</h4>

                <ul class="footer-links list-unstyled">

                    <li><a href="#">Головна</a></li>

                    <li><a href="#">Дозвілля</a></li>

                    <li><a href="#">Інфраструктура</a></li>

                    <li><a href="#">Оздоровлення</a></li>

                    <li><a href="#">Галерея</a></li>

                    <li><a href="#">Новини</a></li>

                    <li><a href="#">Правила та умови</a></li>

                    <li><a href="#">Пропозиції</a></li>

                    <li><a href="#">Про нас</a></li>


                </ul>

                <!-- /Links -->



            </div>

            <div class="col-md-7">
                <div id="map" style="width: 650px; height: 300px;"></div>
            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7HJKJAUVeyz7JcHHqR3Vy9IIg_iXlhNw&callback=initMap" async defer></script>
            <script>
                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {lat: 48.51934339381239, lng: 22.83182777843344},
                        zoom: 8
                    });

                    var marker = new google.maps.Marker({
                        position: {lat: 48.51934339381239, lng: 22.83182777843344},
                        map: map,
                        title: 'Initial Location'
                    });

                    var directionsService = new google.maps.DirectionsService;
                    var directionsDisplay = new google.maps.DirectionsRenderer;
                    directionsDisplay.setMap(map);

                    // jQuery click event handler for generating route
                    $('#generateRoute').click(function() {
                        var origin = $('#origin').val();
                        var destination = $('#destination').val();

                        var request = {
                            origin: origin,
                            destination: destination,
                            travelMode: 'DRIVING'
                        };

                        directionsService.route(request, function(response, status) {
                            if (status == 'OK') {
                                directionsDisplay.setDirections(response);
                            } else {
                                alert('Error: ' + status);
                            }
                        });
                    });
                }
            </script>
            <!-- Input fields for origin and destination -->

            <div class="col-md-3">
                <h2>Прокласти маршрут</h2>
                <label for="origin">Звідки:</label>
                <input type="text" id="origin" value="Sydney, Australia"><br>

                <!-- Button to trigger route generation -->
                <button id="generateRoute">Побудувати маршрут</button>
                <address>
                    <ul class="list-unstyled">

                        <li class="footer-sprite address">

                            PO Box 21132<br>

                            Here Weare St, Melbourne<br>

                            Vivas 2355 Australia<br>

                        </li>

                        <li class="footer-sprite phone">

                            Phone: 1-800-565-2390

                        </li>

                        <li class="footer-sprite email">

                            <a href="mailto:support@yourname.com">support@yourname.com</a>

                        </li>

                    </ul>

                </address>


            </div>



        </div>



    </div>



<!--    <div class="copyright">-->
<!---->
<!--        <div class="container">-->
<!---->
<!--            <ul class="pull-right nomargin list-inline mobile-block">-->
<!---->
<!--                <li><a href="#">Terms &amp; Conditions</a></li>-->
<!---->
<!--                <li>&bull;</li>-->
<!---->
<!--                <li><a href="#">Privacy</a></li>-->
<!---->
<!--            </ul>-->
<!---->
<!--            &copy; All Rights Reserved, Company LTD-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->

</footer>
<!-- /FOOTER -->