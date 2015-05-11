<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_doctor".
 *
 * @property integer $dct_doctor_id
 * @property integer $enable
 *
 * @property DctDoctorLoc[] $dctDoctorLocs
 */
class DctDoctor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_doctor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_doctor_id', 'enable'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_doctor_id' => Yii::t('ui', 'Dct Doctor ID'),
            'enable' => Yii::t('ui', 'Enable'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctDoctorLocs()
    {
        return $this->hasMany(DctDoctorLoc::className(), ['dct_doctor_id' => 'dct_doctor_id']);
    }
}
