<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PortfolioCategory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="portfolio-category-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'category')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>
        </div>

        <div class='col-md-4 col-sm-6 col-xs-12 left_padd'>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-block btn-success btn-sm', 'style' => 'margin-top:24px']) ?>
            </div>
        </div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
