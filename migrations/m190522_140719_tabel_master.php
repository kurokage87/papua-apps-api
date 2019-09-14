<?php

use yii\db\Migration;

/**
 * Class m190522_140719_tabel_master
 */
class m190522_140719_tabel_master extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'nama_remote' => $this->string()->null(),
            'alamat' => $this->text(),
            'no_task' => $this->string(),
            'vid' => $this->integer(),
            'tanggal_task' => $this->string(),
            'provinsi' => $this->string(),
            'id_jenis_task' => $this->integer(),
            'nama_kordinator' => $this->string(),
            'user_id' => $this->integer(),
            'status_task' => $this->string()
        ]);
        
        $this->createTable('detail_task', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
            'id_status_perbaikan' => $this->integer(),
            'flag_data_instalasi' => $this->integer(),
            'diameter_antena' => $this->string(),
            'polarisasi_arah_antena' => $this->string(),
            'elevasi_arah_antena' => $this->string(),
            'azimuth_arah_antena' => $this->string(),
            'kvaups' => $this->string(),
            'ip_management' => $this->string(100),
            'receive_symbole_rate' => $this->string(100),
            'phase_netral_pln' => $this->string(100),
            'phase_netral_ups' => $this->string(100),
            'phase_netral_genset' => $this->string(100),
            'phase_ground_pln' => $this->string(100),
            'phase_ground_ups' => $this->string(100),
            'phase_ground_genset' => $this->string(100),
            'netral_ground_pln' => $this->string(100),
            'netral_ground_ups' => $this->string(100),
            'netral_ground_genset' => $this->string(100),
            'satelite_longitude' => $this->string(),
            'iplan1' => $this->string(100),
            'subnetmask1' => $this->string(100),
            'iplan2' => $this->string(100),
            'subnetmask2' => $this->string(100),
            'hasil_test_alamat1' => $this->string(),
            'success_test1' => $this->string(),
            'loss_test1' => $this->string(),
            'keterangan_test1' => $this->string(),
            'hasil_test_alamat2' => $this->string(),
            'success_test2' => $this->string(),
            'loss_test2' => $this->string(),
            'keterangan_test2' => $this->string(),
            'hasil_test_alamat3' => $this->string(),
            'success_test3' => $this->string(),
            'loss_test3' => $this->string(),
            'keterangan_test3' => $this->string(),
        ]);
        
        $this->addForeignKey('fk-user-id-task-user_id', 'task', 'user_id', 'user', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk-detail_task-task_id-task-id', 'detail_task', 'task_id', 'task', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190522_140719_tabel_master cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190522_140719_tabel_master cannot be reverted.\n";

        return false;
    }
    */
}
