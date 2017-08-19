<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\models\Cage;

/* @var $this yii\web\View */
/* @var $model app\models\Provider */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('provider', 'providers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="provider-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('provider', 'update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('provider', 'delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('provider', 'delete_confirm'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'phone',
            'contact_name',
            'email:email',
            'ci',
            'quantity_cage',
            [
                'attribute'=>'is_cage_own',
                'value'=>$model->is_cage_own==1?'Si':'No'
            ],
            'created_by',
            // 'created',
            [
                'attribute'=>'created',
                'value'=>date('d-m-Y h:i:s', strtotime($model->created))
            ],
            'modified_by',
            // 'modified',
            [
                'attribute'=>'modified',
                'value'=>date('d-m-Y h:i:s', strtotime($model->modified))
            ]
        ],
    ]) ?>
    <?php
    /* Get all the articles for one author by using the author relation define in Articles */
    $dataProvider = new ActiveDataProvider([
        'query' => Cage::find()->where(['id_provider'=>$model->id]),
    ]);
    $searchModel = "";
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            // 'id_status',
            [
                'attribute'=>'id_status',
                'value'=>function ($data) {
                            switch ($data->id_status) {
                                case 1:
                                    return "Limpio";
                                    break;
                                default:
                                    return "Sucio";
                                    break;
                            }
                                // return $data->operation." ".$data->operation;
                        }
            ],
            'quantity',
            // 'id_provider',
            // [
            //     'attribute'=>'id_provider',
            //     'value'=>'provider2.name'
            // ],
            // 'operation',
            [
                'attribute'=>'operation',
                'value'=>function ($data) {
                            switch ($data->operation) {
                                case 1:
                                case 2:
                                case 3:
                                    return "Entrada";
                                    break;
                                default:
                                    return "Salida";
                                    break;
                            }
                                // return $data->operation." ".$data->operation;
                        }
            ],
            // 'created',
            // 'created_by',
            // 'modified',
            // 'modified_by',

            // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
