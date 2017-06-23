<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TicketReceipt */

$this->title = 'Create Ticket Receipt';
$this->params['breadcrumbs'][] = ['label' => 'Ticket Receipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-receipt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
