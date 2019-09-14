<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "satelite".
 *
 * @property int $id
 * @property string $nama
 *
 * @property Lokasi[] $lokasis
 */
class Satelite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'satelite';
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
        return $this->hasMany(Lokasi::className(), ['satelite_id' => 'id']);
    }
}
