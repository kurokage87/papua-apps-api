<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foto".
 *
 * @property int $id
 * @property int $task_id
 * @property string $file_url
 * @property string $keterangan
 * @property string $flag_upload_foto
 * @property string $file_usercreate
 * @property string $flagtime
 * @property string $description
 * @property string $your_image_64_name
 * @property string $your_image_64_file
 *
 * @property Task $task
 */
class Foto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id'], 'integer'],
            [['keterangan', 'description', 'your_image_64_file'], 'string'],
            [['file_url', 'flag_upload_foto', 'file_usercreate', 'flagtime', 'your_image_64_name'], 'string', 'max' => 255],
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
            'file_url' => 'File Url',
            'keterangan' => 'Keterangan',
            'flag_upload_foto' => 'Flag Upload Foto',
            'file_usercreate' => 'File Usercreate',
            'flagtime' => 'Flagtime',
            'description' => 'Description',
            'your_image_64_name' => 'Your Image 64 Name',
            'your_image_64_file' => 'Your Image 64 File',
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
