<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller {

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
     * {@inheritdoc}
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
     * @return mixed
     */
    public function actionIndex() {
        $portfolio = \common\models\Portfolio::find()->where(['status' => 1])->limit(10)->all();
        return $this->render('index', [
                    'portfolio' => $portfolio,
        ]);
    }

    /**
     * Displays about.
     *
     * @return mixed
     */
    public function actionAbout() {

        return $this->render('about', [
        ]);
    }

    public function actionTeam() {

        return $this->render('our_team', [
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $contact_info = \common\models\ContactsInfo::findOne(1);
        $meta_tags = \common\models\MetaTags::find()->where(['id' => 5])->one();
        \Yii::$app->view->registerMetaTag(['name' => 'keywords', 'content' => $meta_tags->meta_keyword]);
        \Yii::$app->view->registerMetaTag(['name' => 'description', 'content' => $meta_tags->meta_description]);
        return $this->render('contact', [
                    'contact_info' => $contact_info,
                    'meta_tags' => $meta_tags,
        ]);
    }

    public function actionVisualization() {
        $visualisation = \common\models\PanoramaVisualization::find()->where(['status' => 1])->all();
        return $this->render('visualization', [
                    'visualisation' => $visualisation,
        ]);
    }

    public function actionVisualizationDetail($data) {
        $visualisation_Detail = \common\models\PanoramaVisualization::find()->where(['canonical_name' => $data])->one();
        return $this->render('visualization-detail', [
                    'visualisation_Detail' => $visualisation_Detail,
        ]);
    }

    public function actionPortfolio() {
        $category = \common\models\PortfolioCategory::find()->where(['status' => 1])->all();
        $portfolio = \common\models\Portfolio::find()->where(['status' => 1])->all();
        return $this->render('portfolio', [
                    'category' => $category,
                    'portfolio' => $portfolio,
        ]);
    }

    public function actionResidential() {
        return $this->render('residential_service', [
        ]);
    }

    public function actionInterior() {
        return $this->render('interior', [
        ]);
    }

    /*
     * Contact Enquiry submission through jquery
     */

    public function actionContactEnquiry() {
        if (Yii::$app->request->isAjax) {
            $model = new \common\models\ContactEnquiry();
            $model->name = $_POST['name'];
            $model->email = $_POST['email'];
            $model->phone = $_POST['phone'];
            if (isset($_POST['company']) && $_POST['company'] != '')
                $model->company = $_POST['company'];
            $model->message = $_POST['message'];
            $model->date = date('Y-m-d');
            if ($model->save()) {
//                $this->sendContactMail($model);
                echo 1;
                exit;
            } else {
                echo 0;
                exit;
            }
        }
    }

    /*
     * Contact Enguery mail function
     */

    public function sendContactMail($model) {
        $message = Yii::$app->mailer->compose('enquiry-mail', ['model' => $model]) // a view rendering result becomes the message body here
                ->setFrom('info@binaca.com')
                ->setTo([
                    'manu@intersmart.in',
                ])
                ->setSubject('Enquiry From Binaca');
        $message->send();
        return TRUE;
    }

}
