<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */
/* @var $title string */
/* @var $date string */
/* @var $text string */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content_block pager">
    <div class="container">
        <div class="name"><?= $title ?></div>
        <div class="news-full">
            <div class="date"><?= $date ?></div>
			<?= $text?>
        </div>
</section>
<footer>
    <div class="container">
        <p class="pull-center"><?= Yii::$app->params['shopName']; ?></p>
        <br>
    </div>
</footer>
