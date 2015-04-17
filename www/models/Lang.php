<?php
/**
 * Created by PhpStorm.
 * User: akovalchuk
 * Date: 16.04.2015
 * Time: 16:25
 */

namespace app\models;


use yii\base\Model;

class Lang extends Model{
    //Переменная, для хранения текущего объекта языка
    static $current = null;

    //Получение текущего объекта языка
    static function getCurrent()
    {
        if( self::$current === null ){
            self::$current = self::getDefaultLang();
        }
        return self::$current;
    }

    //Установка текущего объекта языка и локаль пользователя
    static function setCurrent($url = null)
    {
        $language = self::getLangByUrl($url);
        self::$current = ($language === null) ? self::getDefaultLang() : $language;
        Yii::$app->language = self::$current->local;
    }

    //Получения объекта языка по умолчанию
    static function getDefaultLang()
    {
        return self::$defaultLanguage;
    }

    //Получения объекта языка по буквенному идентификатору
    static function getLangByUrl($url = null)
    {
        if ($url === null) {
            return null;
        } else {
            $language = self::findLanguage($url);
            if ( $language === null ) {
                return null;
            }else{
                return $language;
            }
        }
    }

    static function findLanguage($lang)
    {
        $language = self::$defauldLanguage;
        switch ($lang){
            case "ru":
                $language = ['locale' => 'ru-RU', 'url' => 'ru'];
                break;
            case "en":
                $language = ['locale' => 'en-EN', 'url' => 'en'];
                break;
            case "ua":
                $language = ['locale' => 'ua-UA', 'url' => 'ua'];
                break;
            default:
                $language = self::$defauldLanguage;
        }

        return $language;
    }
} 