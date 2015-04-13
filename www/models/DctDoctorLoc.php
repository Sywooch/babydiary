<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_doctor_loc".
 *
 * @property integer $dct_doctor_loc_id
 * @property integer $dct_doctor_id
 * @property string $text
 * @property integer $dct_language_id
 *
 * @property DctDoctor $dctDoctor
 * @property DctLanguage $dctLanguage
 */
class DctDoctorLoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_doctor_loc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_doctor_id', 'text', 'dct_language_id'], 'required'],
            [['dct_doctor_id', 'dct_language_id'], 'integer'],
            [['text'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_doctor_loc_id' => Yii::t('ui', 'Dct Doctor Loc ID'),
            'dct_doctor_id' => Yii::t('ui', 'Dct Doctor ID'),
            'text' => Yii::t('ui', 'Text'),
            'dct_language_id' => Yii::t('ui', 'Dct Language ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctDoctor()
    {
        return $this->hasOne(DctDoctor::className(), ['dct_doctor_id' => 'dct_doctor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctLanguage()
    {
        return $this->hasOne(DctLanguage::className(), ['dct_language_id' => 'dct_language_id']);
    }
}
