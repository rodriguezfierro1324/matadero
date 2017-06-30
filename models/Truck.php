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
            'id'            => Yii::t('truck', 'id'),
            'id_driver'     => Yii::t('truck', 'id_driver'),
            'licence_plate' => Yii::t('truck', 'licence_plate'),
            'created'       => Yii::t('truck', 'created'),
            'created_by'    => Yii::t('truck', 'created_by'),
            'modified'      => Yii::t('truck', 'modified'),
            'modified_by'   => Yii::t('truck', 'modified_by'),
        
        ];
    }
}
