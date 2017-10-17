<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\Bootstrap;
$this->title = 'Купить iPhone в Москве со скидкой!';
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="0054f8ba1271156c" />
    <meta name="google-site-verification" content="2l7hHvHgV8IhU6PnsTCSV2QMWD6TFu3S7HAA8GKM4nM" />
    <meta name="description" content="Гарантия на всю продукцию 1 год. Бесплатная доставка по Москве! Гарантия качества. Скидки на этой неделе!">
    <meta name="keywords" content="купить айфон, айфоны +в москве, купить iphone, купить айфон +в москве, купить айфон 6, купить айфон 7, айфон 6 +в москве, айфон оригинал, iphone 7 купить, айфон 7 +в москве, купить айфон s, купить айфон 6s, iphone +в москве, купить айфон 6 +в москве, iphone 6 купить, купить айфон оригинал, iphone купить +в москве, купить айфон 5,">
	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
    <link href="/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="/favicon.ico" type="image/x-icon" rel="icon">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/jquery.formstyler.min.js"></script>
    <script type="text/javascript" src="/js/jquery.actual.js"></script>
    <script type="text/javascript" src="/js/slick.min.js"></script>
    <script type="text/javascript" src="/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/js/mask.js"></script>
    <script type="text/javascript" src="/js/script.js?v6"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<?php $this->beginBody() ?>
<div id="wrapper" class="wrapper">
    <header>
        <div class="container">
            <div class="burger-button">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <a href="/" class="logo"></a>
            <ul class="burger-menu">
                <li>
                    <a class="scrollto cat" href="/#catalog-id">Каталог</a>
                    <ul class="mobile_category_opened">
                        <li><a href="/#phone-7" class="active  scrollto">iPhone 7</a></li>
                        <li><a href="/#phone-7-plus" class="active  scrollto">iPhone 7 plus</a></li>
                        <li><a href="/#phone-SE" class="active  scrollto">iPhone SE</a></li>
                        <li><a href="/#phone-6s" class="active  scrollto">iPhone 6S</a></li>
                        <li><a href="/#phone-6s-plus" class="active  scrollto">iPhone 6S plus</a></li>
                        <li><a href="/#phone-6" class="active  scrollto">iPhone 6</a></li>
                        <li><a href="/#phone-6-plus" class="active  scrollto">iPhone 6 plus</a></li>
                        <li><a href="/#phone-5s" class="active  scrollto">iPhone 5S</a></li>
                    </ul>
                </li>
                <li><a class="scrollto" href="/#guaranty">Гарантия</a></li>
                <!--<li><a class="scrollto" href="/#press-block">О нас</a></li>-->
                <li><a class="scrollto" href="/#delivery">Доставка и оплата</a></li>
<!--                <li><a href="/news">Новости</a></li>-->
                <!--<li><a href="http://apple-com.pro/list/">Стат</a></li>-->
                <li><a href="/otzyvy">Отзывы</a></li>
                <li><a href="/contact">Контакты</a></li>
            </ul>
            <div class="phone"><a href="tel:<?= Yii::$app->params['tel']; ?>"><span class="lptracker_phone"><?= Yii::$app->params['tel']; ?><span></a>
            </div>

        </div>
    </header>
	<?= $content ?>


</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
