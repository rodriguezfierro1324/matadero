<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TicketReceiptSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-receipt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_provider') ?>

    <?= $form->field($model, 'id_truck') ?>

    <?= $form->field($model, 'id_driver') ?>

    <?= $form->field($model, 'quantity_chicken') ?>

    <?php // echo $form->field($model, 'gross_weight') ?>

    <?php // echo $form->field($model, 'tare_weight') ?>

    <?php // echo $form->field($model, 'net_weight') ?>

    <?php // echo $form->field($model, 'quantity_cage') ?>

    <?php // echo $form->field($model, 'code') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
