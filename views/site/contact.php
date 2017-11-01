<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
?>
<section class="content_block bcontact">
    <div class="container">
        <br><br><br><br><br>
        <div class="name">Контакты</div>
        <br><br><br><br><br>
        <div class="contact-block">
            <div class="left">
                <div class="block">
                    <div class="icon ico_1"></div>
                    <?= Yii::$app->params['address']; ?>
                </div>
                <div class="block">
                    <div class="icon ico_2"></div>
                    Режим работы: 09:00 - 21:00
                </div>
                <div class="block">
                    <div class="icon ico_3"></div>
                    <span class="lptracker_phone"><?= Yii::$app->params['tel']; ?></span>
                </div>
            </div>
            <div class="right">
                <div id="map"></div>
            </div>
        </div>
    </div>

    <script>
        function initMap() {
            var customMapType = new google.maps.StyledMapType([], {
                name: 'map'
            });
            var customMapTypeId = 'custom_style';
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                zoomControl: false,
//55.774289, 37.676803
                center: new google.maps.LatLng(55.774289, 37.676803),
                mapTypeControlOptions: {
                    mapTypeIds: []
                }
            });
            var marker = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng(55.774289, 37.676803),
                icon: '/images/map-icon.png',
            });

            map.mapTypes.set(customMapTypeId, customMapType);
            map.setMapTypeId(customMapTypeId);

        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0b3I2YrKGz0t60VRkeMBRcY0xFqf99EE&signed_in=true&callback=initMap"
            async defer></script>
</section>

<footer class="container-fluid hidden-opacity visible animated fadeInDown full-visible">
    <div class="row">
        <div class="col-md-12 col-lg-3 copyright"><?= Yii::$app->params['shopName']; ?></div>
        <div class="col-md-12 col-lg-8 footer-menu">
            <ul class="bottom-menu">
                <li><a href="/#catalog">Каталог</a></li>
                <li><a href="/#guaranty">Гарантия и поддержка</a></li>
                <li><a href="/#delivery">Доставка</a></li>
                <li><a href="/otzyvy">Отзывы</a></li>
                <li><a href="/contact">Контакты</a></li>
            </ul>
        </div>
        <div class="col-md-12 col-lg-1 flag"><img src="/images/icons/rus.png"/> <span>Россия</span></div>
</footer>