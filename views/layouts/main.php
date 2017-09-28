<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\Bootstrap;

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
	<?php $path = \yii\helpers\Url::to('@web'); ?>
    <link href="<?= $path?>/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="<?= $path?>/favicon.ico" type="image/x-icon" rel="icon">
    <script type="text/javascript" src="<?= $path?>/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= $path?>/js/jquery.formstyler.min.js"></script>
    <script type="text/javascript" src="<?= $path?>/js/jquery.actual.js"></script>
    <script type="text/javascript" src="<?= $path?>/js/slick.min.js"></script>
    <script type="text/javascript" src="<?= $path?>/js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="<?= $path?>/js/mask.js"></script>
    <script type="text/javascript" src="<?= $path?>/js/script.js"></script>
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
            <a href="/apple/web/" class="logo"></a>
            <ul class="burger-menu">
                <li>
                    <a class="scrollto cat" href="<?= $path?>/#catalog">Каталог</a>
                    <ul class="mobile_category_opened">
                        <li><a href="#phone-3" class="active  scrollto">iPhone 5S</a></li>
                        <li><a href="#phone-5" class="active  scrollto">iPhone 6</a></li>
                        <li><a href="#phone-6" class="active  scrollto">iPhone 6 plus</a></li>
                        <li><a href="#phone-7" class="active  scrollto">iPhone 6S</a></li>
                        <li><a href="#phone-26" class="active  scrollto">iPhone 6S plus</a></li>
                        <li><a href="#phone-25" class="active  scrollto">iPhone 7</a></li>
                        <li><a href="#phone-27" class="active  scrollto">iPhone 7 plus</a></li>
                        <li><a href="#phone-28" class="active  scrollto">iPhone SE</a></li>
                    </ul>
                </li>
                <li><a class="scrollto" href="<?= $path?>/#guaranty">Гарантия</a></li>
                <!--<li><a class="scrollto" href="/#press-block">О нас</a></li>-->
                <li><a class="scrollto" href="<?= $path?>/#delivery">Доставка и оплата</a></li>
                <li><a href="<?= $path?>/news">Новости</a></li>
                <!--<li><a href="http://apple24.online/list/">Стат</a></li>-->
                <li><a href="<?= $path?>/otzyvy">Отзывы</a></li>
                <li><a href="<?= $path?>/contact">Контакты</a></li>
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
