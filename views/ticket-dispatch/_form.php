<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\Client;
use app\models\TypeChicken;
use app\models\Truck;
use app\models\Driver;
use app\models\Lot;

/* @var $this yii\web\View */
/* @var $model app\models\TicketDispatch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-dispatch-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id_lot')->textInput() ?> -->
    <?= $form->field($model, 'id_lot')
     ->dropDownList(
            ArrayHelper::map(Lot::find()->asArray()->all(), 'id', 'code'),
            ['prompt' => '--- Seleccione ---']
    ) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <!-- <?= $form->field($model, 'id_client')->textInput() ?> -->
    <?= $form->field($model, 'id_client')
     ->dropDownList(
            ArrayHelper::map(Client::find()->asArray()->all(), 'id', 'name'),
            ['prompt' => '--- Seleccione ---']
    ) ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'type_chicken')->textInput() ?> -->
    <?= $form->field($model, 'type_chicken')
     ->dropDownList(
            ArrayHelper::map(TypeChicken::find()->asArray()->all(), 'id', 'name'),
            ['prompt' => '--- Seleccione ---']
    ) ?>

    <?= $form->field($model, 'cage')->textInput() ?>

    <!-- <?= $form->field($model, 'id_truck')->textInput() ?> -->
    <?= $form->field($model, 'id_truck')
     ->dropDownList(
            ArrayHelper::map(Truck::find()->asArray()->all(), 'id', 'licence_plate'),
            ['prompt' => '--- Seleccione ---']
    ) ?>

    <!-- <?= $form->field($model, 'id_driver')->textInput() ?> -->
    <?= $form->field($model, 'id_driver')
     ->dropDownList(
            ArrayHelper::map(Driver::find()->asArray()->all(), 'id', 'name'),
            ['prompt' => '--- Seleccione ---']
    ) ?>

<!--     <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('ticket-dispatch', 'create') : Yii::t('ticket-dispatch', 'update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
