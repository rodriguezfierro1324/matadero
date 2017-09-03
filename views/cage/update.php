<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cage */

$this->title = Yii::t('cage', 'update').': ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('cage', 'cages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
