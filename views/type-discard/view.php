<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TypeDiscard */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('type-discard', 'type-discards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-discard-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('type-discard', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('type-discard', 'delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('type-discard', 'delete_confirm'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'created',
            'created_by',
            'modified',
            'modified_by',
        ],
    ]) ?>

</div>
