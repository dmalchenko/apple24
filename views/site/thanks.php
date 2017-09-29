<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Спасибо за заказ';
?>

<section class="content_block pager">
	<div class="container">
		<div class="name thk">Спасибо за заказ!</div>
		<div class="name">Ожидайте звонка менеджера</div>
		<div class="thk-img"><img alt="" src="<?= \yii\helpers\Url::to('@web'); ?>/images/thk-img.jpg"/></div>
		<a class="add-review" href="<?= \yii\helpers\Url::to('@web'); ?>">Вернуться на главную</a>
	</div>
</section>
