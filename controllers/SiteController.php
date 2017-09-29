<?php

namespace app\controllers;

use app\models\Reviews;
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
			'5s' => 'iPhone5s',
			'6' => 'iPhone6',
			'6-plus' => 'iPhone6plus',
			'6s' => 'iPhone6s',
			'6s-plus' => 'iPhone6sPlus',
			'7' => 'iPhone7',
			'7-plus' => 'iPhone7plus',
			'SE' => 'iPhoneSE',
		];

		$colors = [
			'Серебристый' => 'silver',
			'Золотистый' => 'gold',
			'Черный' => 'black',
			'Черный оникс' => 'jet-black',
			'Красный' => 'red',
			'Розовое золото' => 'rose-gold',
			'Серый космос' => 'space-gray',
		];

		$sizeId = $sizes[intval(Yii::$app->request->post('sizeId'))];
		$category = $categories[Yii::$app->request->post('category')];
		$color = $colors[Yii::$app->request->post('colorName')];
		$response = [
			'price1' => $prices[$category][$sizeId][$color]['price1'],
			'price2' => $prices[$category][$sizeId][$color]['price2'],
			'cat' => intval(Yii::$app->request->post('category')),
			'prodId' => $prices[$category][$sizeId][$color]['id'],
			'sef' => 'sef',
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
			return $this->redirect('admin');
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

	public function actionReviewRaw() {
		$review = new Reviews();
		$review->name = Yii::$app->request->get('name');
		$review->tel = Yii::$app->request->get('tel');
		$review->review = Yii::$app->request->get('text');
		$review->review_type = 1;
		$review->save();
		return $this->redirect('review');
	}

	public function actionReview() {
		return $this->render('review');
	}

	public function actionQuestionsRaw() {
		$review = new Reviews();
		$review->name = Yii::$app->request->get('name');
		$review->tel = Yii::$app->request->get('tel');
		$review->review = Yii::$app->request->get('text');
		$review->review_type = 2;
		$review->save();
		return $this->redirect('questions');
	}

	public function actionQuestions() {
		return $this->render('questions');
	}

	public function actionThanks() {
		return $this->render('thanks');
	}

	public function actionContact() {
		return $this->render('contact');
	}

	public function actionOfferta() {
		return $this->render('offerta');
	}

	public function actionAdmin() {
		return $this->render('admin');
	}

	public function actionViewer($id) {
		$data = require __DIR__ . '/../config/news.php';;

		return $this->render('viewer', [
			'title' => $data[$id]['title'],
			'date' => $data[$id]['date'],
			'text' => $data[$id]['text'],
		]);
	}

}
