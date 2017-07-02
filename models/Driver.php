<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $ci
 * @property string $phone
 * @property integer $id_provider
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'last_name', 'ci', 'phone', 'id_provider', 'created_by', 'created', 'modified_by', 'modified'], 'required'],
            [['id_provider', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name', 'phone'], 'string', 'max' => 50],
            [['last_name'], 'string', 'max' => 150],
            [['ci'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('driver', 'id'),
            'name'          => Yii::t('driver', 'name'),
            'last_name'     => Yii::t('driver', 'last_name'),
            'ci'            => Yii::t('driver', 'ci'),
            'phone'         => Yii::t('driver', 'phone'),
            'id_provider'   => Yii::t('driver', 'id_provider'),
            'created_by'    => Yii::t('driver', 'created_by'),
            'created'       => Yii::t('driver', 'created'),
            'modified_by'   => Yii::t('driver', 'modified_by'),
            'modified'      => Yii::t('driver', 'modified'),
        ];
    }
}
