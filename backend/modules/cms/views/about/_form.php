<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\About */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'section1_description2')->textarea(['rows' => 2]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?php
            echo $form->field($model, 'section1_image')->widget(FileInput::classname(), [
                'options' => ['accept' => 'jpg', 'png', 'bmp', 'tiff',],
                'pluginOptions' => [
                    'uploadUrl' => '',
                    'rtl' => 'true',
                    'fileActionSettings' => ['showZoom' => false, 'showRemove' => true,
                        'showDrag' => true, 'showUpload' => false, 'showCancel' => false],
                    'previewFileType' => 'image',
                    'showUpload' => false,
                ]
            ])->hint('Dimensions : 450*600');
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?php
            if ($model->section1_image != '' && $model->id != "") {
                $image = explode(',', $model->section1_image);
                if (!empty($image)) {
                    echo '<img width="75" style="border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->request->baseUrl . '/../images/about/section1_image' . '.' . $model->section1_image . '?' . rand() . '" />';
                }
                ?>
                <br>
                <br>
            <?php }
            ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'section2_description')->textarea(['rows' => 1]) ?>
        </div>
        <div class='col-md-3 col-sm-3 col-xs-12 left_padd'>
            <?= $form->field($model, 'section3_label1')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-3 col-sm-3 col-xs-12 left_padd'>
            <?= $form->field($model, 'section3_value1')->textInput() ?>
        </div>
        <div class='col-md-3 col-sm-3 col-xs-12 left_padd'>
            <?= $form->field($model, 'section3_label2')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-3 col-sm-3 col-xs-12 left_padd'>
            <?= $form->field($model, 'section3_value2')->textInput() ?>
        </div>
        <div class='col-md-3 col-sm-3 col-xs-12 left_padd'>
            <?= $form->field($model, 'section3_label3')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-3 col-sm-3 col-xs-12 left_padd'>
            <?= $form->field($model, 'section3_value3')->textInput() ?>
        </div>
        <div class='col-md-3 col-sm-3 col-xs-12 left_padd'>
            <?= $form->field($model, 'section3_label4')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-3 col-sm-3 col-xs-12 left_padd'>
            <?= $form->field($model, 'section3_value4')->textInput() ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?php
            echo $form->field($model, 'section4_image')->widget(FileInput::classname(), [
                'options' => ['accept' => 'jpg', 'png', 'bmp', 'tiff',],
                'pluginOptions' => [
                    'uploadUrl' => '',
                    'rtl' => 'true',
                    'fileActionSettings' => ['showZoom' => false, 'showRemove' => true,
                        'showDrag' => true, 'showUpload' => false, 'showCancel' => false],
                    'previewFileType' => 'image',
                    'showUpload' => false,
                ]
            ])->hint('Dimensions : 300*360');
            ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?php
            if ($model->section4_image != '' && $model->id != "") {
                $section4_image = explode(',', $model->section4_image);
                if (!empty($section4_image)) {
                    echo '<img width="75" style="border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->request->baseUrl . '/../images/about/section4_image' . '.' . $model->section4_image . '?' . rand() . '" />';
                }
                ?>
                <br>
                <br>
            <?php }
            ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?=
            $form->field($model, 'section4_description', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
                'options' => ['rows' => 2],
                'preset' => 'custom',
            ])
            ?>
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
