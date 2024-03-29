<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OurClientsSaysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Our Clients Says';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-clients-says-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= Html::a('<i class="fa fa-list"></i><span> Create Our Clients Says</span>', ['create'], ['class' => 'btn btn-block btn-info btn-sm']) ?>
                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            [
                                'attribute' => 'image',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->image))
                                        $img = '<img width="60" style = "border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->homeUrl . '../images/testimonials/testimonial' . $data->id . '.' . $data->image . '?' . rand() . '"/>';
                                    return $img;
                                },
                            ],
                            'author',
                            'designation',
                            'message',
                            ['class' => 'yii\grid\ActionColumn',
                                'template' => '{update}{delete}',
                            ],
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


