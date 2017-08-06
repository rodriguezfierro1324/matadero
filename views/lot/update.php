<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lot */

$this->title = Yii::t('lot', 'update').': ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('lot', 'lots'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('lot', 'update');
?>
<div class="lot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
