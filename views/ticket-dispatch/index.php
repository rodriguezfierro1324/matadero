<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TicketDispatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ticket-dispatch', 'ticket-dispatchs');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-dispatch-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('ticket-dispatch', 'create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // 'id_lot',
            [
                'attribute'=>'id_lot',
                'value'=>'lot.code'
            ],
            // 'quantity',
            [
                'attribute'=>'quantity',
                'contentOptions' => ['class' => 'text-right'],
            ],
            // 'id_client',
            
            [
                'attribute'=>'id_client',
                'value'=>'client.name'
            ],
            // 'weight',
            [
                'attribute'=>'weight',
                'format'=>['decimal',2],
                'contentOptions' => ['class' => 'text-right'],
            ],
            // 'code',
            // 'type_chicken',
            // 'cage',
            // 'id_truck',
            // 'id_driver',
            // 'created_by',
            // 'created',
            // 'modified_by',
            // 'modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
