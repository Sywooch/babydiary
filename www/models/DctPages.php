<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_pages".
 *
 * @property integer $dct_page_id
 * @property string $title
 * @property string $header
 * @property string $description
 * @property string $keywords
 * @property string $seo_url
 * @property string $content
 * @property integer $enable
 * @property integer $main_menu
 */
class DctPages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_pages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_page_id', 'title', 'header', 'description', 'keywords', 'seo_url', 'content'], 'required'],
            [['dct_page_id', 'enable', 'main_menu'], 'integer'],
            [['content'], 'string'],
            [['title', 'header', 'keywords', 'seo_url'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_page_id' => Yii::t('ui', 'Dct Page ID'),
            'title' => Yii::t('ui', 'Title'),
            'header' => Yii::t('ui', 'Header'),
            'description' => Yii::t('ui', 'Description'),
            'keywords' => Yii::t('ui', 'Keywords'),
            'seo_url' => Yii::t('ui', 'Seo Url'),
            'content' => Yii::t('ui', 'Content'),
            'enable' => Yii::t('ui', 'Enable'),
            'main_menu' => Yii::t('ui', 'Main Menu'),
        ];
    }
}
