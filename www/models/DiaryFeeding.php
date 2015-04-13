<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diary_feeding".
 *
 * @property integer $diary_feeding_id
 * @property integer $diary_id
 * @property integer $feeding
 * @property integer $dct_feeding_type_id
 * @property integer $feeding_count
 * @property string $feeding_duration
 * @property integer $solid_food
 * @property integer $solid_food_count
 * @property string $notes
 *
 * @property DctFeedingType $dctFeedingType
 * @property Diary $diary
 */
class DiaryFeeding extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diary_feeding';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diary_feeding_id', 'diary_id', 'dct_feeding_type_id', 'feeding_count', 'feeding_duration', 'solid_food_count', 'notes'], 'required'],
            [['diary_feeding_id', 'diary_id', 'feeding', 'dct_feeding_type_id', 'feeding_count', 'solid_food', 'solid_food_count'], 'integer'],
            [['feeding_duration'], 'safe'],
            [['notes'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'diary_feeding_id' => Yii::t('ui', 'Diary Feeding ID'),
            'diary_id' => Yii::t('ui', 'Diary ID'),
            'feeding' => Yii::t('ui', 'Feeding'),
            'dct_feeding_type_id' => Yii::t('ui', 'Dct Feeding Type ID'),
            'feeding_count' => Yii::t('ui', 'Feeding Count'),
            'feeding_duration' => Yii::t('ui', 'Feeding Duration'),
            'solid_food' => Yii::t('ui', 'Solid Food'),
            'solid_food_count' => Yii::t('ui', 'Solid Food Count'),
            'notes' => Yii::t('ui', 'Notes'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctFeedingType()
    {
        return $this->hasOne(DctFeedingType::className(), ['dct_feeding_type_id' => 'dct_feeding_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiary()
    {
        return $this->hasOne(Diary::className(), ['diary_id' => 'diary_id']);
    }
}
