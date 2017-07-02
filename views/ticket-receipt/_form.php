<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TicketReceipt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-receipt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_provider')->textInput() ?>

    <?= $form->field($model, 'id_truck')->textInput() ?>

    <?= $form->field($model, 'id_driver')->textInput() ?>

    <?= $form->field($model, 'quantity_chicken')->textInput() ?>

    <?= $form->field($model, 'gross_weight')->textInput() ?>

    <?= $form->field($model, 'tare_weight')->textInput() ?>

    <?= $form->field($model, 'net_weight')->textInput() ?>

    <?= $form->field($model, 'quantity_cage')->textInput() ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

   <!--  <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ticket-receipt', 'create') : Yii::t('ticket-receipt', 'update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
