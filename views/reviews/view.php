<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Reviews */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\app\assets\BootstrapAsset::register($this);
?>
<section class="content_block pager">
    <div class="container">
        <div class="name reviews">
			<?= Html::encode($this->title) ?>
        </div>

        <p>
			<?= Html::a('Update', ['update', 'id' => $model->r_id], ['class' => 'btn btn-primary']) ?>
			<?= Html::a('Delete', ['delete', 'id' => $model->r_id], [
				'class' => 'btn btn-danger',
				'data' => [
					'confirm' => 'Are you sure you want to delete this item?',
					'method' => 'post',
				],
			]) ?>
        </p>

		<?= DetailView::widget([
			'model' => $model,
			'attributes' => [
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
					'attribute' => 'updated_at',
					'value' => function ($model, $index, $widget) {
						$date = date('Y-m-d H:i:s', ($model->updated_at));
						return $date;
					}
				],
			],
		]) ?>

    </div>
</section>