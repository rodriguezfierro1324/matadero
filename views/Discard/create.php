<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Discard */

$this->title = 'Create Discard';
$this->params['breadcrumbs'][] = ['label' => 'Discards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
