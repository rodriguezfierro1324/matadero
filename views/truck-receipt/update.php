<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Truck */

$this->title = Yii::t('truck-receipt', 'update').': ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('truck-receipt', 'truck-receipts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('truck-receipt', 'update');
?>
<div class="truck-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
