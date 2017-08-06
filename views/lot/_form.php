<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\TypeChicken;
use app\models\Pigment;
use app\models\TicketReceipt;
/* @var $this yii\web\View */
/* @var $model app\models\Lot */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lot-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->errorSummary($model); ?>
    <?= $form->field($model, 'id_ticket_receipt')->dropDownList(
        ArrayHelper::map(TicketReceipt::getTicketsR(), 'id', 'code'),['prompt' => '--- Seleccione ---']); ?>

    <?= $form->field($model, 'id_pigment')->dropDownList(
              ArrayHelper::map(Pigment::find()->asArray()->all(), 'id', 'name'),['prompt' => '--- Seleccione ---']
    ) ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => '6']) ?>

    <?= $form->field($model, 'quantity_chicken')->textInput() ?>

    <!-- <?= $form->field($model, 'counter_1')->textInput() ?>

    <?= $form->field($model, 'counter_2')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?> -->

    <?= $form->field($model, 'type_chicken')
     ->dropDownList(
            ArrayHelper::map(TypeChicken::find()->asArray()->all(), 'id', 'name'),
            ['prompt' => '--- Seleccione ---']
    ) ?>

    <?= $form->field($model, 'quantity_discard')->textInput() ?>

<!--     <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('lot', 'create') : Yii::t('lot', 'update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
