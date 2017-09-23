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
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            // 'id_type_discard',
            [
                'attribute'=>'id_type_discard',
                'value'=>$model->typediscard->name
            ],
            // 'weight',
            [
                'attribute'=>'weight',
                'format'=>['decimal',2]
            ],
            'comments',
            'id_status',
            // 'created_by',
            [
                'attribute'=>'created_by',
                'value'=>$model->createdby->username
            ],
            // 'created',
            [
                'attribute'=>'created',
                'value'=>date('d-m-Y h:i:s', strtotime($model->created))
            ],
            // 'modified_by',
            [
                'attribute'=>'modified_by',
                'value'=>$model->modifiedby->username
            ],
            // 'modified',
            [
                'attribute'=>'modified',
                'value'=>date('d-m-Y h:i:s', strtotime($model->modified))
            ]
        ],
    ]) ?>

</div>
