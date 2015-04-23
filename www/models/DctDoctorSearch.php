<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DctDoctor;

/**
 * DctDoctorSearch represents the model behind the search form about `app\models\DctDoctor`.
 */
class DctDoctorSearch extends DctDoctor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dct_doctor_id', 'enable'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DctDoctor::find()->joinWith('dctDoctorLocs');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'dct_doctor_id' => $this->dct_doctor_id,
            //'dctDoctorLocs.text' => $this->dctDoctorLocs->text,
            'enable' => $this->enable,
        ]);

        return $dataProvider;
    }
}
