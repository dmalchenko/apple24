<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reviews */

$this->title = 'Create Reviews';
$this->params['breadcrumbs'][] = ['label' => 'Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\app\assets\BootstrapAsset::register($this);
?>
<section class="content_block pager">
    <div class="container">

        <div class="name reviews">
			<?= Html::encode($this->title) ?>
        </div>

		<?= $this->render('_form', [
			'model' => $model,
		]) ?>

    </div>
</section>