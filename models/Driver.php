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
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'ci' => Yii::t('app', 'Ci'),
            'phone' => Yii::t('app', 'Phone'),
            'id_provider' => Yii::t('app', 'Id Provider'),
            'created_by' => Yii::t('app', 'Created By'),
            'created' => Yii::t('app', 'Created'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'modified' => Yii::t('app', 'Modified'),
        ];
    }
}
