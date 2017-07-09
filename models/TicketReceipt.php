<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
/**
 * This is the model class for table "ticket_receipt".
 *
 * @property integer $id
 * @property integer $id_provider
 * @property integer $id_truck
 * @property integer $id_driver
 * @property integer $quantity_chicken
 * @property double $gross_weight
 * @property double $tare_weight
 * @property double $net_weight
 * @property integer $quantity_cage
 * @property string $code
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 */
class TicketReceipt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket_receipt';
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
            [['id_provider', 'id_truck', 'id_driver', 'quantity_chicken', 'gross_weight', 'tare_weight', 'net_weight', 'quantity_cage', 'code', 'created_by', 'created', 'modified_by', 'modified'], 'required'],
            [['id_provider', 'id_truck', 'id_driver', 'quantity_chicken', 'quantity_cage', 'created_by', 'modified_by'], 'integer'],
            [['gross_weight', 'tare_weight', 'net_weight'], 'number'],
            [['created', 'modified'], 'safe'],
            [['code'], 'string', 'max' => 12],
        ];
    }
    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'                => Yii::t('ticket-receipt', 'id'),
            'id_provider'       => Yii::t('ticket-receipt', 'id_provider'),
            'id_truck'          => Yii::t('ticket-receipt', 'id_truck'),
            'id_driver'         => Yii::t('ticket-receipt', 'id_driver'),
            'quantity_chicken'  => Yii::t('ticket-receipt', 'quantity_chicken'),
            'gross_weight'      => Yii::t('ticket-receipt', 'gross_weight'),
            'tare_weight'       => Yii::t('ticket-receipt', 'tare_weight'),
            'net_weight'        => Yii::t('ticket-receipt', 'net_weight'),
            'quantity_cage'     => Yii::t('ticket-receipt', 'quantity_cage'),
            'code'              => Yii::t('ticket-receipt', 'code'),
            'created_by'        => Yii::t('ticket-receipt', 'created_by'),
            'created'           => Yii::t('ticket-receipt', 'created'),
            'modified_by'       => Yii::t('ticket-receipt', 'modified_by'),
            'modified'          => Yii::t('ticket-receipt', 'modified'),
        ];
    }
}
