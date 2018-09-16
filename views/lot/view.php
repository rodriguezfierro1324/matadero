<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Lot */

$this->title = yii::t('lot','lot').' - '.$model->code;
$this->params['breadcrumbs'][] = ['label' => yii::t('provider','provider').' - '.$model->ticketR->provider->name, 'url' => ['provider/view','id'=>$model->ticketR->id_provider]];
$this->params['breadcrumbs'][] = ['label' => yii::t('ticket-receipt','ticket-receipt').' - '.$model->ticketR->code, 'url' => ['ticket-receipt/view','id'=>$model->id_ticket_receipt]];
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
        <?php 
            Modal::begin([
                'header' => '<h2>'.Yii::t('lot', 'update_quantity').'</h2>',
                'toggleButton' =>  ['label' => Yii::t('lot', 'update_quantity'),'class' => 'btn btn-success'],
            ]);
            ?>
            <div class="modal-body">
                <div class="form-group">
                <?php 
                    $form = ActiveForm::begin([
                    'id' => 'lot-form-quantity',
                    'action'=>Yii::$app->urlManager->createUrl(["lot/update","id"=>$model->id])
                    ]); 
                ?>
                <?= $form->errorSummary($model); ?>
                    <?= $form->field($model, 'counter_1')->textInput() ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <?= Html::submitButton($model->isNewRecord ? Yii::t('lot', 'create') : Yii::t('lot', 'update'), ['id'=>'submit-quantity','class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

                </div>
                <?php ActiveForm::end(); ?>
            </div>
        <?php
            Modal::end();
        ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'code',
            [
                'attribute'=>'Proveedor',
                'value'=>$model->ticketR->provider->name
            ],
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
            [
                'attribute'=>'id_status',
                'value'=>$model->stado
            ],
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