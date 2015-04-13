<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_vaccination".
 *
 * @property integer $dct_vaccination_id
 * @property integer $enable
 * @property integer $position
 *
 * @property DctVaccinationLoc[] $dctVaccinationLocs
 */
class DctVaccination extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_vaccination';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_vaccination_id', 'position'], 'required'],
            [['dct_vaccination_id', 'enable', 'position'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_vaccination_id' => Yii::t('ui', 'Dct Vaccination ID'),
            'enable' => Yii::t('ui', 'Enable'),
            'position' => Yii::t('ui', 'Position'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctVaccinationLocs()
    {
        return $this->hasMany(DctVaccinationLoc::className(), ['dct_vaccination_id' => 'dct_vaccination_id']);
    }
}
