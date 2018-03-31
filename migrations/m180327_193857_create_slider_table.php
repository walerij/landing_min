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
            'landing_id' =>$this->integer(),
            'link'=>$this->string(),
            'title'=>$this->string(),
            'info'=>$this->string(),

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
