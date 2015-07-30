<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property string $login
 * @property string $password
 * @property string $email
 * @property integer $enable
 * @property string $name
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $confirmPassword;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password', 'confirmPassword', 'email'], 'required'],
            [['enable'], 'integer'],
            [['login'], 'string', 'max' => 5],
            [['password'], 'string', 'max' => 255, 'min' => 8],
            [['email'], 'string', 'max' => 100],
            [['name'], 'string'],
            ['login', 'validateLogin'],
            ['email', 'validateEmail'],
            [['confirmPassword'], 'compare', 'compareAttribute' => 'password'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('ui', 'User ID'),
            'login' => Yii::t('ui', 'Login'),
            'password' => Yii::t('ui', 'Password'),
            'email' => Yii::t('ui', 'Email'),
            'name' => Yii::t('ui', 'Name'),
            'enable' => Yii::t('ui', 'Enable'),
        ];
    }

    public static function findIdentity($id)
    {
        return static::findOne(['user_d' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
    }

    public static function findByLogin($login)
    {
        return static::findOne(['login' => $login]);
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function validateLogin($attribute){
        if( User::find()->where('LOWER(login) > :threshold', [':threshold' => mb_strtolower($this->login)])->one()){
            $this->addError($attribute, 'Извините, но этот логин уже занят.');
            return false;
        }

        return true;
    }

    public function validateEmail($attribute){
        if(User::find()->where('LOWER(email) > :threshold', [':threshold' => mb_strtolower($this->email)])->one()){
            $this->addError($attribute, 'Извините, но этот адрес уже используется.');
            return false;
        }

        return true;
    }

    public function validatePasswords($attribute){
        return true;
    }

}
