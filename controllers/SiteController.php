<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller {
	/**
	 * @inheritdoc
	 */
	public function behaviors() {
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['logout'],
				'rules' => [
					[
						'actions' => ['logout'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'logout' => ['post'],
				],
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function actions() {
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class' => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}

	/**
	 * Displays homepage.
	 *
	 * @return string
	 */
	public function actionIndex() {
		$prices = require __DIR__ . '/../config/prices.php';
		return $this->render('index', [
			'prices' => $prices,
		]);
	}

	public function actionChange() {
		$prices = require __DIR__ . '/../config/prices.php';

		$sizes = [
			2 => '16Gb',
			3 => '32Gb',
			4 => '64Gb',
			5 => '128Gb',
			6 => '256Gb',
		];

		$categories = [
			3 => 'iPhone5s',
			5 => 'iPhone6',
			6 => 'iPhone6plus',
			7 => 'iPhone6s',
			26 => 'iPhone6sPlus',
			25 => 'iPhone7',
			27 => 'iPhone7plus',
			28 => 'iPhoneSE',
		];

		$sizeId = $sizes[intval(Yii::$app->request->post('sizeId'))];
		$category = $categories[intval(Yii::$app->request->post('category'))];
		$response = [
			'price1' => $prices[$category][$sizeId]['price1'],
			'price2' => $prices[$category][$sizeId]['price2'],
			'cat' => intval(Yii::$app->request->post('category')),
			'prodId' => 123,
			'sef' => 'sdasdad',
		];
		echo json_encode($response);
		exit;
	}

	/**
	 * Login action.
	 *
	 * @return Response|string
	 */
	public function actionLogin() {
		if (!Yii::$app->user->isGuest) {
			return $this->goHome();
		}

		$model = new LoginForm();
		if ($model->load(Yii::$app->request->post()) && $model->login()) {
			return $this->goBack();
		}
		return $this->render('login', [
			'model' => $model,
		]);
	}

	/**
	 * Logout action.
	 *
	 * @return Response
	 */
	public function actionLogout() {
		Yii::$app->user->logout();

		return $this->goHome();
	}

	/**
	 * Displays contact page.
	 *
	 * @return Response|string
	 */
//	public function actionContact() {
//		$model = new ContactForm();
//		if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//			Yii::$app->session->setFlash('contactFormSubmitted');
//
//			return $this->refresh();
//		}
//		return $this->render('contact', [
//			'model' => $model,
//		]);
//	}

	/**
	 * Displays about page.
	 *
	 * @return string
	 */
	public function actionAbout() {
		return $this->render('about');
	}

	public function actionNews() {
		return $this->render('news');
	}

	public function actionOtzyvy() {
		return $this->render('otzyvy');
	}

	public function actionReview() {
		return $this->render('review');
	}

	public function actionContact() {
		return $this->render('contact');
	}

	public function actionOfferta() {
		return $this->render('offerta');
	}

}
