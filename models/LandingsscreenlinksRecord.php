<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landingsscreenlinks".
 *
 * @property integer $id
 * @property integer $landing_id
 * @property string $link
 */
class LandingsscreenlinksRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landingsscreenlinks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['landing_id'], 'integer'],
            [['link'], 'string', 'max' => 255],
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
            'link' => 'Link',
        ];
    }
}
