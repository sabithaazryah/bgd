<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PortfolioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Portfolios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <?= Html::a('<i class="fa fa-list"></i><span> Create Portfolio</span>', ['create'], ['class' => 'btn btn-block btn-info btn-sm']) ?>
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
                                        $img = '<img width="60" style = "border: 2px solid #d2d2d2;margin-right:.5em;" src="' . Yii::$app->homeUrl . '../images/portfolio/portfolio' . $data->id . '.' . $data->image . '?' . rand() . '"/>';
                                    return $img;
                                },
                            ],
                            [
                                'attribute' => 'category',
                                'value' => function($model) {
                                    $category = \common\models\PortfolioCategory::findOne($model->category);
                                    if (!empty($category)) {
                                        return $category->category;
                                    } else {
                                        return '';
                                    }
                                }
                            ],
                            'name',
                            [
                                'attribute' => 'status',
                                'value' => function($model, $key, $index, $column) {
                                    return $model->status == 1 ? 'Enabled' : 'Disabled';
                                },
                                'filter' => [1 => 'Enabled', 0 => 'Disabled'],
                            ],
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


