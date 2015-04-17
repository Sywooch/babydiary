<?php
namespace app\components;


use app\models\DctLanguage;
use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use yii\web\UrlManager;

class LangUrlManager extends UrlManager
{
    public function createUrl($params)
    {
        if( isset($params['lang']) ){
            //Если указан идентификатор языка, то делаем попытку найти язык в БД,
            //иначе работаем с языком по умолчанию
            $lang = DctLanguage::findOne($params['lang']);
            if( $lang === null ){
                $lang = DctLanguage::getDefaultLang();
            }
            unset($params['lang']);
        } else {
            //Если не указан параметр языка, то работаем с текущим языком
            $lang = DctLanguage::getCurrent();
        }

        //Получаем сформированный URL(без префикса идентификатора языка)
        $url = parent::createUrl($params);

        //Добавляем к URL префикс - буквенный идентификатор языка
        if( $url == '/' ){
            return '/' . $lang->url;
        }else{
            return '/' . $lang->url . $url;
        }
    }
}
