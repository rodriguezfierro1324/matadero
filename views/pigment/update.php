<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pigment */

$this->title = 'Update Pigment: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Pigments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pigment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
