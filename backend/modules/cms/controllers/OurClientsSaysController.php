<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\OurClientsSays;
use common\models\OurClientsSaysSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * OurClientsSaysController implements the CRUD actions for OurClientsSays model.
 */
class OurClientsSaysController extends Controller {

    public function beforeAction($action) {
        if (!parent::beforeAction($action)) {
            return false;
        }
        if (Yii::$app->user->isGuest) {
            $this->redirect(['/site/index']);
            return false;
        }
        return true;
    }

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all OurClientsSays models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new OurClientsSaysSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OurClientsSays model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new OurClientsSays model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new OurClientsSays();
        $model->setScenario('create');
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $model->image = $image->extension;
            if ($model->validate() && $model->save()) {
                $this->Upload($image, $model);
                Yii::$app->session->setFlash('success', "New testimonial added successfully");
                return $this->redirect(['index']);
            }
        }return $this->render('create', [
                    'model' => $model,
        ]);
    }

    public function Upload($image, $model) {
        if (!empty($image)) {
            $path = Yii::$app->basePath . '/../images/testimonials';
            $name = 'testimonial' . $model->id;
            $image->saveAs($path . '/' . $name . '.' . $image->extension);
        }
    }

    /**
     * Updates an existing OurClientsSays model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $image_ = $model->image;
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $image = UploadedFile::getInstance($model, 'image');
            $model->image = !empty($image) ? $image->extension : $image_;
            if ($model->validate() && $model->save()) {
                $this->Upload($image, $model);
            }
            Yii::$app->session->setFlash('success', "Testimonial updated successfully");
            return $this->redirect(['update', 'id' => $model->id]);
        }
        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing OurClientsSays model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $model = $this->findModel($id);
        $path = Yii::$app->basePath . '/../images/testimonials/testimonial.' . $id . '.' . $model->image;
        if ($this->findModel($id)->delete()) {
            if (file_exists($path)) {
                unlink($path);
            }
            Yii::$app->session->setFlash('success', "Testimonials removed successfully");
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the OurClientsSays model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return OurClientsSays the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = OurClientsSays::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
