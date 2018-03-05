<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Client */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'id_status')->textInput() ?> -->

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ci')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'mercado')->textInput(['maxlength' => true]) ?> -->

    <?= $form->field($model, 'mercado')
     ->dropDownList(
            array(
                    "Local"     => "Local",
                    "La Paz"    => "La Paz",
                    "Oruro"     => "Oruro",
                    "Potosi"    => "Potosi",
                    "Otros"     => "Otros"
                ),
            ['prompt' => '--- Seleccione ---']
    ) ?>

<!--     <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?> -->
    <hr/>
    <h2>Calilla de Canastillos</h2>
    <?= $form->field($model, 'canastillo_sigla')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'canastillo_estado')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'canastillo_color')->textInput(['maxlength' => true]) ?>
    <div class="form-group">
        <label>Calilla de Canastillos</label>
        <?= $form->field($model, 'canastillo_sigla')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'canastillo_estado')->textInput(['maxlength' => true]) ?>
        <?= $form->field($model, 'canastillo_color')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('client', 'create') : Yii::t('client', 'update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
