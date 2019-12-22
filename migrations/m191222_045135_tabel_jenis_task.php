<?php

use yii\db\Migration;

/**
 * Class m191222_045135_tabel_jenis_task
 */
class m191222_045135_tabel_jenis_task extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('jenis_task', [
           'id' => $this->primaryKey(),
           'deskripsi' => $this->string(),
           'create_date' => $this->string(),
           'update_date' => $this->string()
        ]);
        
        $this->addForeignKey('fk-jenis_task-id-task-id_jenis_task', 'task', 'id_jenis_task', 'jenis_task', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191222_045135_tabel_jenis_task cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191222_045135_tabel_jenis_task cannot be reverted.\n";

        return false;
    }
    */
}
