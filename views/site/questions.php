<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Спасибо за вопрос';
?>

<section class="content_block pager">
    <div class="container">
        <div class="name thk">Cпасибо за вопрос</div>
        <div class="thk-img"><img alt="" src="<?= \yii\helpers\Url::to('@web'); ?>/images/thk-img.jpg"/></div>
        <a class="add-review" href="<?= \yii\helpers\Url::to('@web'); ?>">Вернуться на главную</a>
    </div>
</section>
