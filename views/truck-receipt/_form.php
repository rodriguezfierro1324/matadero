<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Truck */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="truck-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_driver')->textInput() ?>

    <?= $form->field($model, 'licence_plate')->textarea(['rows' => 6]) ?>

<!--     <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('truck-receipt', 'create') : Yii::t('truck-receipt', 'update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
