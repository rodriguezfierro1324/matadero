<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiscardSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('discard', 'discards');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('discard', 'create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            // 'id_type_discard',
            [
                'attribute'=>'id_type_discard',
                'value'=>'typediscard.name'
            ],
            // 'weight',
            [
                'attribute'=>'weight',
                'contentOptions' => ['class' => 'text-right'],
                'format'=>['decimal',2]
            ],
            // 'comments',
            'id_status',
            // 'created',
            // 'created_by',
            // 'modified',
            // 'modified_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
