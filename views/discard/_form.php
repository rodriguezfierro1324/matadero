<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use app\models\TypeDiscard;
/* @var $this yii\web\View */
/* @var $model app\models\Discard */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discard-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'id_type_discard')->textInput() ?> -->
    <?= $form->field($model, 'id_type_discard')
     ->dropDownList(
            ArrayHelper::map(TypeDiscard::find()->asArray()->all(), 'id', 'name'),
            ['prompt' => '--- Seleccione ---']
    ) ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'comments')->textarea(['rows' => '6']) ?>

    <!-- <?= $form->field($model, 'id_status')->textInput() ?> -->
    <?= $form->field($model, 'id_status')->dropdownList(['1' => 'Activo', '2' => 'Inactivo'], ['prompt' => '--- Seleccione ---']) ?>

<!--     <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'modified_by')->textInput() ?>
 -->
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('discard', 'create') : Yii::t('discard', 'update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
