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
            [['code', 'id_ticket_receipt', 'id_pigment', 'id_status', 'quantity_chicken', 'counter_1', 'counter_2', 'total', 'type_chicken', 'quantity_discard'], 'required'],
            [['id_ticket_receipt', 'id_pigment', 'id_status', 'quantity_chicken', 'counter_1', 'counter_2', 'total', 'type_chicken', 'quantity_discard', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['code'], 'string', 'max' => 12],
            [['comments'], 'string', 'max' => 150],
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
}
