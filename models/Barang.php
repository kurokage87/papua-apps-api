<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property int $task_id
 * @property string $nama_barang
 * @property string $type
 * @property string $SN
 * @property string $esnmodem
 * @property string $status
 * @property string $file_url
 * @property string $description
 * @property string $date_create
 * @property string $user_create
 * @property string $jenis_barang
 * @property string $iplan
 * @property string $file_user_create
 * @property string $file_date_create
 * @property string $keterangan
 * @property string $flag_data_barang
 *
 * @property Task $task
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id'], 'integer'],
            [['description', 'keterangan'], 'string'],
            [['nama_barang', 'type', 'SN', 'esnmodem', 'flag_data_barang' ,'file_url', 'date_create', 'user_create', 'jenis_barang', 'file_user_create'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 10],
            [['iplan', 'file_date_create'], 'string', 'max' => 100],
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
            'nama_barang' => 'Nama Barang',
            'type' => 'Type',
            'SN' => 'Sn',
            'esnmodem' => 'Esnmodem',
            'status' => 'Status',
            'file_url' => 'File Url',
            'description' => 'Description',
            'date_create' => 'Date Create',
            'user_create' => 'User Create',
            'jenis_barang' => 'Jenis Barang',
            'file_user_create' => 'File User Create',
            'file_date_create' => 'File Date Create',
            'keterangan' => 'Keterangan',
            'flag_data_barang' => "Flag Data Barang"
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
