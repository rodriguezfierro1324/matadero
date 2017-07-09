<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\Provider;

/* @var $this yii\web\View */
/* @var $model app\models\Cage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'quantity')->textInput() ?>
    
    <!-- <?= $form->field($model, 'id_status')->textInput() ?> -->
    <?= $form->field($model, 'id_status')
    ->dropdownList(
        ['1' => 'Limpio', '2' => 'Sucio'], 
        ['prompt' => '--- Seleccione ---']
    ) ?>

    
    <!-- <?= $form->field($model, 'id_provider')->textInput() ?> -->
  
    <?= $form->field($model, 'id_provider')
     ->dropDownList(
            ArrayHelper::map(Provider::find()->asArray()->all(), 'id', 'name'),
            ['prompt' => '--- Seleccione ---']
    ) ?>

    <!-- <?= $form->field($model, 'operation')->textInput() ?> -->
    <?= $form->field($model, 'operation')
    ->dropdownList(
        ['1' => 'Recepcionar', '2' => 'Prestar', '3' => 'Dar de Baja'], 
        ['prompt' => '--- Seleccione ---']
    ) ?>

<!--     <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('cage', 'create') : Yii::t('cage', 'update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
