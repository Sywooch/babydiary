<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_vaccination_loc".
 *
 * @property integer $dct_vaccination_loc_id
 * @property integer $dct_vaccination_id
 * @property string $text
 * @property string $genitive_text
 * @property integer $dct_language_id
 *
 * @property DctVaccination $dctVaccination
 */
class DctVaccinationLoc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_vaccination_loc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_vaccination_id', 'dct_language_id'], 'required'],
            [['dct_vaccination_id', 'dct_language_id'], 'integer'],
            [['text', 'genitive_text'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_vaccination_loc_id' => Yii::t('ui', 'Dct Vaccination Loc ID'),
            'dct_vaccination_id' => Yii::t('ui', 'Dct Vaccination ID'),
            'text' => Yii::t('ui', 'Text'),
            'genitive_text' => Yii::t('ui', 'Genitive Text'),
            'dct_language_id' => Yii::t('ui', 'Dct Language ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctVaccination()
    {
        return $this->hasOne(DctVaccination::className(), ['dct_vaccination_id' => 'dct_vaccination_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctLanguage()
    {
        return $this->hasOne(DctLanguage::className(), ['dct_language_id' => 'dct_language_id']);
    }

    public function getLocalizationData($id){
        $data = DctVaccinationLoc::find()->with('dctLanguage')->where(['dct_vaccination_id' => $id])->asArray()->all();
        $modelLoc = [];
        foreach($data as $vaccination){
            $modelLoc[$vaccination['dct_language_id']] = ['text' => $vaccination['text'], 'id' => $vaccination['dct_vaccination_id'], 'genitive_text' => $vaccination['genitive_text']];
        }

        return $modelLoc;
    }

    public function saveLocalizationData($model, $params, $languageCount){
        for($i = 0; $i < $languageCount; $i++){
            if ($model->dct_vaccination_id > -1){
                $childModel = new DctVaccinationLoc();
                $childModel->dct_vaccination_id = $model->dct_vaccination_id;
                $childModel->dct_language_id = $params[$i]['dct_language_id'];
            } else {
                $childModel = DctVaccinationLoc::findOne($params[$i]['dct_vaccination_loc_id']);
            }
            $childModel->text = (!empty($params[$i]['text'])) ? $params[$i]['text'] : '';
            $childModel->genitive_text = (!empty($params[$i]['genitive_text'])) ? $params[$i]['genitive_text'] : '';
            $childModel->save();
        }
    }
}
