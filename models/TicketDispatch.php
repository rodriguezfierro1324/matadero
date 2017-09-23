<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\ArrayHelper;
/**
 * This is the model class for table "ticket_dispatch".
 *
 * @property integer $id
 * @property integer $id_lot
 * @property integer $quantity
 * @property integer $id_client
 * @property double $weight
 * @property string $code
 * @property integer $type_chicken
 * @property integer $cage
 * @property integer $id_truck
 * @property integer $id_driver
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 */
class TicketDispatch extends \yii\db\ActiveRecord
{
    const STATUS_ENABLE=1;//estado activo
    const STATUS_DISABLE=2;//estado desactivado
    const STATUS_DELETED=0;//eliminido
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket_dispatch';
    }
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created',
                'updatedAtAttribute' => 'modified',
                'value' => new Expression('NOW()'),
            ],
        ];
    }
    /**
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_lot', 'quantity', 'id_client', 'weight', 'code', 'type_chicken', 'cage', 'id_truck', 'id_driver'], 'required'],
            [['id_lot', 'quantity', 'id_client', 'type_chicken', 'cage', 'id_truck', 'id_driver', 'created_by', 'modified_by'], 'integer'],
            [['weight'], 'number'],
            [['created', 'modified'], 'safe'],
            [['code'], 'string', 'max' => 12],
            [['created_by', 'modified_by'], 'default','value' => Yii::$app->user->identity->id ],
            //[['id_status'], 'default', 'value' => 1] //siempre ON
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('ticket-dispatch', 'id'),
            'id_lot'        => Yii::t('ticket-dispatch', 'id_lot'),
            'quantity'      => Yii::t('ticket-dispatch', 'quantity'),
            'id_client'     => Yii::t('ticket-dispatch', 'id_client'),
            'weight'        => Yii::t('ticket-dispatch', 'weight'),
            'code'          => Yii::t('ticket-dispatch', 'code'),
            'type_chicken'  => Yii::t('ticket-dispatch', 'type_chicken'),
            'cage'          => Yii::t('ticket-dispatch', 'cage'),
            'id_truck'      => Yii::t('ticket-dispatch', 'id_truck'),
            'id_driver'     => Yii::t('ticket-dispatch', 'id_driver'),
            'created_by'    => Yii::t('ticket-dispatch', 'created_by'),
            'created'       => Yii::t('ticket-dispatch', 'created'),
            'modified_by'   => Yii::t('ticket-dispatch', 'modified_by'),
            'modified'      => Yii::t('ticket-dispatch', 'modified'),
        ];
    }
    public function getCode()
    {
        return TicketDispatch::find()->where(['id_status'=>TicketDispatch::STATUS_ENABLE])->count();
    }
    public function getModifiedby()
    {
        return $this->hasOne(User::className(),['id'=>'modified_by']);
    }
    public function getCreatedby()
    {
        return $this->hasOne(User::className(),['id'=>'created_by']);
    }
    public function getTruck()
    {
        return $this->hasOne(Truck::className(),['id'=>'id_truck']);
    }
    public function getDriver()
    {
        return $this->hasOne(Driver::className(),['id'=>'id_driver']);
    }
    public function getLot()
    {
        return $this->hasOne(Lot::className(),['id'=>'id_lot']);
    }
    public function getTypechicken()
    {
        return $this->hasOne(TypeChicken::className(),['id'=>'type_chicken']);
    }
    public function getClient()
    {
        return $this->hasOne(Client::className(),['id'=>'id_client']);
    }
    public function getLots4Dropdwon()
    {
        return ArrayHelper::map(Lot::find()->where(['id_status'=>Lot::STATUS_ENABLE])->all(), 'id', 'FullLot');
    }
}
