<?php

use yii\jui\Dialog;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('user', 'users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('user', 'create'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'last_name',
            'ci',
            'username',
            // 'pwd',
            // 'id_status',
            // 'created',
            // 'created_by',
            // 'modified',
            // 'modified_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
    echo "<pre>";    
    $user_id=Yii::$app->user->id;
    echo $user_id;
    print_r(Yii::$app->authManager->getUserIdsByRole('admin'));
    print_r(Yii::$app->authManager->getRolesByUser($user_id));
    //print_r(Yii::$app->authManager->permissions);

    //var_dump(Yii::$app->user->can("createUser"));
    echo "</pre>";
    ?>
</div>
<?php
Dialog::begin([
    'clientOptions' => [
        'modal' => true,
                'autoOpen' => false,
                'title' => 'Dialog',
                'width' => '400px',
                'buttons' => [
                        ['text' => 'Test', 'click' => 'js:function(){alert("test")}'],
                ],
    ],
    'id' => 'testDialog',
]);

echo '<p>This is a dialog</p>';

Dialog::end();
?>