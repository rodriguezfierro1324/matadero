<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('cage', 'cages');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cage-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('cage', 'create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_status',
            'quantity',
            'id_provider',
            'operation',
            // 'created',
            // 'created_by',
            // 'modified',
            // 'modified_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
