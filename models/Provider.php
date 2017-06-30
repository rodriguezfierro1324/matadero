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
            'id'            => Yii::t('provider', 'id'),
            'name'          => Yii::t('provider', 'name'),
            'phone'         => Yii::t('provider', 'phone'),
            'contact_name'  => Yii::t('provider', 'contact_name'),
            'email'         => Yii::t('provider', 'email'),
            'ci'            => Yii::t('provider', 'ci'),
            'quantity_cage' => Yii::t('provider', 'quantity_cage'),
            'is_cage_own'   => Yii::t('provider', 'is_cage_own'),
            'created'       => Yii::t('provider', 'created'),
            'created_by'    => Yii::t('provider', 'created_by'),
            'modified'      => Yii::t('provider', 'modified'),
            'modified_by'   => Yii::t('provider', 'modified_by'),
        ];
    }
}
