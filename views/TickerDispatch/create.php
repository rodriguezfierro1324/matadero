<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TickerDispatch */

$this->title = 'Create Ticker Dispatch';
$this->params['breadcrumbs'][] = ['label' => 'Ticker Dispatches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticker-dispatch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
