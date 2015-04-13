<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_vaccination_loc".
 *
 * @property integer $dct_vaccination_loc_id
 * @property integer $dct_vaccination_id
 * @property string $text
 * @property string $genitive_text
 * @property integer $dct_language_id
 *
 * @property DctVaccination $dctVaccination
 */
class DctVaccinationLoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_vaccination_loc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_vaccination_id', 'text', 'genitive_text', 'dct_language_id'], 'required'],
            [['dct_vaccination_id', 'dct_language_id'], 'integer'],
            [['text', 'genitive_text'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_vaccination_loc_id' => Yii::t('ui', 'Dct Vaccination Loc ID'),
            'dct_vaccination_id' => Yii::t('ui', 'Dct Vaccination ID'),
            'text' => Yii::t('ui', 'Text'),
            'genitive_text' => Yii::t('ui', 'Genitive Text'),
            'dct_language_id' => Yii::t('ui', 'Dct Language ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctVaccination()
    {
        return $this->hasOne(DctVaccination::className(), ['dct_vaccination_id' => 'dct_vaccination_id']);
    }
}
