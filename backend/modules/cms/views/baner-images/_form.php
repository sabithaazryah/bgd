<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BanerImages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baner-images-form form-inline">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'about')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->about)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/about.<?= $model->about; ?>?<?= rand() ?>" width="100%" height="100"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'property')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->property)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/property.<?= $model->property; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'agents')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->agents)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/agents.<?= $model->agents; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'off_plan')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->off_plan)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/off_plan.<?= $model->off_plan; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'blog')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->blog)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/blog.<?= $model->blog; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'contact_us')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->contact_us)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/contact_us.<?= $model->contact_us; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'site_map')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->site_map)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/site_map.<?= $model->site_map; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'terms_and_conditions')->fileInput(['maxlength' => true]) ?>
            <?php
            if ($model->isNewRecord)
                echo "";
            else {
                if (!empty($model->terms_and_conditions)) {
                    ?>

                    <img src="<?= Yii::$app->homeUrl ?>../uploads/baner_images/terms_and_conditions.<?= $model->terms_and_conditions; ?>?<?= rand() ?>" width = "100%" height="100px"/>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <br/>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-block btn-success btn-sm', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
