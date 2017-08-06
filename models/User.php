<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\helpers\Html;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $name
 * @property string $last_name
 * @property string $ci
 * @property string $username
 * @property string $pwd
 * @property integer $id_status
 * @property string $created
 * @property integer $created_by
 * @property string $modified
 * @property integer $modified_by
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
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
            [['name', 'last_name', 'ci', 'username', 'pwd', 'id_status'], 'required'],
            [['id_status', 'created_by', 'modified_by'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['last_name'], 'string', 'max' => 150],
            [['ci'], 'string', 'max' => 10],
            [['username'], 'string', 'max' => 20],
            [['pwd'], 'string', 'max' => 250],
            [['username'], 'unique'],
            [['created_by', 'modified_by'], 'default','value' => Yii::$app->user->identity->id ],
            [['id_status'], 'default', 'value' => 1] //siempre ON
        ];
    }

    /**
     * Finds an identity by the given ID.
     *
     * @param string|int $id the ID to be looked for
     * @return IdentityInterface|null the identity object that matches the given ID.
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * Finds an identity by the given token.
     *
     * @param string $token the token to be looked for
     * @return IdentityInterface|null the identity object that matches the given token.
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * @return int|string current user ID
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string current user auth key
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @param string $authKey
     * @return bool if auth key is valid for current user
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'            => Yii::t('user', 'id'),
            'name'          => Yii::t('user', 'name'),
            'last_name'     => Yii::t('user', 'last_name'),
            'ci'            => Yii::t('user', 'ci'),
            'username'      => Yii::t('user', 'username'),
            'pwd'           => Yii::t('user', 'pwd'),
            'id_status'     => Yii::t('user', 'id_status'),
            'created'       => Yii::t('user', 'created'),
            'created_by'    => Yii::t('user', 'created_by'),
            'modified'      => Yii::t('user', 'modified'),
            'modified_by'   => Yii::t('user', 'modified_by'),
        ];
    }

    public static function findByUsername($userName)
    {
        return static::findOne(['username'=>$userName]);
    }

    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->pwd = Yii::$app->getSecurity()->generatePasswordHash($this->pwd);
                $this->auth_key = \Yii::$app->security->generateRandomString();
            }
            return true;
        }
        return false;
    }

    public function validatePassword($password)
    {
        return (Yii::$app->getSecurity()->validatePassword($password, $this->pwd));
    }

    public function getNameFull()
    {
        return $this->userName;
    }
    public function getMenuItems()
    {
         
        return [
            ['label' => 'Tickets', 
                'items'=>[
                    ['label'=>Yii::t('ticket-receipt','ticket-receipts'), 'url' => ['/ticket-receipt/index']],
                    ['label'=>Yii::t('ticket-receipt','create'), 'url' => ['/ticket-receipt/create']],
                    ['label'=>'','options'=>['class'=>'divider']],
                    ['label'=>Yii::t('ticket-dispatch','type-dispatchs'), 'url' => ['/ticket-dispatch/index']],
                    ['label'=>Yii::t('ticket-dispatch','create'), 'url' => ['/ticket-dispatch/create']],                    
                ]],
            ['label' => Yii::t('lot','lots'),
            'items'=>[
                    ['label'=>Yii::t('lot','lots'), 'url' => ['/lot/index']],
                    ['label'=>Yii::t('lot','create'), 'url' => ['/lot/create']],
                    ['label'=>'','options'=>['class'=>'divider']],
                    ['label'=>Yii::t('pigment','create'), 'url' => ['/pigment/create']],

                ]],
            ['label' => Yii::t('cage','cages'), 
                'items'=>[
                    ['label'=>Yii::t('cage','cages'), 'url' => ['/cage/index']],
                    ['label'=>Yii::t('cage','create'), 'url' => ['/cage/create']]
                ]],                
            ['label' => Yii::t('user','users'), 
                'items'=>[
                    ['label'=>Yii::t('user','users'), 'url' => ['/user/index']],
                    ['label'=>Yii::t('user','create'), 'url' => ['/user/create']]
                ]],
            ['label' => Yii::t('client','client'),
                'items'=>[
                    ['label'=>Yii::t('client','clients'), 'url' => ['/client/index']],
                    ['label'=>Yii::t('client','create'), 'url' => ['/client/create']]
                ]],
            ['label' => Yii::t('discard','discard'),
                'items'=>[
                    ['label'=>Yii::t('discard','discards'), 'url' => ['/discard/index']],
                    ['label'=>Yii::t('discard','create'), 'url' => ['/discard/create']]
                ]],
            ['label' => Yii::t('truck','truck'),
                'items'=>[
                    ['label'=>Yii::t('driver','drivers'), 'url' => ['/driver/index']],
                    ['label'=>Yii::t('driver','create'), 'url' => ['/driver/create']],
                    ['label'=>'','options'=>['class'=>'divider']],
                    ['label'=>Yii::t('truck','trucks'), 'url' => ['/truck/index']],
                    ['label'=>Yii::t('truck','create'), 'url' => ['/truck/create']]
                ]],
            ['label' => Yii::t('provider','provider'),
                'items'=>[
                    ['label'=>Yii::t('provider','providers'), 'url' => ['/provider/index']],
                    ['label'=>Yii::t('provider','create'), 'url' => ['/provider/create']]
                ]],            
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ];
    }
}
