<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TicketDispatch */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ticket-dispatch', 'ticket-dispatchs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-dispatch-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ticket-dispatch', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('ticket-dispatch', 'delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('ticket-dispatch', 'delete_confirm'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            // 'id_lot',
            [
                'attribute'=>'id_lot',
                'value'=>$model->truck->licence_plate
            ],
            'quantity',
            // 'id_client',
            [
                'attribute'=>'id_client',
                'value'=>$model->client->name
            ],
            'weight',
            'code',
            // 'type_chicken',
            [
                'attribute'=>'type_chicken',
                'value'=>$model->typechicken->name
            ],
            'cage',
            // [
            //     'attribute'=>'id_truck',
            //     'value'=>$model->lot->id
            // ],
            // 'id_driver',
            [
                'attribute'=>'id_driver',
                'value'=>$model->driver->name
            ],
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
