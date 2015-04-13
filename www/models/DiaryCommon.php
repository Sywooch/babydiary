<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "diary_common".
 *
 * @property integer $diary_common_id
 * @property integer $diary_id
 * @property string $photo
 * @property string $weight
 * @property integer $height
 * @property integer $head_circumference
 * @property integer $chest_circumference
 * @property string $other
 * @property string $notes
 * @property string $spelling
 *
 * @property Diary $diary
 */
class DiaryCommon extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'diary_common';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['diary_common_id', 'diary_id', 'photo', 'weight', 'height', 'head_circumference', 'chest_circumference', 'other', 'notes', 'spelling'], 'required'],
            [['diary_common_id', 'diary_id', 'height', 'head_circumference', 'chest_circumference'], 'integer'],
            [['weight'], 'number'],
            [['notes', 'spelling'], 'string'],
            [['photo', 'other'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'diary_common_id' => Yii::t('ui', 'Diary Common ID'),
            'diary_id' => Yii::t('ui', 'Diary ID'),
            'photo' => Yii::t('ui', 'Photo'),
            'weight' => Yii::t('ui', 'Weight'),
            'height' => Yii::t('ui', 'Height'),
            'head_circumference' => Yii::t('ui', 'Head Circumference'),
            'chest_circumference' => Yii::t('ui', 'Chest Circumference'),
            'other' => Yii::t('ui', 'Other'),
            'notes' => Yii::t('ui', 'Notes'),
            'spelling' => Yii::t('ui', 'Spelling'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiary()
    {
        return $this->hasOne(Diary::className(), ['diary_id' => 'diary_id']);
    }
}
