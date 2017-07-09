<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pigment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pigment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => '6']) ?>

    <?= $form->field($model, 'destination')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_status')->dropdownList(['1' => 'Activo', '2' => 'Inactivo'], ['prompt' => '--- Seleccione ---']) ?>

<!--     <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('pigment', 'create') : Yii::t('pigment', 'update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
