<?php

use yii\db\Migration;

/**
 * Handles the creation of table `landingsaudithory`.
 */
class m180312_114859_create_landingsaudithory_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('landingsaudithory', [
            'id' => $this->primaryKey(),
             'landing_id'=> $this->integer(),
             'audithory'=> $this->string(), //аудитория курса
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('landingsaudithory');
    }
}
