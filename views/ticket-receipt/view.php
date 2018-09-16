<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\TicketReceipt */

$this->title = $model->code;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ticket-receipt', 'ticket-receipts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-receipt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ticket-receipt', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('ticket-receipt', 'delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('ticket-receipt', 'delete_confirm'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code',
            [
                'attribute'=>'id_provider',
                'value'=>$model->provider->name
            ],
            [
                'attribute'=>'id_truck',
                'value'=>$model->truck->licence_plate
            ],
            [
                'attribute'=>'id_driver',
                'value'=>$model->driver->name
            ],
            [
                'attribute'=>'quantity_chicken',
                'value'=>$model->TotalChickens,
                'format'=>['decimal',2]
            ],            
            [
                'attribute'=>'gross_weight',
                'format'=>['decimal',2]
            ],
            [
                'attribute'=>'tare_weight',
                'format'=>['decimal',2]
            ],
            [
                'attribute'=>'net_weight',
                'format'=>['decimal',2]
            ],
            [
                'attribute'=>'quantity_cage'
            ],
            'code',
            [
                'attribute'=>'created_by',
                'value'=>$model->createdby->username
            ],
            [
                'attribute'=>'created',
                'value'=>date('d-m-Y h:i:s', strtotime($model->created))
            ],
            [
                'attribute'=>'modified_by',
                'value'=>$model->modifiedby->username
            ],
            [
                'attribute'=>'modified',
                'value'=>date('d-m-Y h:i:s', strtotime($model->modified))
            ]
        ],
    ]) ?>

</div>
<h1>Lotes </h1>
    <?php 
    if($model->TotalChickens>0)
    {
        Modal::begin([
            'header' => '<h2>'.Yii::t('lot', 'create').'</h2>',
            'id'=>'modal-ticket',
            'toggleButton' => ['label' => Yii::t('lot', 'create'),'class' => 'btn btn-success'],
            'clientOptions'=>[
                'remote'=>Yii::$app->urlManager->createUrl(['lot/create','id'=>$model->id])
            ]
        ]);
        Modal::end();
    }        
    ?>
<?= GridView::widget([
        'dataProvider' => $dataProviderL,
        'filterModel' => $lotSM,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'code', 
            [
                'attribute'=>'id_pigment',
                'value'=>'pigment.name'
            ],
            'quantity_chicken',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
