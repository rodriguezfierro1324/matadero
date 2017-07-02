<?php

namespace app\models;

use Yii;

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
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticket_dispatch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_lot', 'quantity', 'id_client', 'weight', 'code', 'type_chicken', 'cage', 'id_truck', 'id_driver', 'created_by', 'created', 'modified_by', 'modified'], 'required'],
            [['id_lot', 'quantity', 'id_client', 'type_chicken', 'cage', 'id_truck', 'id_driver', 'created_by', 'modified_by'], 'integer'],
            [['weight'], 'number'],
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
            'id'            => Yii::t('ticket_dispatch', 'id'),
            'id_lot'        => Yii::t('ticket_dispatch', 'id_lot'),
            'quantity'      => Yii::t('ticket_dispatch', 'quantity'),
            'id_client'     => Yii::t('ticket_dispatch', 'id_client'),
            'weight'        => Yii::t('ticket_dispatch', 'weight'),
            'code'          => Yii::t('ticket_dispatch', 'code'),
            'type_chicken'  => Yii::t('ticket_dispatch', 'type_chicken'),
            'cage'          => Yii::t('ticket_dispatch', 'cage'),
            'id_truck'      => Yii::t('ticket_dispatch', 'id_truck'),
            'id_driver'     => Yii::t('ticket_dispatch', 'id_driver'),
            'created_by'    => Yii::t('ticket_dispatch', 'created_by'),
            'created'       => Yii::t('ticket_dispatch', 'created'),
            'modified_by'   => Yii::t('ticket_dispatch', 'modified_by'),
            'modified'      => Yii::t('ticket_dispatch', 'modified'),
        ];
    }
}
