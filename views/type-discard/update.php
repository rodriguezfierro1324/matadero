<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TypeDiscard */

$this->title = Yii::t('type-discard', 'update').': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('type-discard', 'type-discards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="type-discard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
