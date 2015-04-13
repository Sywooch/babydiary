<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "child_progress".
 *
 * @property integer $child_progress_id
 * @property integer $child_id
 * @property integer $dct_progress_id
 * @property string $event_date
 * @property integer $event_age_month
 * @property integer $event_age_days
 * @property string $notes
 *
 * @property Child $child
 * @property DctProgress $dctProgress
 */
class ChildProgress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'child_progress';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['child_progress_id', 'child_id', 'dct_progress_id', 'event_date', 'event_age_month', 'event_age_days', 'notes'], 'required'],
            [['child_progress_id', 'child_id', 'dct_progress_id', 'event_age_month', 'event_age_days'], 'integer'],
            [['event_date'], 'safe'],
            [['notes'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'child_progress_id' => Yii::t('ui', 'Child Progress ID'),
            'child_id' => Yii::t('ui', 'Child ID'),
            'dct_progress_id' => Yii::t('ui', 'Dct Progress ID'),
            'event_date' => Yii::t('ui', 'Event Date'),
            'event_age_month' => Yii::t('ui', 'Event Age Month'),
            'event_age_days' => Yii::t('ui', 'Event Age Days'),
            'notes' => Yii::t('ui', 'Notes'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChild()
    {
        return $this->hasOne(Child::className(), ['child_id' => 'child_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctProgress()
    {
        return $this->hasOne(DctProgress::className(), ['dct_progress_id' => 'dct_progress_id']);
    }
}
