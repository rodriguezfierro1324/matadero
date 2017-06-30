<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TypeChicken */

$this->title = Yii::t('type-chicken', 'create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('type-chicken', 'type-chickens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-chicken-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
