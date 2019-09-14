<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "general_info".
 *
 * @property int $id
 * @property int $task_id
 * @property int $atm_id
 * @property string $IPLAN
 * @property string $tgl_berangkat
 * @property string $tgl_selesai_kerjaan
 * @property string $tgl_pulang
 * @property string $tgl_status_perbaikan
 * @property string $user_update
 * @property string $date_update
 * @property string $flag_general_info
 *
 * @property Task $task
 */
class GeneralInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'general_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id', 'atm_id'], 'integer'],
            [['IPLAN', 'tgl_berangkat', 'tgl_selesai_kerjaan', 'tgl_pulang', 'tgl_status_perbaikan', 'user_update', 'date_update', 'flag_general_info'], 'string', 'max' => 255],
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
            'atm_id' => 'Atm ID',
            'IPLAN' => 'Iplan',
            'tgl_berangkat' => 'Tgl Berangkat',
            'tgl_selesai_kerjaan' => 'Tgl Selesai Kerjaan',
            'tgl_pulang' => 'Tgl Pulang',
            'tgl_status_perbaikan' => 'Tgl Status Perbaikan',
            'user_update' => 'User Update',
            'date_update' => 'Date Update',
            'flag_general_info' => 'Flag General Info',
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
