<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LotSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('lot', 'lots');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lot-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('lot', 'create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code',
            [
                'attribute'=>'id_ticket_receipt',
                'value'=>'ticketR.code'
            ],            
            [
                'attribute'=>'id_pigment',
                'value'=>'pigment.name'
            ],
            //'comments',
            // 'id_status',
            // 'quantity_chicken',
            // 'counter_1',
            // 'counter_2',
            // 'total',
            // 'type_chicken',
            // 'quantity_discard',
             'created',
             'created_by',
            // 'modified',
            // 'modified_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
