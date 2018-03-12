<?php

use yii\db\Migration;

/**
 * Handles the creation of table `landingscomments`.
 */
class m180312_110857_create_landingscomments_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('landingscomments', [
            'id' => $this->primaryKey(),
            'landing_id'=> $this->integer(),
            'fio'=> $this->string(), //ФИО (можно ФИ) автора комментария
            'link_photo'=> $this->string(), //фото автора комментария
            'text_comment'=> $this->string(), //текст комментария
            
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('landingscomments');
    }
}
