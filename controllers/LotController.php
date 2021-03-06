<?php

namespace app\controllers;

use Yii;
use app\models\Lot;
use app\models\LotSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LotController implements the CRUD actions for Lot model.
 */
class LotController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Lot models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new LotSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Lot model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Lot model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id=0)
    {
        $model = new Lot();

        if($id!=0)
            $model->id_ticket_receipt=$id;

        if ($model->load(Yii::$app->request->post())) {
            // echo $model->quantity_chicken;die();
            $model->counter_1   = $model->quantity_chicken;
            $model->counter_2   = $model->quantity_chicken;
            $model->total       = $model->quantity_chicken;
            $model->quantity_discard = 0;
            if ($model->save()) {
                if(!Yii::$app->request->isAjax)
                    return $this->redirect(['view', 'id' => $model->id]);
                else
                {
                    Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                    return [
                        'success' => true,
                        'data'=>Yii::t('lot','success')
                    ];
                }
            }
        } 
        else 
        {
            if(!Yii::$app->request->isAjax)
            {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
            else
            {
                //Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
                return $this->renderAjax('_form_ajax', ['model' => $model]);
            }
            
        }
    }

    /**
     * Updates an existing Lot model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $hidden1 = Yii::$app->request->post('hidden1');
            // echo $model->counter_1;die();
            if($model->counter_1 > 0){
                $model->counter_2   = $model->counter_1;
                $model->total       = $model->counter_1;    
            }
           if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    /**
     * Deletes an existing Lot model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Lot model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Lot the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Lot::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
