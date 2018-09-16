<?php

namespace app\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
/**
 * This is the model class for table "type_chicken".
 *
 * @property integer $id
 * @property string $name
 * @property string $comments
 * @property integer $created_by
 * @property string $created
 * @property integer $modified_by
 * @property string $modified
 */
class TypeChicken extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_chicken';
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
            [['name'], 'required'],
            [['created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['comments'], 'string', 'max' => 300],
            [['created_by', 'modified_by'], 'default','value' => Yii::$app->user->identity->id ],
            //[['id_status'], 'default', 'value' => 1] //siempre ON
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('type-chicken', 'id'),
            'name'          => Yii::t('type-chicken', 'name'),
            'comments'      => Yii::t('type-chicken', 'comments'),
            'created'       => Yii::t('type-chicken', 'created'),
            'created_by'    => Yii::t('type-chicken', 'created_by'),
            'modified'      => Yii::t('type-chicken', 'modified'),
            'modified_by'   => Yii::t('type-chicken', 'modified_by'),
        ];
    }
    public function getModifiedby()
    {
        return $this->hasOne(User::className(),['id'=>'modified_by']);
    }
    public function getCreatedby()
    {
        return $this->hasOne(User::className(),['id'=>'created_by']);
    }
}
