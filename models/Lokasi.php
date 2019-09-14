<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lokasi".
 *
 * @property int $id
 * @property int $task_id
 * @property string $kanwil
 * @property string $kanca_induk
 * @property string $alamat_install
 * @property string $provinsi
 * @property string $kota
 * @property int $jarkom_id
 * @property int $satelite_id
 * @property string $nama_pic
 * @property string $no_hp_pic
 * @property string $hub
 * @property string $latitude
 * @property string $longitude
 * @property string $alamat_sekarang
 * @property string $catatan
 * @property string $flag_data_lokasi
 * @property string $customer_pic_nama
 * @property string $customer_pic_phone
 *
 * @property Jarkom $jarkom
 * @property Satelite $satelite
 * @property Task $task
 */
class Lokasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lokasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'jarkom_id', 'satelite_id'], 'integer'],
            [['alamat_install'], 'string'],
            [['kanwil', 'kanca_induk', 'provinsi', 'kota', 'nama_pic', 'no_hp_pic', 'hub', 'latitude', 'longitude', 'alamat_sekarang', 'catatan', 'flag_data_lokasi', 'customer_pic_nama', 'customer_pic_phone'], 'string', 'max' => 255],
            [['jarkom_id'], 'exist', 'skipOnError' => true, 'targetClass' => Jarkom::className(), 'targetAttribute' => ['jarkom_id' => 'id']],
            [['satelite_id'], 'exist', 'skipOnError' => true, 'targetClass' => Satelite::className(), 'targetAttribute' => ['satelite_id' => 'id']],
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
            'kanwil' => 'Kanwil',
            'kanca_induk' => 'Kanca Induk',
            'alamat_install' => 'Alamat Install',
            'provinsi' => 'Provinsi',
            'kota' => 'Kota',
            'jarkom_id' => 'Jarkom ID',
            'satelite_id' => 'Satelite ID',
            'nama_pic' => 'Nama Pic',
            'no_hp_pic' => 'No Hp Pic',
            'hub' => 'Hub',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'alamat_sekarang' => 'Alamat Sekarang',
            'catatan' => 'Catatan',
            'flag_data_lokasi' => 'Flag Data Lokasi',
            'customer_pic_nama' => 'Customer Pic Nama',
            'customer_pic_phone' => 'Customer Pic Phone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJarkom()
    {
        return $this->hasOne(Jarkom::className(), ['id' => 'jarkom_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSatelite()
    {
        return $this->hasOne(Satelite::className(), ['id' => 'satelite_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Task::className(), ['id' => 'task_id']);
    }
}
