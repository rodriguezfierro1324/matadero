<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pigment */

$this->title = Yii::t('pigment', 'create');
$this->params['breadcrumbs'][] = ['label' => 'Pigments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pigment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
