<?php

use yii\db\Migration;

/**
 * Class m190526_152631_tabel_cost_task
 */
class m190526_152631_tabel_cost_task extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('cost_task', [
            'id' => $this->primaryKey(),
            'cost' => $this->bigInteger(),
            'keterangan' => $this->string(),
            'status_cost' => $this->string(50),
            'task_id' => $this->integer()
        ]);
        
        $this->addForeignKey('fk-cost_task-task_id-task-id', 'cost_task', 'task_id', 'task', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190526_152631_tabel_cost_task cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190526_152631_tabel_cost_task cannot be reverted.\n";

        return false;
    }
    */
}
