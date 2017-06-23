<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeChicken */

$this->title = 'Update Type Chicken: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Type Chickens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-chicken-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
