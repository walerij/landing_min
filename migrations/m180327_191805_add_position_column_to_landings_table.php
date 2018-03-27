<?php

use yii\db\Migration;

/**
 * Handles adding position to table `landings`.
 */
class m180327_191805_add_position_column_to_landings_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('landings', 'slider', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('landings', 'slider');
    }
}
