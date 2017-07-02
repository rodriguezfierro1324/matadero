<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cage */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('cage', 'cages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cage-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('cage', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('cage', 'delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('cage', 'delete_confirm'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_status',
            'quantity',
            'id_provider',
            'operation',
            'created',
            'created_by',
            'modified',
            'modified_by',
        ],
    ]) ?>

</div>
