<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data_teknisi".
 *
 * @property int $id
 * @property int $task_id
 * @property string $fail_hw
 * @property string $sqf
 * @property string $initial_esno
 * @property string $carrier_to_noice
 * @property string $hasil_xpoll
 * @property string $cpi
 * @property string $operator_satelite
 * @property string $operator_helpdesk
 * @property string $out_pln
 * @property string $out_ups
 * @property string $ups_for_backup
 * @property string $suhu_ruangan
 * @property string $type_mounting
 * @property string $panjang_kabel
 * @property string $letak_antena
 * @property string $kondisi_bangunan
 * @property string $analisa_problem
 * @property string $aktifitas_solusi
 * @property string $flag_data_teknis
 *
 * @property Task $task
 */
class DataTeknisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data_teknisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task_id'], 'integer'],
            [['fail_hw', 'sqf', 'initial_esno', 'carrier_to_noice', 'hasil_xpoll', 'cpi', 'operator_satelite', 'operator_helpdesk', 'out_pln', 'out_ups', 'ups_for_backup', 'suhu_ruangan', 'type_mounting', 'panjang_kabel', 'letak_antena', 'kondisi_bangunan', 'analisa_problem', 'aktifitas_solusi', 'flag_data_teknis'], 'string', 'max' => 255],
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
            'fail_hw' => 'Fail Hw',
            'sqf' => 'Sqf',
            'initial_esno' => 'Initial Esno',
            'carrier_to_noice' => 'Carrier To Noice',
            'hasil_xpoll' => 'Hasil Xpoll',
            'cpi' => 'Cpi',
            'operator_satelite' => 'Operator Satelite',
            'operator_helpdesk' => 'Operator Helpdesk',
            'out_pln' => 'Out Pln',
            'out_ups' => 'Out Ups',
            'ups_for_backup' => 'Ups For Backup',
            'suhu_ruangan' => 'Suhu Ruangan',
            'type_mounting' => 'Type Mounting',
            'panjang_kabel' => 'Panjang Kabel',
            'letak_antena' => 'Letak Antena',
            'kondisi_bangunan' => 'Kondisi Bangunan',
            'analisa_problem' => 'Analisa Problem',
            'aktifitas_solusi' => 'Aktifitas Solusi',
            'flag_data_teknis' => 'Flag Data Teknis',
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
