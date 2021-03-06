<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Provider;
use app\models\Truck;
use app\models\Driver;

/* @var $this yii\web\View */
/* @var $model app\models\TicketReceipt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-receipt-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($model); ?>

    <?= $form->field($model, 'id_provider')->dropDownList(ArrayHelper::map(Provider::getProviders(),'id','name'),['prompt'=>'--Seleccione--']) ?>

    <?= $form->field($model, 'id_truck')->dropDownList(ArrayHelper::map(Truck::getTrucks(),'id','licence_plate'),['prompt'=>'--Seleccione--']) ?>

    <?= $form->field($model, 'id_driver')->dropDownList(ArrayHelper::map(Driver::getDrivers(),'id','NameComplete'),['prompt'=>'--Seleccione--']) ?>

    <?= $form->field($model, 'quantity_chicken')->textInput() ?>

    <?= $form->field($model, 'gross_weight')->textInput() ?>

    <?= $form->field($model, 'tare_weight')->textInput() ?>

    <?= $form->field($model, 'net_weight')->textInput() ?>

    <?= $form->field($model, 'quantity_cage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ticket-receipt', 'create') : Yii::t('ticket-receipt', 'update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
