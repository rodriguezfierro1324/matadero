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
            'id'            => Yii::t('user', 'id'),
            'name'          => Yii::t('user', 'name'),
            'last_name'     => Yii::t('user', 'last_name'),
            'ci'            => Yii::t('user', 'ci'),
            'username'      => Yii::t('user', 'username'),
            'pwd'           => Yii::t('user', 'pwd'),
            'id_status'     => Yii::t('user', 'id_status'),
            'created'       => Yii::t('user', 'created'),
            'created_by'    => Yii::t('user', 'created_by'),
            'modified'      => Yii::t('user', 'modified'),
            'modified_by'   => Yii::t('user', 'modified_by'),
        ];
    }
}
