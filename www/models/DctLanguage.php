<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_language".
 *
 * @property integer $dct_language_id
 * @property string $name
 * @property string $prefix
 * @property integer $enable
 *
 * @property DctDoctorLoc[] $dctDoctorLocs
 * @property DctProgressLoc[] $dctProgressLocs
 * @property DctSolidFoodLoc[] $dctSolidFoodLocs
 * @property DctToothLoc[] $dctToothLocs
 */
class DctLanguage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_language';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'prefix'], 'required'],
            [['enable'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['prefix'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_language_id' => Yii::t('ui', 'Dct Language ID'),
            'name' => Yii::t('ui', 'Name'),
            'prefix' => Yii::t('ui', 'Prefix'),
            'enable' => Yii::t('ui', 'Enable'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctDoctorLocs()
    {
        return $this->hasMany(DctDoctorLoc::className(), ['dct_language_id' => 'dct_language_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctProgressLocs()
    {
        return $this->hasMany(DctProgressLoc::className(), ['dct_language_id' => 'dct_language_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctSolidFoodLocs()
    {
        return $this->hasMany(DctSolidFoodLoc::className(), ['dct_language_id' => 'dct_language_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctToothLocs()
    {
        return $this->hasMany(DctToothLoc::className(), ['dct_language_id' => 'dct_language_id']);
    }
}
