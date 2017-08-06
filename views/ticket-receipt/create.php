<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TicketReceipt */

$this->title = Yii::t('ticket-receipt', 'create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ticket-receipt', 'ticket-receipts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-receipt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
