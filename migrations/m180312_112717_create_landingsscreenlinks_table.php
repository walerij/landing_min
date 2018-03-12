<?php

use yii\db\Migration;

/**
 * Handles the creation of table `landingsscreenlinks`.
 */
class m180312_112717_create_landingsscreenlinks_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('landingsscreenlinks', [
            'id' => $this->primaryKey(),
            'landing_id'=> $this->integer(),
            'link'=> $this->string() //ссылка на скрин
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('landingsscreenlinks');
    }
}
