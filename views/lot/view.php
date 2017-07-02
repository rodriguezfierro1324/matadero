<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Lot */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('lot', 'lots'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lot-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('lot', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('lot', 'delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('lot', 'delete_confirm'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code',
            'id_ticket_receipt',
            'id_pigment',
            'comments',
            'id_status',
            'quantity_chicken',
            'counter_1',
            'counter_2',
            'total',
            'type_chicken',
            'quantity_discard',
            'created',
            'created_by',
            'modified',
            'modified_by',
        ],
    ]) ?>

</div>
