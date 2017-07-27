<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
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
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created',
                'updatedAtAttribute' => 'modified',
                'value' => new Expression('NOW()'),
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'last_name', 'ci', 'phone', 'id_provider'], 'required'],
            [['id_provider', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name', 'phone'], 'string', 'max' => 50],
            [['last_name'], 'string', 'max' => 150],
            [['ci'], 'string', 'max' => 20],
            [['created_by', 'modified_by'], 'default','value' => Yii::$app->user->identity->id ],
            [['id_status'], 'default', 'value' => 1] //siempre ON
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
            'id_status'     => Yii::t('driver', 'id_status'),
            'id_provider'   => Yii::t('driver', 'id_provider'),
            'created_by'    => Yii::t('driver', 'created_by'),
            'created'       => Yii::t('driver', 'created'),
            'modified_by'   => Yii::t('driver', 'modified_by'),
            'modified'      => Yii::t('driver', 'modified'),
        ];
    }
    public function getNameComplete()
    {
        return $this->name.', '.$this->last_name;
    }
    public function getDrivers()
    {
        return Driver::find()->andWhere(['!=', 'id_status', 0])->asArray()->all();
    }
}
