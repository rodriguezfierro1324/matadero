<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TicketReceiptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ticket-receipt', 'ticket-receipt');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-receipt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('ticket-receipt', 'create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'code',
            [
                'attribute'=>'id_provider',
                'value'=>'provider.name'
            ],
            [
                'attribute'=>'id_truck',
                'value'=>'truck.licence_plate'
            ],
            [
                'attribute'=>'id_driver',
                'value'=>'driver.NameComplete'
            ],
            // 'quantity_chicken',
            [
                'attribute'=>'quantity_chicken',
                'contentOptions' => ['class' => 'text-right']
            ],


            // 'gross_weight',
            // 'tare_weight',
            // 'net_weight',
            // 'quantity_cage',
            // 'code',
            // 'created_by',
             // 'created',
            // 'modified_by',
            // 'modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
