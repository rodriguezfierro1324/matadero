<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProviderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="provider-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'contact_name') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'ci') ?>

    <?php // echo $form->field($model, 'quantity_cage') ?>

    <?php // echo $form->field($model, 'is_cage_own') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('provider', 'search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('provider', 'reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
