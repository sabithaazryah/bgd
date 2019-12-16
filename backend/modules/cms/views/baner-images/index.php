<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BanerImagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Baner Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="baner-images-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                                                <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
                    
                    <?=  Html::a('<i class="fa fa-list"></i><span> Create Baner Images</span>', ['create'], ['class' => 'btn btn-block btn-info btn-sm']) ?>
                                                                            <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
        'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                                    'id',
            'about',
            'property',
            'agents',
            'blog',
            // 'contact_us',
            // 'off_plan',
            // 'site_map',
            // 'terms_and_conditions',
            // 'status',
            // 'CB',
            // 'UB',
            // 'DOC',
            // 'DOU',

                        ['class' => 'yii\grid\ActionColumn'],
                        ],
                        ]); ?>
                                                        </div>
            </div>
        </div>
    </div>
</div>


