<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TicketDispatch */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ticket_dispatch', 'type-dispatchs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-dispatch-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('ticket_dispatch', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('ticket_dispatch', 'delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('ticket_dispatch', 'delete_confirm'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_lot',
            'quantity',
            'id_client',
            'weight',
            'code',
            'type_chicken',
            'cage',
            'id_truck',
            'id_driver',
            'created_by',
            'created',
            'modified_by',
            'modified',
        ],
    ]) ?>

</div>
