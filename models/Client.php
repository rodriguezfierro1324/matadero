<?php

namespace app\models;

use Yii;

use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
/**
 * This is the model class for table "client".
 *
 * @property integer $id
 * @property string $name
 * @property integer $id_status
 * @property string $phone
 * @property string $ci
 * @property string $contact_name
 * @property string $created
 * @property integer $created_by
 * @property string $modified
 * @property integer $modified_by
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
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
            [['name', 'id_status', 'phone', 'ci', 'contact_name'], 'required'],
            [['id_status', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name', 'phone'], 'string', 'max' => 50],
            [['ci'], 'string', 'max' => 15],
            [['contact_name'], 'string', 'max' => 150],
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
            'id'            => Yii::t('client', 'id'),
            'name'          => Yii::t('client', 'name'),
            'id_status'     => Yii::t('client', 'id_status'),
            'phone'         => Yii::t('client', 'phone'),
            'ci'            => Yii::t('client', 'ci'),
            'contact_name'  => Yii::t('client', 'contact_name'),
            'created'       => Yii::t('client', 'created'),
            'created_by'    => Yii::t('client', 'created_by'),
            'modified'      => Yii::t('client', 'modified'),
            'modified_by'   => Yii::t('client', 'modified_by'),
        ];
    }
    // public function beforeSave($insert) {
    //         // echo Yii::$app->user->identity->id;
    //         print_r(Yii::$app->user);
    //         die();
    //     if ($insert) {
    //         $this->created_by = \Yii::$app->user->identity->id;
    //     } else {
    //         $this->modified_by = \Yii::$app->user->identity->id;
    //     }
    //     return parent::beforeSave($insert);
    // }
    public function actionListStatus() {
        $status = ['1'=>'Activo', '2'=>'Inactivo'];  
        $this->render('_form', ['status'=>$status]);
    }
}
