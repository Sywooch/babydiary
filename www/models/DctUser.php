<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_user".
 *
 * @property integer $dct_user_id
 * @property string $login
 * @property string $password
 * @property string $email
 * @property integer $enable
 */
class DctUser extends \yii\db\ActiveRecord
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
            'dct_user_id' => Yii::t('ui', 'Dct User ID'),
            'login' => Yii::t('ui', 'Login'),
            'password' => Yii::t('ui', 'Password'),
            'email' => Yii::t('ui', 'Email'),
            'enable' => Yii::t('ui', 'Enable'),
        ];
    }
}
