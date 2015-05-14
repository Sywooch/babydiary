<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_progress_loc".
 *
 * @property integer $dct_progress_loc_id
 * @property integer $dct_progress_id
 * @property string $text
 * @property integer $dct_language_id
 *
 * @property DctProgress $dctProgress
 * @property DctLanguage $dctLanguage
 */
class DctProgressLoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_progress_loc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_progress_id', 'text', 'dct_language_id'], 'required'],
            [['dct_progress_id', 'dct_language_id'], 'integer'],
            [['text'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_progress_loc_id' => Yii::t('ui', 'Dct Progress Loc ID'),
            'dct_progress_id' => Yii::t('ui', 'Dct Progress ID'),
            'text' => Yii::t('ui', 'Text'),
            'dct_language_id' => Yii::t('ui', 'Dct Language ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctProgress()
    {
        return $this->hasOne(DctProgress::className(), ['dct_progress_id' => 'dct_progress_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctLanguage()
    {
        return $this->hasOne(DctLanguage::className(), ['dct_language_id' => 'dct_language_id']);
    }

    public function getLocalizationData($id){
        $data = DctProgressLoc::find()->with('dctLanguage')->where(['dct_progress_id' => $id])->asArray()->all();
        $modelLoc = [];
        foreach($data as $progress){
            $modelLoc[$progress['dct_language_id']] = ['text' => $progress['text'], 'id' => $progress['dct_progress_loc_id']];
        }

        return $modelLoc;
    }

    public function saveLocalizationData($model, $params, $languageCount){
        for($i = 0; $i < $languageCount; $i++){
            if ($model->dct_progress_id > -1){
                $childModel = new DctProgressLoc();
                $childModel->dct_progress_id = $model->dct_progress_id;
                $childModel->dct_language_id = $params[$i]['dct_language_id'];
            } else {
                $childModel = DctProgressLoc::findOne($params[$i]['dct_progress_loc_id']);
            }
            $childModel->text = (!empty($params[$i]['text'])) ? $params[$i]['text'] : '';
            $childModel->save();
        }
    }
}
