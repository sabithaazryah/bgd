<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\PanoramaVisualization */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="panorama-visualization-form form-inline">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'canonical_name')->textInput(['readonly' => true]) ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'description')->textarea(['rows' => 4]) ?>
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
            ]);
            ?>
            <?php
            if ($model->image != '' && $model->id != "") {
                $image = explode(',', $model->image);
                if (!empty($image)) {
                    echo '<img width="75" style="border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->request->baseUrl . '/../images/panorama-design/design' . $model->id . '.' . $model->image . '?' . rand() . '" />';
                }
                ?>
                <br>
                <br>
            <?php }
            ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'scope')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'twitter_link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'linkedin_link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'instegram_link')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'status')->dropDownList(['1' => 'Enabled', '0' => 'Disabled']) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?= $form->field($model, 'meta_keyword')->textInput(['maxlength' => true]) ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <?= $form->field($model, 'meta_description')->textarea(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class='col-md-6 col-sm-6 col-xs-12 left_padd'>
            <?php
            echo $form->field($model, 'gallery_images[]')->widget(FileInput::classname(), [
                'options' => ['accept' => 'jpg', 'png', 'bmp', 'tiff', 'multiple' => true,],
                'pluginOptions' => [
                    'uploadUrl' => '',
                    'rtl' => 'true',
                    'fileActionSettings' => ['showZoom' => false, 'showRemove' => true,
                        'showDrag' => true, 'showUpload' => false, 'showCancel' => false],
                    'previewFileType' => 'image',
                    'showUpload' => false,
                ]
            ]);
            ?>
        </div>
        <div class='col-md-12 col-sm-12 col-xs-12 left_padd'>
            <div class="row">
                <?php
                if (!$model->isNewRecord) {
                    $path = Yii::getAlias('@paths') . '/panorama-design/gallery/' . $model->id;
                    if (count(glob("{$path}/*")) > 0) {
                        $k = 0;
                        foreach (glob("{$path}/*") as $file) {
                            $k++;
                            $arry = explode('/', $file);
                            $img_nmee = end($arry);

                            $img_nmees = explode('.', $img_nmee);
                            if ($img_nmees['1'] != '') {
                                ?>

                                <div class = "col-md-2 img-box" id="gallerybox-<?= $k; ?>">
                                    <div class="news-img">
                                        <img class="img-responsive" src="<?= Yii::$app->homeUrl . '../images/panorama-design/gallery/' . $model->id . '/' . end($arry) ?>">
                                        <a data-val="<?= end($arry) ?>" id="<?= $model->id ?>" data-id="<?= $k ?>" class="gal-img-remove" title="Remove Image"><i class="fa fa-times-circle-o"></i></a>
                                    </div>
                                </div>


                                <?php
                            }
                        }
                    }
                }
                ?>
            </div>
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
