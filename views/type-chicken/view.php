<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TypeChicken */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('type-chicken', 'type-chickens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-chicken-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('type-chicken', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('type-chicken', 'delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('type-chicken', 'delete_confirm'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'comments',
            'created_by',
            'created',
            'modified_by',
            'modified',
        ],
    ]) ?>

</div>
