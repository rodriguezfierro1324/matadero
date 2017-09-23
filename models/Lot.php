<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
/**
 * This is the model class for table "lot".
 *
 * @property integer $id
 * @property string $code
 * @property integer $id_ticket_receipt
 * @property integer $id_pigment
 * @property string $comments
 * @property integer $id_status
 * @property integer $quantity_chicken
 * @property integer $counter_1
 * @property integer $counter_2
 * @property integer $total
 * @property integer $type_chicken
 * @property integer $quantity_discard
 * @property string $created
 * @property integer $created_by
 * @property string $modified
 * @property integer $modified_by
 */
class Lot extends \yii\db\ActiveRecord
{
    const STATUS_DELETED=0;//eliminido
    const STATUS_ENABLE=1;//estado activo
    const STATUS_DISABLE=2;//estado desactivado
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lot';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_ticket_receipt', 'id_pigment', 'quantity_chicken', 'type_chicken', 'quantity_discard'], 'required'],
            [['id_ticket_receipt', 'id_pigment', 'id_status', 'quantity_chicken', 'counter_1', 'counter_2', 'total', 'type_chicken', 'quantity_discard', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['code'], 'string', 'max' => 12],
            [['comments'], 'string', 'max' => 150],
            [['created_by', 'modified_by'], 'default','value' => Yii::$app->user->identity->id ],
            [['counter_1', 'counter_2','total'],'default','value'=>0],
            [['id_status'], 'default', 'value' => 1] //siempre ON
        ];
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
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'                => Yii::t('lot', 'id'),
            'code'              => Yii::t('lot', 'code'),
            'id_ticket_receipt' => Yii::t('lot', 'id_ticket_receipt'),
            'id_pigment'        => Yii::t('lot', 'id_pigment'),
            'comments'          => Yii::t('lot', 'comments'),
            'id_status'         => Yii::t('lot', 'id_status'),
            'quantity_chicken'  => Yii::t('lot', 'quantity_chicken'),
            'counter_1'         => Yii::t('lot', 'counter_1'),
            'counter_2'         => Yii::t('lot', 'counter_2'),
            'total'             => Yii::t('lot', 'total'),
            'type_chicken'      => Yii::t('lot', 'type_chicken'),
            'quantity_discard'  => Yii::t('lot', 'quantity_discard'),
            'created'           => Yii::t('lot', 'created'),
            'created_by'        => Yii::t('lot', 'created_by'),
            'modified'          => Yii::t('lot', 'modified'),
            'modified_by'       => Yii::t('lot', 'modified_by'),
        ];
    }
    public function getCode()
    {
        //TODO: revisar stados para conteo
        $total=Lot::find()->where(['id_status'=>Lot::STATUS_ENABLE])->count();
        $total++;
        $this->code=sprintf("LT-%06d", $total);
    }
    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        $this->getCode();
        return true;
    }

    public function getticketR()
    {
        return $this->hasOne(TicketReceipt::className(),['id'=>'id_ticket_receipt']);
    }
    public function getpigment()
    {
        return $this->hasOne(Pigment::className(),['id'=>'id_pigment']);
    }
    public function gettypechicken()
    {
        return $this->hasOne(TypeChicken::className(),['id'=>'type_chicken']);
    }
    public function getModifiedby()
    {
        return $this->hasOne(User::className(),['id'=>'modified_by']);
    }
    public function getCreatedby()
    {
        return $this->hasOne(User::className(),['id'=>'created_by']);
    }
    public function getEstado()
    {
        return [ 
            '1'  => 'En Proceso',
            '2'  => 'Finalizado',
        ];
    }
    public function getFullLot()
    {
        return $this->code.' - '.$this->ticketR->provider->name.' ['.$this->pigment->name.' - '.$this->quantity_chicken.']';
    }
    
}
