<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\models\Cage;
use yii\bootstrap\Tabs;
use app\models\TicketReceipt;
use app\models\TicketDispatch;

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

    <?php 
    $detaills=DetailView::widget([
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
            'observaciones',
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
    ]) ;

    /*********************************canastillos*************************************************/
    unset($dataProvider);
    $dataProvider = new ActiveDataProvider([
        'query' => Cage::find()->where(['id_provider'=>$model->id]),
    ]);
    $searchModel = "";
    $canastillo=GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
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
                        }
            ],
            'quantity',
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
                        }
            ],
        ],
    ]);
    /******************************************************************************************************************************************************/
    //pollos
    $dataProvider = new ActiveDataProvider([
        'query' => TicketReceipt::find()->where(['id_provider'=>$model->id]),
    ]);
    
    $preceipt=GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'id'=>'grid-tickets',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'code',
            [
                'attribute'=>'id_truck',
                'value'=>'truck.licence_plate'
            ],
            [
                'attribute'=>'id_driver',
                'value'=>'driver.NameComplete'
            ],
            // 'quantity_chicken',
            [
                'attribute'=>'quantity_chicken',
                'contentOptions' => ['class' => 'text-right']
            ],
             'gross_weight',
             'tare_weight',
             'net_weight',
            // 'quantity_cage',
            // 'code',
            // 'created_by',
            'created',
            // 'modified_by',
            // 'modified',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 

     $dataProvider = new ActiveDataProvider([
        'query' => TicketDispatch::find()->where(['id_provider'=>$model->id]),
    ]);
    
    $pdispatch=GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'id'=>'grid-tickets',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'code',
            [
                'attribute'=>'id_truck',
                'value'=>'truck.licence_plate'
            ],
            [
                'attribute'=>'id_driver',
                'value'=>'driver.NameComplete'
            ],
            [
                'attribute'=>'id_client',
                'value'=>'client.name'
            ],
            // 'quantity_chicken',
            [
                'attribute'=>'quantity',
                'contentOptions' => ['class' => 'text-right']
            ],
            'created'

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
    ?>
    <?=Tabs::widget([
    'items' => [
        [
            'label' => 'Detalle de proveedor',
            'content' => $detaills,
            'active' => true
        ],
        [
            'label' => 'Recepción de pollo',
            'content' => $preceipt,
            'options' => ['id' => 'myveryownID'],
        ],
        [
            'label'=>'Despacho de pollo',
            'content'=>$pdispatch
        ],
        [
            'label' => 'Canastillos',
            'content' => $canastillo,
        ],

    ]])?>

    
    
    <?php
    /* Get all the articles for one author by using the author relation define in Articles */
    
    ?>
    <? ?>
</div>
