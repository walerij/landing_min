<?php

use yii\db\Migration;

/**
 * Handles the creation of table `landings`.
 */
class m180312_110018_create_landings_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('landings', [
            'id' => $this->primaryKey(),
            'landing'=> $this->string(), //имя лендинга
            'landing_info'=> $this->string(), //информация о лендинге
            'about_pupil'=> $this->string(), //для кого уроки
            'about_lessons'=> $this->string(), //что я получу
            'about_techno'=> $this->string(),  // используемые технологии
            'link_header'=> $this->string(), //ссылка на рисунок сверху
            ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('landings');
    }
}
