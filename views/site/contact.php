<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */


use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
?>
<section class="content_block pager">
    <div class="container">
        <div class="speedbar">
            <a href="<?= \yii\helpers\Url::to('@web'); ?>/">Главная</a><i></i> <span>Контакты</span>
        </div>
        <div class="name">Контакты</div>
        <div class="contact-block">
            <div class="left">
                <div class="block">
                    <div class="icon ico_1"></div>
                    <?= Yii::$app->params['address']; ?>
                </div>
                <div class="block">
                    <div class="icon ico_2"></div>
                    Режим работы: 10:00 - 20:00
                </div>
                <div class="block">
                    <div class="icon ico_3"></div>
                    <span class="lptracker_phone">+7 (499) 705-03-88</span>
                </div>
                <div class="block">
                    <div class="icon ico_4"></div>
                    <a href="<?= \yii\helpers\Url::to('@web'); ?>/offerta" target="_blank">Публичная оферта</a>
                </div>
            </div>
            <div class="right">
                <form action="" id="contact_form">
                    <div class="form-block">
                        <div class="block">
                            <input class="input-name" name="input-name" type="text" placeholder="Ваше имя:"/>
                        </div>
                        <div class="block">
                            <input class="input-phone" name="input-phone" type="text" placeholder="Ваш телефон:"/>
                        </div>
                        <textarea name="rev_text" placeholder="Текст вашего вопроса:"></textarea>
                        <div class="center">
                            <!--                            <a href="" class="order-button">Отправить заявку</a>-->
                            <button class="order-button"> Отправить заявку</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="map"></div>
    <script>
        function initMap() {
            var customMapType = new google.maps.StyledMapType([], {
                name: 'map'
            });
            var customMapTypeId = 'custom_style';
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                zoomControl: false,

                center: new google.maps.LatLng(55.838967, 37.653970),
                mapTypeControlOptions: {
                    mapTypeIds: []
                }
            });
            var marker = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng(55.838967, 37.653970),
                icon: '<?= \yii\helpers\Url::to('@web'); ?>/images/map-icon.png',
            });

            map.mapTypes.set(customMapTypeId, customMapType);
            map.setMapTypeId(customMapTypeId);

        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0b3I2YrKGz0t60VRkeMBRcY0xFqf99EE&signed_in=true&callback=initMap"
            async defer></script>
</section>
<footer>
    <div class="container">
        <p class="pull-left"><?= Yii::$app->params['shopName']; ?></p>
        <p class="pull-center"><?= date('Y'); ?> г.</p>
        <p class="pull-right"><?= Yii::$app->params['address']; ?></p>
        <br>
    </div>
</footer>
