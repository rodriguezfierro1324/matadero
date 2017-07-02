<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LotSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lot-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'id_ticket_receipt') ?>

    <?= $form->field($model, 'id_pigment') ?>

    <?= $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'id_status') ?>

    <?php // echo $form->field($model, 'quantity_chicken') ?>

    <?php // echo $form->field($model, 'counter_1') ?>

    <?php // echo $form->field($model, 'counter_2') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'type_chicken') ?>

    <?php // echo $form->field($model, 'quantity_discard') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
