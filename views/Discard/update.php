<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Discard */

$this->title = 'Update Discard: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Discards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="discard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
