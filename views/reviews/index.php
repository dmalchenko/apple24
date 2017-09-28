<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Reviews';
$this->params['breadcrumbs'][] = $this->title;
\app\assets\BootstrapAsset::register($this);
?>
<section class="content_block pager">
    <div class="container">
        <div class="name reviews">
            <?= Html::encode($this->title) ?>
        </div>
        <p>
			<?= Html::a('Create Reviews', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
		<?= GridView::widget([
			'dataProvider' => $dataProvider,
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				'r_id',
				'name',
				'tel',
				'review',
				'created_at',
				// 'updated_at',

				['class' => 'yii\grid\ActionColumn'],
			],
		]); ?>

    </div>
</section>