<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TypeDiscard */

$this->title = Yii::t('type-discard', 'create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('type-discard', 'type-discards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-discard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
