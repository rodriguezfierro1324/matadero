<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
/**
 * This is the model class for table "pigment".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $destination
 * @property integer $id_status
 * @property string $created
 * @property integer $created_by
 * @property string $modified
 * @property integer $modified_by
 */
class Pigment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pigment';
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
            [['name', 'description', 'destination', 'id_status'], 'required'],
            [['id_status', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name', 'destination'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('pigment', 'id'),
            'name'          => Yii::t('pigment', 'name'),
            'description'   => Yii::t('pigment', 'description'),
            'destination'   => Yii::t('pigment', 'destination'),
            'id_status'     => Yii::t('pigment', 'id_status'),
            'created'       => Yii::t('pigment', 'created'),
            'created_by'    => Yii::t('pigment', 'created_by'),
            'modified'      => Yii::t('pigment', 'modified'),
            'modified_by'   => Yii::t('pigment', 'modified_by'),
        ];
    }
}
