<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TickerReceiptSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ticker Receipts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticker-receipt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ticker Receipt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_provider',
            'id_truck',
            'id_driver',
            'quantity_chicken',
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
