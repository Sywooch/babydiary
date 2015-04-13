<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diary_doctor".
 *
 * @property integer $diary_doctor_id
 * @property integer $diary_id
 * @property integer $dct_doctor_id
 * @property string $notes
 *
 * @property Diary $diary
 * @property DctDoctor $diaryDoctor
 * @property DctDoctor $dctDoctor
 */
class DiaryDoctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diary_doctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diary_id', 'dct_doctor_id', 'notes'], 'required'],
            [['diary_id', 'dct_doctor_id'], 'integer'],
            [['notes'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'diary_doctor_id' => Yii::t('ui', 'Diary Doctor ID'),
            'diary_id' => Yii::t('ui', 'Diary ID'),
            'dct_doctor_id' => Yii::t('ui', 'Dct Doctor ID'),
            'notes' => Yii::t('ui', 'Notes'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiary()
    {
        return $this->hasOne(Diary::className(), ['diary_id' => 'diary_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiaryDoctor()
    {
        return $this->hasOne(DctDoctor::className(), ['dct_doctor_id' => 'diary_doctor_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctDoctor()
    {
        return $this->hasOne(DctDoctor::className(), ['dct_doctor_id' => 'dct_doctor_id']);
    }
}
