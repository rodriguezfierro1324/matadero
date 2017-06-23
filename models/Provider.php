<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "provider".
 *
 * @property integer $id
 * @property string $name
 * @property string $phone
 * @property string $contact_name
 * @property integer $email
 * @property string $ci
 * @property integer $quantity_cage
 * @property integer $is_cage_own
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 */
class Provider extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'provider';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'contact_name', 'email', 'ci', 'quantity_cage', 'is_cage_own', 'created_by', 'created', 'modified_by', 'modified'], 'required'],
            [['email', 'quantity_cage', 'is_cage_own', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name'], 'string', 'max' => 150],
            [['phone'], 'string', 'max' => 50],
            [['contact_name'], 'string', 'max' => 250],
            [['ci'], 'string', 'max' => 15],
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
            'phone' => Yii::t('app', 'Phone'),
            'contact_name' => Yii::t('app', 'Contact Name'),
            'email' => Yii::t('app', 'Email'),
            'ci' => Yii::t('app', 'Ci'),
            'quantity_cage' => Yii::t('app', 'Quantity Cage'),
            'is_cage_own' => Yii::t('app', 'Is Cage Own'),
            'created_by' => Yii::t('app', 'Created By'),
            'created' => Yii::t('app', 'Created'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'modified' => Yii::t('app', 'Modified'),
        ];
    }
}
