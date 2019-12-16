<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
use kartik\date\DatePicker;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Blogs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="blogs-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'canonical_name')->textInput(['readonly' => true]) ?>
    </div>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>
    </div>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?php
        if (!$model->isNewRecord) {
            $model->date = date('d-m-Y', strtotime($model->date));
        } else {
            $model->date = date('d-m-Y');
        }
        ?>
        <?=
        $form->field($model, 'date')->widget(DatePicker::classname(), [
            'type' => DatePicker::TYPE_INPUT,
            'pluginOptions' => [
                'autoclose' => true,
                'format' => 'dd-m-yyyy'
            ]
        ]);
        ?>
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
        ])->hint('Dimensions : 750*400');
        ?>
    </div>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?php
        if ($model->image != '' && $model->id != "") {
            $image = explode(',', $model->image);
            if (!empty($image)) {
                echo '<img width="75" style="border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->request->baseUrl . '/../images/blogs/blog' . $model->id . '.' . $model->image . '?' . rand() . '" />';
            }
            ?>
            <br>
            <br>
        <?php }
        ?>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <?= $form->field($model, 'small_description')->textarea(['rows' => 1]) ?>
    </div>
    <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
        <?=
        $form->field($model, 'detailed_description', ['options' => ['class' => 'form-group']])->widget(CKEditor::className(), [
            'options' => ['rows' => 2],
            'preset' => 'custom',
        ])
        ?>
    </div>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>
    </div>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>
    </div>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'meta_keyword')->textarea(['rows' => 3]) ?>
    </div>
    <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
        <?= $form->field($model, 'meta_description')->textarea(['rows' => 3]) ?>
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
