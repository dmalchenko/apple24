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
		<?= GridView::widget([
			'dataProvider' => $dataProvider,
			'columns' => [
				['class' => 'yii\grid\SerialColumn'],

				'r_id',
				'name',
				'tel',
				'review',
				[
					'attribute' => 'created_at',
					'value' => function ($model, $index, $widget) {
						$date = date('Y-m-d H:i:s', ($model->created_at));
						return $date;
					}

				],
				[
					'attribute' => 'review_type',
					'value' => function ($model, $index, $widget) {
						switch ($model->review_type) {
							case 1:
								$txt = 'отзыв';
								break;
							case 2:
								$txt = 'вопрос';
								break;
							default:
								$txt = '***';
								break;
						}
						return $txt;
					}
				],
				// 'updated_at',

				['class' => 'yii\grid\ActionColumn'],
			],
		]); ?>

    </div>
</section>