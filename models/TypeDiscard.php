<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_discard".
 *
 * @property integer $id
 * @property string $name
 * @property string $created
 * @property integer $created_by
 * @property string $modified
 * @property integer $modified_by
 */
class TypeDiscard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_discard';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'created', 'created_by', 'modified', 'modified_by'], 'required'],
            [['created', 'modified'], 'safe'],
            [['created_by', 'modified_by'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('type-discard', 'id'),
            'name'          => Yii::t('type-discard', 'name'),
            'created'       => Yii::t('type-discard', 'created'),
            'created_by'    => Yii::t('type-discard', 'created_by'),
            'modified'      => Yii::t('type-discard', 'modified'),
            'modified_by'   => Yii::t('type-discard', 'modified_by'),
        ];
    }
}
