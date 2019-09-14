<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jarkom".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Lokasi[] $lokasis
 */
class Jarkom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jarkom';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLokasis()
    {
        return $this->hasMany(Lokasi::className(), ['jarkom_id' => 'id']);
    }
}
