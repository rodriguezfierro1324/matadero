<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TicketDispatch */

$this->title = 'Create Ticket Dispatch';
$this->params['breadcrumbs'][] = ['label' => 'Ticket Dispatches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-dispatch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
