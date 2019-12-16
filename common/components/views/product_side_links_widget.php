<?php

use yii\helpers\Html;

$model_brands = \common\models\Brands::find()->where(['status' => 1])->all();

if ($category != '') {
    $category_details = \common\models\ProductCategory::find()->where(['canonical_name' => $category])->one();
    $cat = $category_details->id;
    $brnd = '';
} elseif ($brand != '') {
    $brand_details = \common\models\Brands::find()->where(['canonical_name' => $brand])->one();
    $cat = '';
    $brnd = $brand_details->id;
} else {
    $cat = '';
    $brnd = '';
}
?>
<div class="sidebar">
    <div class="widget">
        <h3>Categories</h3>
        <ul>
            <?php
            if (!empty($model_categories)) {
                foreach ($model_categories as $model_category) {
                    ?>
                    <li>
                        <?= Html::a($model_category->category, ['/site/products', 'category' => $model_category->canonical_name]) ?>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
    <!-- widget -->
    <div class="widget">
        <h3>Brand</h3>
        <ul>
            <?php
            if (!empty($model_brands)) {
                foreach ($model_brands as $model_brand) {
                    ?>
                    <li>
                        <?= Html::a($model_brand->brand_name, ['/site/products', 'brand' => $model_brand->canonical_name]) ?>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>

    </div>
    <!-- widget -->
</div>