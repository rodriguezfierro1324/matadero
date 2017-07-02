<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Discard */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('discard', 'discards'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discard-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('discard', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('discard', 'delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('discard', 'delete_confirm'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'id_type_discard',
            'weight',
            'comments',
            'id_status',
            'created',
            'created_by',
            'modified',
            'modified_by',
        ],
    ]) ?>

</div>
