<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TickerDispatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticker-dispatch-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_lot') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'id_client') ?>

    <?= $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'code') ?>

    <?php // echo $form->field($model, 'type_chicken') ?>

    <?php // echo $form->field($model, 'cage') ?>

    <?php // echo $form->field($model, 'id_truck') ?>

    <?php // echo $form->field($model, 'id_driver') ?>

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
