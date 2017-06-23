<?php

namespace app\models;

use Yii;

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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_type_discard', 'weight', 'comments', 'id_status', 'created', 'created_by', 'modified', 'modified_by'], 'required'],
            [['id_type_discard', 'comments', 'id_status', 'created', 'created_by', 'modified', 'modified_by'], 'integer'],
            [['weight'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'id_type_discard' => Yii::t('app', 'Id Type Discard'),
            'weight' => Yii::t('app', 'Weight'),
            'comments' => Yii::t('app', 'Comments'),
            'id_status' => Yii::t('app', 'Id Status'),
            'created' => Yii::t('app', 'Created'),
            'created_by' => Yii::t('app', 'Created By'),
            'modified' => Yii::t('app', 'Modified'),
            'modified_by' => Yii::t('app', 'Modified By'),
        ];
    }
}
