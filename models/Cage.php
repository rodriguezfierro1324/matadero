<?php

namespace app\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
/**
 * This is the model class for table "cage".
 *
 * @property integer $id
 * @property integer $id_status
 * @property integer $quantity
 * @property integer $id_provider
 * @property integer $operation
 * @property string $created
 * @property integer $created_by
 * @property string $modified
 * @property integer $modified_by
 */
class Cage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cage';
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
            [['id_status', 'quantity', 'id_provider', 'operation'], 'required'],
            [['id_status', 'quantity', 'id_provider', 'operation', 'created_by', 'modified_by'], 'integer'],
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
            'id'            => Yii::t('cage', 'id'),
            'id_status'     => Yii::t('cage', 'id_status'),
            'quantity'      => Yii::t('cage', 'quantity'),
            'id_provider'   => Yii::t('cage', 'id_provider'),
            'operation'     => Yii::t('cage', 'operation'),
            'created'       => Yii::t('cage', 'created'),
            'created_by'    => Yii::t('cage', 'created_by'),
            'modified'      => Yii::t('cage', 'modified'),
            'modified_by'   => Yii::t('cage', 'modified_by'),
        ];
    }
    public function getProvider($id_provider)
    {
        $provider = Provider::find()->where(['id' => $id_provider])->One();
        return $provider->name;
    }
}
