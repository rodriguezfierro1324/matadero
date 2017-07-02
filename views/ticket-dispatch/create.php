<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TicketDispatch */

$this->title = Yii::t('ticket_dispatch', 'create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('ticket_dispatch', 'type-dispatchs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-dispatch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
