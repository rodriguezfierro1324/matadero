<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TickerDispatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ticker Dispatches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticker-dispatch-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ticker Dispatch', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_lot',
            'quantity',
            'id_client',
            'weight',
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
