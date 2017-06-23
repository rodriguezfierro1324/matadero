<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cage".
 *
 * @property integer $id
 * @property integer $id_status
 * @property integer $quantity
 * @property integer $id_provider
 * @property integer $operation
 * @property string $created
 * @property integer $created_by
 * @property string $modified
 * @property integer $modified_by
 */
class Cage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_status', 'quantity', 'id_provider', 'operation', 'created', 'created_by', 'modified', 'modified_by'], 'required'],
            [['id_status', 'quantity', 'id_provider', 'operation', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_status' => Yii::t('app', 'Id Status'),
            'quantity' => Yii::t('app', 'Quantity'),
            'id_provider' => Yii::t('app', 'Id Provider'),
            'operation' => Yii::t('app', 'Operation'),
            'created' => Yii::t('app', 'Created'),
            'created_by' => Yii::t('app', 'Created By'),
            'modified' => Yii::t('app', 'Modified'),
            'modified_by' => Yii::t('app', 'Modified By'),
        ];
    }
}
