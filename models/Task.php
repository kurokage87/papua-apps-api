<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property string $nama_remote
 * @property string $alamat
 * @property string $no_task
 * @property int $vid
 * @property string $tanggal_task
 * @property string $provinsi
 * @property int $id_jenis_task
 * @property string $nama_kordinator
 * @property int $user_id
 * @property string $status_task
 * @property string $nama_task
 * @property string $no_stamp
 *
 * @property Barang[] $barangs
 * @property CostTask[] $costTasks
 * @property DataTeknisi[] $dataTeknisis
 * @property DetailTask[] $detailTasks
 * @property Foto[] $fotos
 * @property GeneralInfo[] $generalInfos
 * @property Lokasi[] $lokasis
 * @property Spd[] $spds
 * @property Survey[] $surveys
 * @property User $user
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['alamat'], 'string'],
            [['vid', 'id_jenis_task', 'user_id'], 'integer'],
            [['nama_task'], 'required'],
            [['nama_remote', 'no_task', 'tanggal_task', 'provinsi', 'nama_kordinator', 'status_task', 'nama_task', 'no_stamp'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_remote' => 'Nama Remote',
            'alamat' => 'Alamat',
            'no_task' => 'No Task',
            'vid' => 'Vid',
            'tanggal_task' => 'Tanggal Task',
            'provinsi' => 'Provinsi',
            'id_jenis_task' => 'Id Jenis Task',
            'nama_kordinator' => 'Nama Kordinator',
            'user_id' => 'User ID',
            'status_task' => 'Status Task',
            'nama_task' => 'Nama Task',
            'no_stamp' => 'No Stamp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['task_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCostTasks()
    {
        return $this->hasMany(CostTask::className(), ['task_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataTeknisis()
    {
        return $this->hasMany(DataTeknisi::className(), ['task_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetailTasks()
    {
        return $this->hasMany(DetailTask::className(), ['task_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFotos()
    {
        return $this->hasMany(Foto::className(), ['task_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGeneralInfos()
    {
        return $this->hasMany(GeneralInfo::className(), ['task_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLokasis()
    {
        return $this->hasMany(Lokasi::className(), ['task_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpds()
    {
        return $this->hasMany(Spd::className(), ['task_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSurveys()
    {
        return $this->hasMany(Survey::className(), ['task_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
