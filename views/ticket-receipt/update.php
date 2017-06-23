<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TicketReceipt */

$this->title = 'Update Ticket Receipt: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Receipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ticket-receipt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>