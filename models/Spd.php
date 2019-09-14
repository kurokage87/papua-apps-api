<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spd".
 *
 * @property int $id
 * @property string $flagconfirm
 * @property string $iplan
 * @property string $id_alamat
 * @property string $file_url
 * @property string $description
 * @property int $task_id
 * @property string $catatan_transaksi
 * @property int $jenis_biaya_id
 * @property string $nominal
 * @property string $tgl_input_biaya
 * @property string $sisa
 * @property string $status_spd
 * @property string $flagtime
 * @property string $flagupload
 * @property string $file_usercreate
 * @property string $file_datecreate
 * @property string $keterangan
 * @property string $yout_image_64_name
 * @property string $your_image_64_file
 *
 * @property JenisBiaya $jenisBiaya
 * @property Task $task
 */
class Spd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spd';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['iplan'], 'required'],
            [['task_id', 'jenis_biaya_id', 'nominal'], 'integer'],
            [['keterangan', 'your_image_64_file'], 'string'],
            [['flagconfirm', 'tgl_input_biaya', 'status_spd'], 'string', 'max' => 50],
            [['iplan'], 'string', 'max' => 100],
            [['id_alamat', 'file_url', 'description', 'catatan_transaksi', 'sisa', 'flagtime', 'flagupload', 'file_usercreate', 'file_datecreate', 'yout_image_64_name'], 'string', 'max' => 255],
            [['jenis_biaya_id'], 'exist', 'skipOnError' => true, 'targetClass' => JenisBiaya::className(), 'targetAttribute' => ['jenis_biaya_id' => 'id']],
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
            'flagconfirm' => 'Flagconfirm',
            'iplan' => 'Iplan',
            'id_alamat' => 'Id Alamat',
            'file_url' => 'File Url',
            'description' => 'Description',
            'task_id' => 'Task ID',
            'catatan_transaksi' => 'Catatan Transaksi',
            'jenis_biaya_id' => 'Jenis Biaya ID',
            'nominal' => 'Nominal',
            'tgl_input_biaya' => 'Tgl Input Biaya',
            'sisa' => 'Sisa',
            'status_spd' => 'Status Spd',
            'flagtime' => 'Flagtime',
            'flagupload' => 'Flagupload',
            'file_usercreate' => 'File Usercreate',
            'file_datecreate' => 'File Datecreate',
            'keterangan' => 'Keterangan',
            'yout_image_64_name' => 'Yout Image 64 Name',
            'your_image_64_file' => 'Your Image 64 File',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJenisBiaya()
    {
        return $this->hasOne(JenisBiaya::className(), ['id' => 'jenis_biaya_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTask()
    {
        return $this->hasOne(Task::className(), ['id' => 'task_id']);
    }
}
