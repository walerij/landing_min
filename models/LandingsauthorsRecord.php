<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landingsauthors".
 *
 * @property integer $id
 * @property integer $landing_id
 * @property string $fio
 * @property string $info
 * @property string $lilk_photo
 */
class LandingsauthorsRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landingsauthors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['landing_id'], 'integer'],
            [['fio', 'info', 'lilk_photo'], 'string', 'max' => 255],
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
            'fio' => 'Fio',
            'info' => 'Info',
            'lilk_photo' => 'Lilk Photo',
        ];
    }
}
