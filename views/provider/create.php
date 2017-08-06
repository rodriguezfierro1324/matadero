<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Provider */

$this->title = Yii::t('provider', 'create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('provider', 'providers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="provider-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
