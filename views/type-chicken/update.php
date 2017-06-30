<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeChicken */

$this->title = Yii::t('type-chicken', 'update').': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('type-chicken', 'type-chickens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('type-chicken', 'update');
?>
<div class="type-chicken-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
