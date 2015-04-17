<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_language".
 *
 * @property integer $dct_language_id
 * @property string $name
 * @property string $prefix
 * @property integer $enable
 *
 * @property DctDoctorLoc[] $dctDoctorLocs
 * @property DctProgressLoc[] $dctProgressLocs
 * @property DctSolidFoodLoc[] $dctSolidFoodLocs
 * @property DctToothLoc[] $dctToothLocs
 */
class DctLanguage extends \yii\db\ActiveRecord
{
    //Переменная, для хранения текущего объекта языка
    static $current = null;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_language';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'prefix'], 'required'],
            [['enable'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['prefix'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_language_id' => Yii::t('ui', 'Dct Language ID'),
            'name' => Yii::t('ui', 'Name'),
            'prefix' => Yii::t('ui', 'Prefix'),
            'enable' => Yii::t('ui', 'Enable'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctDoctorLocs()
    {
        return $this->hasMany(DctDoctorLoc::className(), ['dct_language_id' => 'dct_language_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctProgressLocs()
    {
        return $this->hasMany(DctProgressLoc::className(), ['dct_language_id' => 'dct_language_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctSolidFoodLocs()
    {
        return $this->hasMany(DctSolidFoodLoc::className(), ['dct_language_id' => 'dct_language_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctToothLocs()
    {
        return $this->hasMany(DctToothLoc::className(), ['dct_language_id' => 'dct_language_id']);
    }

    //Получение текущего объекта языка
    static function getCurrent()
    {

        if( !self::$current ){
            self::$current = self::getDefaultLang();
        }

        return self::$current;
    }

    //Установка текущего объекта языка и локаль пользователя
    static function setCurrent($url = null)
    {
        $language = self::getLangByUrl($url);
        self::$current = ($language === null) ? self::getDefaultLang() : $language;
        Yii::$app->language = self::$current->locale;
    }

    //Получения объекта языка по умолчанию
    static function getDefaultLang()
    {
        return DctLanguage::find()->where('`default` = :default', [':default' => 1])->one();
    }

    //Получения объекта языка по буквенному идентификатору
    static function getLangByUrl($url = null)
    {
        if ($url === null) {
            return null;
        } else {
            $language = DctLanguage::find()->where('url = :url', [':url' => $url])->one();
            if ( $language === null ) {
                return null;
            }else{
                return $language;
            }
        }
    }

}
