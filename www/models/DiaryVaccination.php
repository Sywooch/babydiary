<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diary_vaccination".
 *
 * @property integer $diary_vaccination_id
 * @property integer $diary_id
 * @property integer $dct_vaccination_id
 * @property string $notes
 *
 * @property Diary $diary
 * @property DctVaccination $dctVaccination
 */
class DiaryVaccination extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diary_vaccination';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diary_id', 'dct_vaccination_id', 'notes'], 'required'],
            [['diary_id', 'dct_vaccination_id'], 'integer'],
            [['notes'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'diary_vaccination_id' => Yii::t('ui', 'Diary Vaccination ID'),
            'diary_id' => Yii::t('ui', 'Diary ID'),
            'dct_vaccination_id' => Yii::t('ui', 'Dct Vaccination ID'),
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
    public function getDctVaccination()
    {
        return $this->hasOne(DctVaccination::className(), ['dct_vaccination_id' => 'dct_vaccination_id']);
    }
}
