<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_status
 * @property string $phone
 * @property string $ci
 * @property string $contact_name
 * @property string $created
 * @property integer $created_by
 * @property string $modified
 * @property integer $modified_by
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'id_status', 'phone', 'ci', 'contact_name', 'created', 'created_by', 'modified', 'modified_by'], 'required'],
            [['id_status', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name', 'phone'], 'string', 'max' => 50],
            [['ci'], 'string', 'max' => 15],
            [['contact_name'], 'string', 'max' => 150],
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
            'id_status' => Yii::t('app', 'Id Status'),
            'phone' => Yii::t('app', 'Phone'),
            'ci' => Yii::t('app', 'Ci'),
            'contact_name' => Yii::t('app', 'Contact Name'),
            'created' => Yii::t('app', 'Created'),
            'created_by' => Yii::t('app', 'Created By'),
            'modified' => Yii::t('app', 'Modified'),
            'modified_by' => Yii::t('app', 'Modified By'),
        ];
    }
}
