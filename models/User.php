<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $ci
 * @property string $username
 * @property string $pwd
 * @property integer $id_status
 * @property string $created
 * @property integer $created_by
 * @property string $modified
 * @property integer $modified_by
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'last_name', 'ci', 'username', 'pwd', 'id_status', 'created', 'created_by', 'modified', 'modified_by'], 'required'],
            [['id_status', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['last_name'], 'string', 'max' => 150],
            [['ci'], 'string', 'max' => 10],
            [['username'], 'string', 'max' => 20],
            [['pwd'], 'string', 'max' => 250],
            [['username'], 'unique'],
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
            'username' => Yii::t('app', 'Username'),
            'pwd' => Yii::t('app', 'Pwd'),
            'id_status' => Yii::t('app', 'Id Status'),
            'created' => Yii::t('app', 'Created'),
            'created_by' => Yii::t('app', 'Created By'),
            'modified' => Yii::t('app', 'Modified'),
            'modified_by' => Yii::t('app', 'Modified By'),
        ];
    }
}
