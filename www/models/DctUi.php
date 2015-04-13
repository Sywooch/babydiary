<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dct_ui".
 *
 * @property integer $dct_ui_id
 * @property string $name
 * @property integer $dct_ui_types_id
 * @property integer $enable
 *
 * @property DctUiTypes $dctUiTypes
 */
class DctUi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dct_ui';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'dct_ui_types_id'], 'required'],
            [['dct_ui_types_id', 'enable'], 'integer'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dct_ui_id' => Yii::t('ui', 'Dct Ui ID'),
            'name' => Yii::t('ui', 'Name'),
            'dct_ui_types_id' => Yii::t('ui', 'Dct Ui Types ID'),
            'enable' => Yii::t('ui', 'Enable'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDctUiTypes()
    {
        return $this->hasOne(DctUiTypes::className(), ['dct_ui_types_id' => 'dct_ui_types_id']);
    }
}
