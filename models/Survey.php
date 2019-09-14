<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "survey".
 *
 * @property int $id
 * @property int $task_id
 * @property string $alamat_pengiriman_survey
 * @property string $tempat_penyimpanan_survey
 * @property string $nama_pic_survey
 * @property string $kontsk_pic_survey
 * @property string $penempatan_grounding_survey
 * @property string $ukuran_antena_survey
 * @property string $tempat_antena_survey
 * @property string $kekuatan_roof_survey
 * @property string $jenis_mounting_survey
 * @property string $latitude_survey
 * @property string $longitude_survey
 * @property string $listrik_awal_survey
 * @property string $sarpen_aci_indoor
 * @property string $sarpen_ups_survey
 * @property string $panjang_kabel_survey
 * @property string $type_kabel_survey
 * @property string $arah_antena_survey
 * @property string $keterangan_survey
 * @property string $status_hasil_survey
 * @property string $flag_data_survey
 *
 * @property Task $task
 */
class Survey extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'survey';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id'], 'integer'],
            [['alamat_pengiriman_survey', 'keterangan_survey'], 'string'],
            [['tempat_penyimpanan_survey', 'nama_pic_survey', 'kontsk_pic_survey', 'penempatan_grounding_survey', 'ukuran_antena_survey', 'tempat_antena_survey', 'kekuatan_roof_survey', 'jenis_mounting_survey', 'latitude_survey', 'longitude_survey', 'listrik_awal_survey', 'sarpen_aci_indoor', 'sarpen_ups_survey', 'panjang_kabel_survey', 'type_kabel_survey', 'arah_antena_survey', 'status_hasil_survey', 'flag_data_survey'], 'string', 'max' => 255],
            [['task_id'], 'exist', 'skipOnError' => true, 'targetClass' => Task::className(), 'targetAttribute' => ['task_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task_id' => 'Task ID',
            'alamat_pengiriman_survey' => 'Alamat Pengiriman Survey',
            'tempat_penyimpanan_survey' => 'Tempat Penyimpanan Survey',
            'nama_pic_survey' => 'Nama Pic Survey',
            'kontsk_pic_survey' => 'Kontsk Pic Survey',
            'penempatan_grounding_survey' => 'Penempatan Grounding Survey',
            'ukuran_antena_survey' => 'Ukuran Antena Survey',
            'tempat_antena_survey' => 'Tempat Antena Survey',
            'kekuatan_roof_survey' => 'Kekuatan Roof Survey',
            'jenis_mounting_survey' => 'Jenis Mounting Survey',
            'latitude_survey' => 'Latitude Survey',
            'longitude_survey' => 'Longitude Survey',
            'listrik_awal_survey' => 'Listrik Awal Survey',
            'sarpen_aci_indoor' => 'Sarpen Aci Indoor',
            'sarpen_ups_survey' => 'Sarpen Ups Survey',
            'panjang_kabel_survey' => 'Panjang Kabel Survey',
            'type_kabel_survey' => 'Type Kabel Survey',
            'arah_antena_survey' => 'Arah Antena Survey',
            'keterangan_survey' => 'Keterangan Survey',
            'status_hasil_survey' => 'Status Hasil Survey',
            'flag_data_survey' => 'Flag Data Survey',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Task::className(), ['id' => 'task_id']);
    }
}
