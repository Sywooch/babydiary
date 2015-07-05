<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;

/**
 * This is the model class for table "dct_user".
 *
 * @property integer $user_id
 * @property string $login
 * @property string $password
 * @property string $email
 * @property integer $enable
 */
class DctUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['login', 'password', 'email'], 'required'],
            [['enable'], 'integer'],
            [['login'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100]
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

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email]);
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
}
