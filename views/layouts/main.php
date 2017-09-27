<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
    <link href="/apple/web/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="/apple/web/favicon.ico" type="image/x-icon" rel="icon">
    <script type="text/javascript" src="/apple/web/js/jquery.min.js"></script>
    <script type="text/javascript" src="/apple/web/js/jquery.formstyler.min.js"></script>
    <script type="text/javascript" src="/apple/web/js/jquery.actual.js"></script>
    <script type="text/javascript" src="/apple/web/js/slick.min.js"></script>
    <script type="text/javascript" src="/apple/web/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="/apple/web/js/mask.js"></script>
    <script type="text/javascript" src="/apple/web/js/script.js"></script>
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
            <a href="http://apple24.online" class="logo"></a>
            <ul class="burger-menu">
                <li>
                    <a class="scrollto cat" href="/#catalog">Каталог</a>
                    <ul class="mobile_category_opened">
                        <li><a href="#phone-3" class="active  scrollto">iPhone 5S</a></li>
                        <li><a href="#phone-5" class="active  scrollto">iPhone 6</a></li>
                        <li><a href="#phone-6" class="active  scrollto">iPhone 6 plus</a></li>
                        <li><a href="#phone-7" class="active  scrollto">iPhone 6S</a></li>
                        <li><a href="#phone-26" class="active  scrollto">iPhone 6S plus</a></li>
                        <li><a href="#phone-25" class="active  scrollto">iPhone 7</a></li>
                        <li><a href="#phone-27" class="active  scrollto">iPhone 7 plus</a></li>
                        <li><a href="#phone-28" class="active  scrollto">iPhone SE</a></li>
                        <li><a href="http://apple24.online/aksessuary/" class="active  scrollto">Аксессуары</a></li>
                    </ul>
                </li>
                <li><a class="scrollto" href="/#guaranty">Гарантия</a></li>
                <!--<li><a class="scrollto" href="/#press-block">О нас</a></li>-->
                <li><a class="scrollto" href="/#delivery">Доставка и оплата</a></li>
                <li><a href="http://apple24.online/news/">Новости</a></li>
                <!--<li><a href="http://apple24.online/list/">Стат</a></li>-->
                <li><a href="http://apple24.online/otzyvy-apple-24-online/">Отзывы</a></li>
                <li><a href="http://apple24.online/contacts/">Контакты</a></li>
            </ul>
            <div class="phone"><a href="tel: +7 (499) 705-03-88"><span class="lptracker_phone">+7 (499) 705-03-88</span></a>
            </div>

        </div>
    </header>

	<?= $content ?>


</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
