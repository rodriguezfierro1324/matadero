<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TicketReceipt */

$this->title = $model->id;
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
            'id',
            // 'id_provider',
            // 'id_provider',
            [
                'attribute'=>'id_provider',
                'value'=>$model->provider->name
            ],
            // 'id_truck',
            [
                'attribute'=>'id_truck',
                'value'=>$model->truck->licence_plate
            ],
            // 'id_driver',
            [
                'attribute'=>'id_driver',
                'value'=>$model->driver->name
            ],
            'quantity_chicken',
            'gross_weight',
            'tare_weight',
            'net_weight',
            'quantity_cage',
            'code',
            // 'created_by',
            [
                'attribute'=>'created_by',
                'value'=>$model->createdby->username
            ],
            // 'created',
            [
                'attribute'=>'created',
                'value'=>date('d-m-Y h:i:s', strtotime($model->created))
            ],
            // 'modified_by',
            [
                'attribute'=>'modified_by',
                'value'=>$model->modifiedby->username
            ],
            // 'modified',
            [
                'attribute'=>'modified',
                'value'=>date('d-m-Y h:i:s', strtotime($model->modified))
            ]
        ],
    ]) ?>

</div>
