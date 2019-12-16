<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Portfolio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="portfolio-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?php
            $cat
            ?>
            <?= $form->field($model, 'category')->dropDownList(\yii\helpers\ArrayHelper::map(\common\models\PortfolioCategory::find()->where(['status' => 1])->all(), 'id', 'category'), ['prompt' => '--Select--']) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-12 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?php
            echo $form->field($model, 'image')->widget(FileInput::classname(), [
                'options' => ['accept' => 'jpg', 'png', 'bmp', 'tiff',],
                'pluginOptions' => [
                    'uploadUrl' => '',
                    'rtl' => 'true',
                    'fileActionSettings' => ['showZoom' => false, 'showRemove' => true,
                        'showDrag' => true, 'showUpload' => false, 'showCancel' => false],
                    'previewFileType' => 'image',
                    'showUpload' => false,
                ]
            ])->hint('Dimensions : 610*445');
            ?>

            <?php
            if ($model->image != '' && $model->id != "") {
                $image = explode(',', $model->image);
                if (!empty($image)) {
                    echo '<img width="120" style="border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->request->baseUrl . '/../images/portfolio/portfolio' . $model->id . '.' . $model->image . '?' . rand() . '" />';
                }
                ?>
                <br>
                <br>
            <?php }
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>
        </div>

    </div>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-block btn-success btn-sm', 'style' => 'float:right;']) ?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
