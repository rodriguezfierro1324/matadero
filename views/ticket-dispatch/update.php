<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TicketDispatch */

$this->title = Yii::t('ticket-dispatch', 'update').': ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('ticket-dispatch', 'type-dispatchs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('ticket-dispatch', 'update');
?>
<div class="ticket-dispatch-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
