<?php

namespace app\controllers;

use Yii;
use app\models\Purchase;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PurchaseController implements the CRUD actions for Purchase model.
 */
class PurchaseController extends Controller {
	public function actionAccept() {

		$data = explode('&', \Yii::$app->request->post('data'));
		$prod = \Yii::$app->request->post('prod');
		$arr = [];
		$arr['prodName'] = $prod;
		foreach ($data as $row) {
			list($k, $v) = explode('=', $row);
			$arr[$k] = $v;
		}
		$purchase = new Purchase();
		$purchase->tel = urldecode($arr['phone']);
		$purchase->name = $arr['name'];
		$purchase->prod = $arr['prodName'];
		$purchase->save();
		echo json_encode($purchase->save());
		exit;
	}

	public function actionGetInfo() {
		$prices = require __DIR__ . '/../config/prices.php';

		$id = intval(\Yii::$app->request->post('id'));
		$result = [];
		foreach ($prices as $modelId => $model) {
			foreach ($model as $capacityId => $capacity) {
				foreach ($capacity as $colorId => $color) {
					if ($color['id'] == $id) {
						$result = [
							'id' => $id,
							'price1' => sprintf('%s руб.', $color['price1']),
							'price2' => sprintf('%s руб.', $color['price2']),
							'name' => "$modelId $capacityId $colorId"
						];
					}
				}
			}
		}

		echo json_encode($result);
		exit;
	}

	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['index', 'view', 'create', 'update', 'delete'],
				'rules' => [
					[
						'actions' => ['index', 'view', 'create', 'update', 'delete'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['POST'],
				],
			],
		];
	}

	/**
	 * Lists all Purchase models.
	 * @return mixed
	 */
	public function actionIndex() {
		$dataProvider = new ActiveDataProvider([
			'query' => Purchase::find(),
		]);

		return $this->render('index', [
			'dataProvider' => $dataProvider,
		]);
	}

	/**
	 * Displays a single Purchase model.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionView($id) {
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}

	/**
	 * Creates a new Purchase model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new Purchase();

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->p_id]);
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Updates an existing Purchase model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->p_id]);
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Deletes an existing Purchase model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param integer $id
	 * @return mixed
	 */
	public function actionDelete($id) {
		$this->findModel($id)->delete();

		return $this->redirect(['index']);
	}

	/**
	 * Finds the Purchase model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param integer $id
	 * @return Purchase the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = Purchase::findOne($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
