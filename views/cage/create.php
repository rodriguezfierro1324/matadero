<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cage */

$this->title = 'Create Cage';
$this->params['breadcrumbs'][] = ['label' => 'Cages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
