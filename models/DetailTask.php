<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detail_task".
 *
 * @property int $id
 * @property int $task_id
 * @property int $id_status_perbaikan
 * @property string $flag_data_instalasi
 * @property string $diameter_antena
 * @property string $polarisasi_arah_antena
 * @property string $elevasi_arah_antena
 * @property string $azimuth_arah_antena
 * @property string $kvaups
 * @property string $ip_management
 * @property string $receive_symbole_rate
 * @property string $phase_netral_pln
 * @property string $phase_netral_ups
 * @property string $phase_netral_genset
 * @property string $phase_ground_pln
 * @property string $phase_ground_ups
 * @property string $phase_ground_genset
 * @property string $netral_ground_pln
 * @property string $netral_ground_ups
 * @property string $netral_ground_genset
 * @property string $satelite_longitude
 * @property string $iplan1
 * @property string $subnetmask1
 * @property string $iplan2
 * @property string $subnetmask2
 * @property string $hasil_test_alamat1
 * @property string $success_test1
 * @property string $loss_test1
 * @property string $keterangan_test1
 * @property string $hasil_test_alamat2
 * @property string $success_test2
 * @property string $loss_test2
 * @property string $keterangan_test2
 * @property string $hasil_test_alamat3
 * @property string $success_test3
 * @property string $loss_test3
 * @property string $keterangan_test3
 *
 * @property Task $task
 */
class DetailTask extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'detail_task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'id_status_perbaikan'], 'integer'],
            [['flag_data_instalasi'], 'string', 'max' => 11],
            [['diameter_antena', 'polarisasi_arah_antena', 'elevasi_arah_antena', 'azimuth_arah_antena', 'kvaups', 'satelite_longitude', 'hasil_test_alamat1', 'success_test1', 'loss_test1', 'keterangan_test1', 'hasil_test_alamat2', 'success_test2', 'loss_test2', 'keterangan_test2', 'hasil_test_alamat3', 'success_test3', 'loss_test3', 'keterangan_test3'], 'string', 'max' => 255],
            [['ip_management', 'receive_symbole_rate', 'phase_netral_pln', 'phase_netral_ups', 'phase_netral_genset', 'phase_ground_pln', 'phase_ground_ups', 'phase_ground_genset', 'netral_ground_pln', 'netral_ground_ups', 'netral_ground_genset', 'iplan1', 'subnetmask1', 'iplan2', 'subnetmask2'], 'string', 'max' => 100],
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
            'id_status_perbaikan' => 'Id Status Perbaikan',
            'flag_data_instalasi' => 'Flag Data Instalasi',
            'diameter_antena' => 'Diameter Antena',
            'polarisasi_arah_antena' => 'Polarisasi Arah Antena',
            'elevasi_arah_antena' => 'Elevasi Arah Antena',
            'azimuth_arah_antena' => 'Azimuth Arah Antena',
            'kvaups' => 'Kvaups',
            'ip_management' => 'Ip Management',
            'receive_symbole_rate' => 'Receive Symbole Rate',
            'phase_netral_pln' => 'Phase Netral Pln',
            'phase_netral_ups' => 'Phase Netral Ups',
            'phase_netral_genset' => 'Phase Netral Genset',
            'phase_ground_pln' => 'Phase Ground Pln',
            'phase_ground_ups' => 'Phase Ground Ups',
            'phase_ground_genset' => 'Phase Ground Genset',
            'netral_ground_pln' => 'Netral Ground Pln',
            'netral_ground_ups' => 'Netral Ground Ups',
            'netral_ground_genset' => 'Netral Ground Genset',
            'satelite_longitude' => 'Satelite Longitude',
            'iplan1' => 'Iplan1',
            'subnetmask1' => 'Subnetmask1',
            'iplan2' => 'Iplan2',
            'subnetmask2' => 'Subnetmask2',
            'hasil_test_alamat1' => 'Hasil Test Alamat1',
            'success_test1' => 'Success Test1',
            'loss_test1' => 'Loss Test1',
            'keterangan_test1' => 'Keterangan Test1',
            'hasil_test_alamat2' => 'Hasil Test Alamat2',
            'success_test2' => 'Success Test2',
            'loss_test2' => 'Loss Test2',
            'keterangan_test2' => 'Keterangan Test2',
            'hasil_test_alamat3' => 'Hasil Test Alamat3',
            'success_test3' => 'Success Test3',
            'loss_test3' => 'Loss Test3',
            'keterangan_test3' => 'Keterangan Test3',
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
