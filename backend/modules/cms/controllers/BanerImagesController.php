<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\BanerImages;
use common\models\BanerImagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BanerImagesController implements the CRUD actions for BanerImages model.
 */
class BanerImagesController extends Controller {

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
     * Lists all BanerImages models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new BanerImagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BanerImages model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new BanerImages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new BanerImages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing BanerImages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate() {
        $id = 1;
        $model = $this->findModel($id);
        $model_ = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            $about = UploadedFile::getInstance($model, 'about');
            $property = UploadedFile::getInstance($model, 'property');
            $agents = UploadedFile::getInstance($model, 'agents');
            $blog = UploadedFile::getInstance($model, 'blog');
            $contact_us = UploadedFile::getInstance($model, 'contact_us');
            $off_plan = UploadedFile::getInstance($model, 'off_plan');
            $site_map = UploadedFile::getInstance($model, 'site_map');
            $terms_and_conditions = UploadedFile::getInstance($model, 'terms_and_conditions');
            $model->about = !empty($about) ? $about->extension : $model_->about;
            $model->property = !empty($property) ? $property->extension : $model_->property;
            $model->agents = !empty($agents) ? $agents->extension : $model_->agents;
            $model->blog = !empty($blog) ? $blog->extension : $model_->blog;
            $model->contact_us = !empty($contact_us) ? $contact_us->extension : $model_->contact_us;
            $model->off_plan = !empty($off_plan) ? $off_plan->extension : $model_->off_plan;
            $model->site_map = !empty($site_map) ? $site_map->extension : $model_->site_map;
            $model->terms_and_conditions = !empty($terms_and_conditions) ? $terms_and_conditions->extension : $model_->terms_and_conditions;
            if ($model->save()) {
                $this->Upload($about, $property, $agents, $blog, $contact_us, $off_plan, $site_map, $terms_and_conditions);
                Yii::$app->session->setFlash('success', "Baner images updated successfully");
            }
        } return $this->render('update', [
                    'model' => $model,
        ]);
    }

    public function Upload($about, $property, $agents, $blog, $contact_us, $off_plan, $site_map, $terms_and_conditions) {
        $paths = Yii::$app->basePath . '/../uploads/baner_images/';
        if (!empty($about)) {
            $name = 'about.' . $about->extension;
            $about->saveAs($paths . '/' . $name);
        }
        if (!empty($property)) {
            $name = 'property.' . $property->extension;
            $property->saveAs($paths . '/' . $name);
        }
        if (!empty($agents)) {
            $name = 'agents.' . $agents->extension;
            $agents->saveAs($paths . '/' . $name);
        }
        if (!empty($off_plan)) {
            $name = 'off_plan.' . $off_plan->extension;
            $off_plan->saveAs($paths . '/' . $name);
        }
        if (!empty($site_map)) {
            $name = 'site_map.' . $site_map->extension;
            $site_map->saveAs($paths . '/' . $name);
        }
        if (!empty($terms_and_conditions)) {
            $name = 'terms_and_conditions.' . $terms_and_conditions->extension;
            $terms_and_conditions->saveAs($paths . '/' . $name);
        }
        if (!empty($blog)) {
            $name = 'blog.' . $blog->extension;
            $blog->saveAs($paths . '/' . $name);
        }
        if (!empty($contact_us)) {
            $name = 'contact_us.' . $contact_us->extension;
            $contact_us->saveAs($paths . '/' . $name);
        }
        return true;
    }

    /**
     * Deletes an existing BanerImages model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BanerImages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BanerImages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = BanerImages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
