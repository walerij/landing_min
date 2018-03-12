<?php

use yii\db\Migration;

/**
 * Handles the creation of table `landingsauthors`.
 */
class m180312_110613_create_landingsauthors_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('landingsauthors', [
            'id' => $this->primaryKey(),
            'landing_id'=> $this->integer(),
            'fio'=> $this->string(), //ФИО (можно ФИ) автора
            'info'=> $this->string(), //информация об авторе
            'lilk_photo'=> $this->string() //ссылка на фото автора
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('landingsauthors');
    }
}
