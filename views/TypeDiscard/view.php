<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TypeDiscard */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Type Discards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-discard-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
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
