<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cost_task".
 *
 * @property int $id
 * @property string $cost
 * @property string $keterangan
 * @property string $status_cost
 * @property int $task_id
 *
 * @property Task $task
 */
class CostTask extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cost_task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cost', 'task_id'], 'integer'],
            [['keterangan'], 'string', 'max' => 255],
            [['status_cost'], 'string', 'max' => 50],
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
            'cost' => 'Cost',
            'keterangan' => 'Keterangan',
            'status_cost' => 'Status Cost',
            'task_id' => 'Task ID',
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
