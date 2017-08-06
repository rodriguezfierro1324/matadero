<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_status') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'id_provider') ?>

    <?= $form->field($model, 'operation') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cage', 'search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cage', 'reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
