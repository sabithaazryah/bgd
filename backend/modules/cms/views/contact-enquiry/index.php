<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ContactEnquirySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contact Enquiries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-enquiry-index">

    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= Html::encode($this->title) ?></h3>


                </div>
                <div class="panel-body">
                    <?= \common\components\AlertMessageWidget::widget() ?>
                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'name',
                            'email:email',
                            'phone',
                            [
                                'attribute' => 'message',
                                'format' => 'raw',
                                'value' => function ($data) {
                                    if (!empty($data->message)) {
                                        $message = wordwrap($data->message, 50, "<br />\n");
                                        return $message;
                                    } else {
                                        return '';
                                    }
                                },
                            ],
                            'date',
                            ['class' => 'yii\grid\ActionColumn',
                                'template' => '{delete}',
                            ],
                        ],
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


