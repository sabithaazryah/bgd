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

    <?= $form->field($model, 'section1_description1') ?>

    <?= $form->field($model, 'section1_description2') ?>

    <?php // echo $form->field($model, 'section2_title') ?>

    <?php // echo $form->field($model, 'mission') ?>

    <?php // echo $form->field($model, 'vision') ?>

    <?php // echo $form->field($model, 'who_we_are') ?>

    <?php // echo $form->field($model, 'what_we_do') ?>

    <?php // echo $form->field($model, 'our_approach') ?>

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
