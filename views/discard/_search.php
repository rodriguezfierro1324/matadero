<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DiscardSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="discard-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'id_type_discard') ?>

    <?= $form->field($model, 'weight') ?>

    <?= $form->field($model, 'comments') ?>

    <?= $form->field($model, 'id_status') ?>

    <?php // echo $form->field($model, 'created') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'modified') ?>

    <?php // echo $form->field($model, 'modified_by') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('discard', 'search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('discard', 'reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
