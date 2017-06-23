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
            'id' => Yii::t('app', 'ID'),
            'id_lot' => Yii::t('app', 'Id Lot'),
            'quantity' => Yii::t('app', 'Quantity'),
            'id_client' => Yii::t('app', 'Id Client'),
            'weight' => Yii::t('app', 'Weight'),
            'code' => Yii::t('app', 'Code'),
            'type_chicken' => Yii::t('app', 'Type Chicken'),
            'cage' => Yii::t('app', 'Cage'),
            'id_truck' => Yii::t('app', 'Id Truck'),
            'id_driver' => Yii::t('app', 'Id Driver'),
            'created_by' => Yii::t('app', 'Created By'),
            'created' => Yii::t('app', 'Created'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'modified' => Yii::t('app', 'Modified'),
        ];
    }
}
