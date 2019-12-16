<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PortfolioCategory */

$this->title = 'Update Portfolio Category: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Portfolio Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="row">
    <div class="col-md-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


            </div>
            <div class="panel-body">
                <?=  Html::a('<i class="fa fa-list"></i><span> Manage Portfolio Category</span>', ['index'], ['class' => 'btn btn-block btn-info btn-sm']) ?>
                <div class="portfolio-category-create">
                    <?= $this->render('_form', [
                    'model' => $model,
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</div>
