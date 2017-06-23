<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TickerDispatch */

$this->title = 'Update Ticker Dispatch: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ticker Dispatches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ticker-dispatch-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
