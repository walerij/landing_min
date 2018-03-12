<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "landings".
 *
 * @property integer $id
 * @property string $landing
 * @property string $landing_info
 * @property string $about_pupil
 * @property string $about_lessons
 * @property string $about_techno
 * @property string $link_header
 */
class LandingsRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'landings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['landing', 'landing_info', 'about_pupil', 'about_lessons', 'about_techno', 'link_header'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'landing' => 'Landing',
            'landing_info' => 'Landing Info',
            'about_pupil' => 'About Pupil',
            'about_lessons' => 'About Lessons',
            'about_techno' => 'About Techno',
            'link_header' => 'Link Header',
        ];
    }
}
