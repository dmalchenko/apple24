<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Manager Panel';
$this->params['breadcrumbs'][] = $this->title;
\app\assets\BootstrapAsset::register($this);
?>
<section class="content_block pager">
    <div class="container">
        <div class="name reviews">
			<?= Html::encode($this->title) ?>
        </div>

		<?php
		echo Yii::$app->user->isGuest ? (
		Html::a('Login', \yii\helpers\Url::toRoute('site/login'), ['class' => 'btn btn-success'])
		) : (
			"<a href='" . \yii\helpers\Url::toRoute('reviews/index') . "' class=\"btn btn-info\">Отзывы и вопрсы</a><br><br>"
			. "<a href='" . \yii\helpers\Url::toRoute('purchase/index') . "' class=\"btn btn-info\">Заказы</a><br><br>"
			. '<li>'
			. Html::beginForm(['/site/logout'], 'post')
			. Html::submitButton(
				'Logout (' . Yii::$app->user->identity->username . ')',
				['class' => 'btn btn-link logout']
			)
			. Html::endForm()
			. '</li>'
		)
		?>
    </div>
</section>