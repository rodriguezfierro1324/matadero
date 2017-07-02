<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TicketReceipt */

$this->title = Yii::t('ticket-receipt', 'update').': ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ticket-receipt', 'type-receipts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('ticket-receipt', 'update');
?>
<div class="ticket-receipt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
