<?php

namespace app\models;

use Yii;

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
            [['code', 'id_ticket_receipt', 'id_pigment', 'id_status', 'quantity_chicken', 'counter_1', 'counter_2', 'total', 'type_chicken', 'quantity_discard', 'created', 'created_by', 'modified', 'modified_by'], 'required'],
            [['id_ticket_receipt', 'id_pigment', 'id_status', 'quantity_chicken', 'counter_1', 'counter_2', 'total', 'type_chicken', 'quantity_discard', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['code'], 'string', 'max' => 12],
            [['comments'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'code' => Yii::t('app', 'Code'),
            'id_ticket_receipt' => Yii::t('app', 'Id Ticket Receipt'),
            'id_pigment' => Yii::t('app', 'Id Pigment'),
            'comments' => Yii::t('app', 'Comments'),
            'id_status' => Yii::t('app', 'Id Status'),
            'quantity_chicken' => Yii::t('app', 'Quantity Chicken'),
            'counter_1' => Yii::t('app', 'Counter 1'),
            'counter_2' => Yii::t('app', 'Counter 2'),
            'total' => Yii::t('app', 'Total'),
            'type_chicken' => Yii::t('app', 'Type Chicken'),
            'quantity_discard' => Yii::t('app', 'Quantity Discard'),
            'created' => Yii::t('app', 'Created'),
            'created_by' => Yii::t('app', 'Created By'),
            'modified' => Yii::t('app', 'Modified'),
            'modified_by' => Yii::t('app', 'Modified By'),
        ];
    }
}
