    <?php

use yii\db\Migration;

/**
 * Class m190611_075018_tambahan_vid_survey
 */
class m190611_075018_tambahan_vid_survey extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('spd', 'flagtime', $this->string());
        $this->addColumn('spd', 'flagupload', $this->string());
//        $this->addColumn('spd', 'file_url', $this->string());
        $this->addColumn('spd', 'file_usercreate', $this->string());
        $this->addColumn('spd', 'file_datecreate', $this->string());
        $this->addColumn('spd', 'keterangan', $this->text());
//        $this->addColumn('spd', 'description', $this->text());
        $this->addColumn('spd', 'yout_image_64_name', $this->string());
        $this->addColumn('spd', 'your_image_64_file', $this->text());
        
        $this->createTable('barang', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
            'nama_barang' => $this->string(),
            'type' => $this->string(),
            'SN' => $this->string(),
            'esnmodem' => $this->string(),
            'status' => $this->string(10),
            'file_url' => $this->string(),
            'description' => $this->text(),
            'date_create' => $this->string(),
            'user_create' => $this->string(),
            'jenis_barang' => $this->string()
        ]);
        
        $this->addForeignKey('fk-barang-task_id-task-id', 'barang', 'task_id', 'task', 'id', 'cascade', 'cascade');
        
        $this->createTable('general_info', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
            'atm_id' => $this->integer(),
            'IPLAN' => $this->string(),
            'tgl_berangkat' => $this->string(),
            'tgl_selesai_kerjaan' => $this->string(),
            'tgl_pulang' => $this->string(),
            'tgl_status_perbaikan' => $this->string(),
            'user_update' => $this->string(),
            'date_update' => $this->string(),
            'flag_general_info' => $this->string()
        ]);
        
        $this->addForeignKey('fk-general_info-task_id-task-id', 'general_info', 'task_id', 'task', 'id', 'cascade', 'cascade');
        
        $this->createTable('data_teknisi', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
            'fail_hw' => $this->string(),
            'sqf' => $this->string(),
            'initial_esno' => $this->string(),
            'carrier_to_noice' => $this->string(),
            'hasil_xpoll' => $this->string(),
            'cpi' => $this->string(),
            'operator_satelite' => $this->string(),
            'operator_helpdesk' => $this->string(),
            'out_pln' => $this->string(),
            'out_ups' => $this->string(),
            'ups_for_backup' => $this->string(),
            'suhu_ruangan' => $this->string(),
            'type_mounting' => $this->string(),
            'panjang_kabel' => $this->string(),
            'letak_antena' => $this->string(),
            'kondisi_bangunan' => $this->string(),
            'analisa_problem' => $this->string(),
            'aktifitas_solusi' => $this->string(),
            'flag_data_teknis' => $this->string()
        ]);
        
        $this->addForeignKey('fk-data_teknisi-task_id-task-id', 'data_teknisi', 'task_id', 'task', 'id', 'cascade', 'cascade');
        $this->addColumn('task', 'no_stamp', $this->string());
      
        $this->createTable('survey', [
            'id' => $this->primaryKey(),
            'task_id' => $this->integer(),
            'alamat_pengiriman_survey' => $this->text(),
            'tempat_penyimpanan_survey' => $this->string(),
            'nama_pic_survey' => $this->string(),
            'kontsk_pic_survey' => $this->string(),
            'penempatan_grounding_survey' => $this->string(),
            'ukuran_antena_survey' => $this->string(),
            'tempat_antena_survey' => $this->string(),
            'kekuatan_roof_survey' => $this->string(),
            'jenis_mounting_survey' => $this->string(),
            'latitude_survey' => $this->string(),
            'longitude_survey' => $this->string(),
            'listrik_awal_survey' => $this->string(),
            'sarpen_aci_indoor' => $this->string(),
            'sarpen_ups_survey' => $this->string(),
            'panjang_kabel_survey' => $this->string(),
            'type_kabel_survey' => $this->string(),
            'arah_antena_survey' => $this->string(),
            'keterangan_survey' => $this->text(),
            'status_hasil_survey' => $this->string(),
            'flag_data_survey' => $this->string(),
         ]);
        
         $this->addForeignKey('fk-survey-task_id-task-id', 'survey', 'task_id', 'task', 'id', 'cascade', 'cascade');
        
         $this->createTable('foto', [
             'id' => $this->primaryKey(),
             'task_id' => $this->integer(),
             'file_url' => $this->string(),
             'keterangan' => $this->string(),
             'flag_upload_foto' => $this->string(),
             'file_usercreate' => $this->string(),
             'flagtime' => $this->string(),
             'description' => $this->text(),
             'keterangan' => $this->text(),
             'your_image_64_name' => $this->string(),
             'your_image_64_file' => $this->text(),
         ]);
         
         $this->addForeignKey('fk-foto-task_id-task-id', 'foto', 'task_id', 'task', 'id', 'cascade', 'cascade');
         
         $this->createTable('lokasi', [
             'id' => $this->primaryKey(),
             'task_id' => $this->integer(),
             'kanwil' => $this->string(),
             'kanca_induk' => $this->string(),
             'alamat_install' => $this->text(),
             'provinsi' => $this->string(),
             'kota' => $this->string(),
             'jarkom_id' => $this->integer(),
             'satelite_id' => $this->integer(),
             'nama_pic' => $this->string(),
             'no_hp_pic' => $this->string(),
             'hub' => $this->string(),
             'latitude' => $this->string(),
             'longitude' => $this->string(),
             'alamat_sekarang' => $this->string(),
             'catatan' => $this->string(),
             'flag_data_lokasi' => $this->string(),
             'customer_pic_nama' => $this->string(),
             'customer_pic_phone' => $this->string(),
         ]);
         
         $this->createTable('satelite', [
             'id' => $this->primaryKey(),
             'nama' => $this->string()
         ]);
         
         $this->createTable('jarkom', [
             'id' => $this->primaryKey(),
             'nama' => $this->string()
         ]);
         
         $this->addForeignKey('fk-lokasi-task_id-task-id', 'lokasi', 'task_id', 'task', 'id', 'cascade', 'cascade');
         $this->addForeignKey('fk-lokasi-satelite_id-satelite-id', 'lokasi', 'satelite_id', 'satelite', 'id', 'cascade', 'cascade');
         $this->addForeignKey('fk-lokasi-jarkom_id-jarkom-id', 'lokasi', 'jarkom_id', 'jarkom', 'id', 'cascade', 'cascade');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190611_075018_tambahan_vid_survey cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190611_075018_tambahan_vid_survey cannot be reverted.\n";

        return false;
    }
    */
}
