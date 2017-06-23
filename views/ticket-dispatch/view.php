<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TicketDispatch */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Dispatches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-dispatch-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
