<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "truck".
 *
 * @property integer $id
 * @property integer $id_driver
 * @property string $licence_plate
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 */
class Truck extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'truck';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_driver', 'licence_plate', 'created_by', 'created', 'modified_by', 'modified'], 'required'],
            [['id_driver', 'created_by', 'modified_by'], 'integer'],
            [['licence_plate'], 'string'],
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
            'id_driver' => Yii::t('app', 'Id Driver'),
            'licence_plate' => Yii::t('app', 'Licence Plate'),
            'created_by' => Yii::t('app', 'Created By'),
            'created' => Yii::t('app', 'Created'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'modified' => Yii::t('app', 'Modified'),
        ];
    }
}
