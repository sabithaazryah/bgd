<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AboutSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="about-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'section1_title1') ?>

    <?= $form->field($model, 'section1_title2') ?>

    <?= $form->field($model, 'section1_description2') ?>

    <?= $form->field($model, 'section1_image') ?>

    <?php // echo $form->field($model, 'section2_description') ?>

    <?php // echo $form->field($model, 'section3_value1') ?>

    <?php // echo $form->field($model, 'section3_label1') ?>

    <?php // echo $form->field($model, 'section3_value2') ?>

    <?php // echo $form->field($model, 'section3_label2') ?>

    <?php // echo $form->field($model, 'section3_value3') ?>

    <?php // echo $form->field($model, 'section3_label3') ?>

    <?php // echo $form->field($model, 'section3_value4') ?>

    <?php // echo $form->field($model, 'section3_label4') ?>

    <?php // echo $form->field($model, 'section4_image') ?>

    <?php // echo $form->field($model, 'section4_description') ?>

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
