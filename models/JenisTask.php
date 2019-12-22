<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_task".
 *
 * @property int $id
 * @property string $installation
 * @property string $pm
 * @property string $cm
 *
 * @property Task[] $tasks
 */
class JenisTask extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['installation', 'pm', 'cm'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'installation' => 'Installation',
            'pm' => 'Pm',
            'cm' => 'Cm',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTasks()
    {
        return $this->hasMany(Task::className(), ['id_jenis_task' => 'id']);
    }
}
