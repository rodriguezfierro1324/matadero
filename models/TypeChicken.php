<?php

namespace app\models;

use Yii;

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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'comments', 'created_by', 'created', 'modified_by', 'modified'], 'required'],
            [['created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['comments'], 'string', 'max' => 300],
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
            'comments' => Yii::t('app', 'Comments'),
            'created_by' => Yii::t('app', 'Created By'),
            'created' => Yii::t('app', 'Created'),
            'modified_by' => Yii::t('app', 'Modified By'),
            'modified' => Yii::t('app', 'Modified'),
        ];
    }
}
