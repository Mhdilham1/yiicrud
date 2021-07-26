<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jurusan".
 *
 * @property int $id_jurusan
 * @property string $nama_jurusan
 * @property string $keterangan
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurusan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_jurusan', 'keterangan'], 'required'],
            [['keterangan'], 'string'],
            [['nama_jurusan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jurusan' => 'Id Jurusan',
            'nama_jurusan' => 'Nama Jurusan',
            'keterangan' => 'Keterangan',
        ];
    }
    public static function getJurusanList(){
        return self::find() -> select(["nama_jurusan as name"])-> indexBy("id_jurusan") -> column();
    }
}
