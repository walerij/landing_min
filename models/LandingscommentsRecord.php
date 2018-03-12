<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landingscomments".
 *
 * @property integer $id
 * @property integer $landing_id
 * @property string $fio
 * @property string $link_photo
 * @property string $text_comment
 */
class LandingscommentsRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landingscomments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['landing_id'], 'integer'],
            [['fio', 'link_photo', 'text_comment'], 'string', 'max' => 255],
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
            'link_photo' => 'Link Photo',
            'text_comment' => 'Text Comment',
        ];
    }
}
