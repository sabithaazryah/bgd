<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BanerImagesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="baner-images-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'about') ?>

    <?= $form->field($model, 'property') ?>

    <?= $form->field($model, 'agents') ?>

    <?= $form->field($model, 'blog') ?>

    <?php // echo $form->field($model, 'contact_us') ?>

    <?php // echo $form->field($model, 'off_plan') ?>

    <?php // echo $form->field($model, 'site_map') ?>

    <?php // echo $form->field($model, 'terms_and_conditions') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'CB') ?>

    <?php // echo $form->field($model, 'UB') ?>

    <?php // echo $form->field($model, 'DOC') ?>

    <?php // echo $form->field($model, 'DOU') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
