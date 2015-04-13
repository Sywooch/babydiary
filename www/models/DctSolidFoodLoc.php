<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_solid_food_loc".
 *
 * @property integer $dct_solid_food_loc_id
 * @property integer $dct_solid_food_id
 * @property string $text
 * @property integer $dct_language_id
 *
 * @property DctSolidFood $dctSolidFood
 * @property DctLanguage $dctLanguage
 */
class DctSolidFoodLoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_solid_food_loc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_solid_food_id', 'text', 'dct_language_id'], 'required'],
            [['dct_solid_food_id', 'dct_language_id'], 'integer'],
            [['text'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_solid_food_loc_id' => Yii::t('ui', 'Dct Solid Food Loc ID'),
            'dct_solid_food_id' => Yii::t('ui', 'Dct Solid Food ID'),
            'text' => Yii::t('ui', 'Text'),
            'dct_language_id' => Yii::t('ui', 'Dct Language ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctSolidFood()
    {
        return $this->hasOne(DctSolidFood::className(), ['dct_solid_food_id' => 'dct_solid_food_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctLanguage()
    {
        return $this->hasOne(DctLanguage::className(), ['dct_language_id' => 'dct_language_id']);
    }
}
