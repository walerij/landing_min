<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landingsaudithory".
 *
 * @property integer $id
 * @property integer $landing_id
 * @property string $audithory
 */
class LandingsaudithoryRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landingsaudithory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['landing_id'], 'integer'],
            [['audithory'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'landing_id' => 'Landing ID',
            'audithory' => 'Audithory',
        ];
    }
}
