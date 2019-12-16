<?php

namespace backend\modules\cms\controllers;

use Yii;
use common\models\Products;
use common\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller {

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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Products();
        $model->setScenario('create');
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            if (isset($model->related_products) && $model->related_products != '') {
                $model->related_products = implode(',', $model->related_products);
            }
            $image = UploadedFile::getInstance($model, 'image');
            $files = UploadedFile::getInstances($model, 'gallery_images');
            $model->image = $image->extension;
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $files, $image);
                Yii::$app->session->setFlash('success', "New product added successfully");
                return $this->redirect(['index']);
            }
        }return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /*
     * Uploade about page images
     */

    public function Upload($model, $files, $image) {
        if (!empty($image)) {
            $path = Yii::$app->basePath . '/../images/products';
            $name = 'product' . $model->id;
            $image->saveAs($path . '/' . $name . '.' . $image->extension);
        }
        if (!empty($files)) {
            $paths = Yii::$app->basePath . '/../images/products/gallery/' . $model->id . '/';
            $path = $this->CheckPath($paths);
            foreach ($files as $file) {
                $name = $this->fileExists($path, $file->baseName . '.' . $file->extension, $file, 1);
                $file->saveAs($path . '/' . $name);
            }
        }
        return TRUE;
    }

    public function CheckPath($paths) {
        if (!is_dir($paths)) {
            mkdir($paths);
        }
        return $paths;
    }

    public function fileExists($path, $name, $file, $sufix) {
        if (file_exists($path . '/' . $name)) {

            $name = basename($path . '/' . $file->baseName, '.' . $file->extension) . '_' . $sufix . '.' . $file->extension;
            return $this->fileExists($path, $name, $file, $sufix + 1);
        } else {
            return $name;
        }
    }

    public function actionRemoveGallery() {
        if (yii::$app->request->isAjax) {
            $id = $_POST['id'];
            $file = $_POST['file'];
            $path = Yii::$app->basePath . '/../images/products/gallery/' . $id . '/' . $file;
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);
        $image_ = $model->image;
        if ($model->load(Yii::$app->request->post()) && Yii::$app->SetValues->Attributes($model)) {
            if (isset($model->related_products) && $model->related_products != '') {
                $model->related_products = implode(',', $model->related_products);
            }
            $image = UploadedFile::getInstance($model, 'image');
            $files = UploadedFile::getInstances($model, 'gallery_images');
            $model->image = !empty($image) ? $image->extension : $image_;
            if ($model->validate() && $model->save()) {
                $this->Upload($model, $files, $image);
            }
            Yii::$app->session->setFlash('success', "Product details updated successfully");
            return $this->redirect(['update', 'id' => $model->id]);
        }
        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $model = $this->findModel($id);
        $path = Yii::$app->basePath . '/../images/products/product.' . $id . '.' . $model->image;
        if ($this->findModel($id)->delete()) {
            if (file_exists($path)) {
                unlink($path);
                $dir = Yii::$app->basePath . '/../images/products/gallery' . $id;
                if (is_dir($dir)) {
                    $this->deleteDir($path);
                }
            }
            Yii::$app->session->setFlash('success', "Product removed successfully");
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
