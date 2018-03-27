<?php

use yii\db\Migration;

/**
 * Handles the creation of table `slider`.
 */
class m180327_193857_create_slider_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('slider', [
            'id' => $this->primaryKey(),
            'landing_id' =>$this->inteder(),
            'link'=>$this->string(), //ссылка на какртинку

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('slider');
    }
}
