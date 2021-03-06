<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pigment */

$this->title = Yii::t('pigment', 'update').': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('pigment', 'pigments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('pigment', 'update');
?>
<div class="pigment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
