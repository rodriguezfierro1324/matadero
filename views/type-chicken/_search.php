<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TypeChickenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="type-chicken-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'comments') ?>

    <!-- <?= $form->field($model, 'created_by') ?>

    <?= $form->field($model, 'created') ?> -->

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('type-chicken', 'search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('type-chicken', 'reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
