<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TickerReceipt */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ticker Receipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticker-receipt-view">

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
            'id_provider',
            'id_truck',
            'id_driver',
            'quantity_chicken',
            'gross_weight',
            'tare_weight',
            'net_weight',
            'quantity_cage',
            'code',
            'created_by',
            'created',
            'modified_by',
            'modified',
        ],
    ]) ?>

</div>