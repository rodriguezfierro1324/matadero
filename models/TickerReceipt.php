<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ticker_receipt".
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
class TickerReceipt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ticker_receipt';
    }

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
            'id' => Yii::t('app', 'ID'),
            'id_provider' => Yii::t('app', 'Id Provider'),
            'id_truck' => Yii::t('app', 'Id Truck'),
            'id_driver' => Yii::t('app', 'Id Driver'),
            'quantity_chicken' => Yii::t('app', 'Quantity Chicken'),
            'gross_weight' => Yii::t('app', 'Gross Weight'),
            'tare_weight' => Yii::t('app', 'Tare Weight'),
            'net_weight' => Yii::t('app', 'Net Weight'),
            'quantity_cage' => Yii::t('app', 'Quantity Cage'),
            'code' => Yii::t('app', 'Code'),
            'created_by' => Yii::t('app', 'Created By'),
            'created' => Yii::t('app', 'Created'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'modified' => Yii::t('app', 'Modified'),
        ];
    }
}
