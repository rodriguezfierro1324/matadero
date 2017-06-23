<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TickerReceipt */

$this->title = 'Create Ticker Receipt';
$this->params['breadcrumbs'][] = ['label' => 'Ticker Receipts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticker-receipt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
