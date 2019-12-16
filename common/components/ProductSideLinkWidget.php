<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AppointmentWidget
 *
 * @author
 * JIthin Wails
 */

namespace common\components;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\web\NotFoundHttpException;

class ProductSideLinkWidget extends Widget {

    public $category;
    public $brand;

    public function init() {
        parent::init();
        if (!isset(Yii::$app->user->identity->id)) {
            return '';
        }
    }

    public function run() {
        $model_categories = \common\models\ProductCategory::find()->all();
        return $this->render('product_side_links_widget', ['model_categories' => $model_categories, 'category' => $this->category, 'brand' => $this->brand]);
    }

}

?>
