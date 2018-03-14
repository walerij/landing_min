<?php

use yii\db\Migration;

/**
 * Handles adding position to table `landings`.
 */
class m180314_114712_add_position_column_to_landings_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('landings', 'theme', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('landings', 'theme');
    }
}
