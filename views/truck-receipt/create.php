<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Truck */

$this->title = Yii::t('truck-receipt', 'create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('truck-receipt', 'truck-receipts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="truck-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
