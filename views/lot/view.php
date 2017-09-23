<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lot */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('lot', 'lots'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lot-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('lot', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('lot', 'delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('lot', 'delete_confirm'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code',
            // 'id_ticket_receipt',
            [
                'attribute'=>'id_ticket_receipt',
                'value'=>$model->ticketR->code
            ],
            // 'id_pigment',
            [
                'attribute'=>'id_pigment',
                'value'=>$model->pigment->name
            ],
            'comments',
            'id_status',
            // [
            //     'attribute'=>'id_status',
            //     'value'=>$model->estado
            // ],
            // 'quantity_chicken',
            [
                'attribute'=>'quantity_chicken'
            ],
            // 'counter_1',
            // 'counter_2',
            // 'total',
            [
                'attribute'=>'total'
            ],
            // 'type_chicken',
            [
                'attribute'=>'type_chicken',
                'value'=>$model->typechicken->name
            ],
            // 'quantity_discard',
            [
                'attribute'=>'quantity_discard'
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
