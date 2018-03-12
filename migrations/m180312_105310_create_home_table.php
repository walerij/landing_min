<?php

use yii\db\Migration;

/**
 * Handles the creation of table `home`.
 */
class m180312_105310_create_home_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('home', [
            'id' => $this->primaryKey(),
            'title'=> $this->string(), //заголовок страницы
            'desc'=> $this->string(), //подзаголовок
            'author'=> $this->string(), //автор проекта
            'name_proj'=> $this->string(), //наименование проекта
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('home');
    }
}
