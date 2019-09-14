<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenis_biaya".
 *
 * @property int $id
 * @property string $nama_jenis_biaya
 *
 * @property Spd[] $spds
 */
class JenisBiaya extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_biaya';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_jenis_biaya'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_jenis_biaya' => 'Nama Jenis Biaya',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSpds()
    {
        return $this->hasMany(Spd::className(), ['jenis_biaya_id' => 'id']);
    }
}
