<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\About */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


            </div>
            <div class="panel-body">

                <div class="panel-body"><div class="about-view">
                        <p>
                            <?=  Html::a('<i class="fa fa-list"></i><span> Manage About</span>', ['index'], ['class' => 'btn btn-warning  btn-icon btn-icon-standalone']) ?>
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                            ],
                            ]) ?>
                        </p>

                        <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                                    'id',
            'section1_title1',
            'section1_title2',
            'section1_description2:ntext',
            'section1_image',
            'section2_description:ntext',
            'section3_value1',
            'section3_label1',
            'section3_value2',
            'section3_label2',
            'section3_value3',
            'section3_label3',
            'section3_value4',
            'section3_label4',
            'section4_image',
            'section4_description:ntext',
            'status',
            'CB',
            'UB',
            'DOC',
            'DOU',
                        ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


