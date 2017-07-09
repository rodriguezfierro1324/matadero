<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
/**
 * This is the model class for table "discard".
 *
 * @property integer $id
 * @property integer $id_type_discard
 * @property double $weight
 * @property integer $comments
 * @property integer $id_status
 * @property integer $created
 * @property integer $created_by
 * @property integer $modified
 * @property integer $modified_by
 */
class Discard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'discard';
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
            [['id_type_discard', 'weight', 'comments', 'id_status'], 'required'],
            [['id_type_discard', 'id_status', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['weight'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'                => Yii::t('discard', 'id'),
            'id_type_discard'   => Yii::t('discard', 'id_type_discard'),
            'weight'            => Yii::t('discard', 'weight'),
            'comments'          => Yii::t('discard', 'comments'),
            'id_status'         => Yii::t('discard', 'id_status'),
            'created'           => Yii::t('discard', 'created'),
            'created_by'        => Yii::t('discard', 'created_by'),
            'modified'          => Yii::t('discard', 'modified'),
            'modified_by'       => Yii::t('discard', 'modified_by'),
        ];
    }
}
