<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PanoramaVisualizationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panorama-visualization-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'canonical_name') ?>

    <?= $form->field($model, 'description') ?>

    <?= $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'location') ?>

    <?php // echo $form->field($model, 'scope') ?>

    <?php // echo $form->field($model, 'facebook_link') ?>

    <?php // echo $form->field($model, 'twitter_link') ?>

    <?php // echo $form->field($model, 'linkedin_link') ?>

    <?php // echo $form->field($model, 'instegram_link') ?>

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
