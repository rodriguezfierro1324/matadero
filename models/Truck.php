<?php

namespace app\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

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
            [['id_driver', 'licence_plate'], 'required'],
            [['id_driver', 'created_by', 'modified_by'], 'integer'],
            [['licence_plate'], 'string'],
            [['created', 'modified'], 'safe'],
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
            'id'            => Yii::t('truck', 'id'),
            'id_driver'     => Yii::t('truck', 'id_driver'),
            'licence_plate' => Yii::t('truck', 'licence_plate'),
            'id_status'     => Yii::t('truck', 'id_status'),
            'created'       => Yii::t('truck', 'created'),
            'created_by'    => Yii::t('truck', 'created_by'),
            'modified'      => Yii::t('truck', 'modified'),
            'modified_by'   => Yii::t('truck', 'modified_by'),
        
        ];
    }

    public function getTrucks()
    {
        return Truck::find()->andWhere(['!=', 'id_status', 0])->asArray()->all();
    }
    public function getModifiedby()
    {
        return $this->hasOne(User::className(),['id'=>'modified_by']);
    }
    public function getCreatedby()
    {
        return $this->hasOne(User::className(),['id'=>'created_by']);
    }
    public function getDriver()
    {
        return $this->hasOne(Driver::className(),['id'=>'id_driver']);
    }
}
