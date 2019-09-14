<?php

use yii\db\Migration;

/**
 * Class m190528_145723_tabel_spd_vid
 */
class m190528_145723_tabel_spd_vid extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('spd', [
            'id' => $this->primaryKey(),
            'flagconfirm' => $this->string(50),
            'id_alamat' => $this->string(),
            'file_url' => $this->string(),
            'description' => $this->string(),
            'task_id' => $this->integer(),
            'catatan_transaksi' => $this->string(),
            'jenis_biaya_id' => $this->integer(),
            'nominal' => $this->bigInteger(),
            'tgl_input_biaya' => $this->string(50),
            'sisa' => $this->string(),
            'status_spd' => $this->string(50),
        ]);
        
        $this->createTable('jenis_biaya', [
            'id' => $this->primaryKey(),
            'nama_jenis_biaya' => $this->string()
        ]);
        
        $this->addForeignKey('fk-spd-task_id-task-id', 'spd', 'task_id', 'task', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk-spd-jenis_biaya_id-jenis_biaya-id', 'spd', 'jenis_biaya_id', 'jenis_biaya', 'id', 'cascade', 'cascade');
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190528_145723_tabel_spd_vid cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190528_145723_tabel_spd_vid cannot be reverted.\n";

        return false;
    }
    */
}
