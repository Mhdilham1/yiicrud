<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property int $id_prodi
 * @property int $id_jurusan
 * @property string $nama_prodi
 * @property string $keterangan
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jurusan', 'nama_prodi', 'keterangan'], 'required'],
            [['id_jurusan'], 'integer'],
            [['keterangan'], 'string'],
            [['nama_prodi'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_prodi' => 'Id Prodi',
            'id_jurusan' => 'Id Jurusan',
            'nama_prodi' => 'Nama Prodi',
            'keterangan' => 'Keterangan',
        ];
    }
    public static function getProdiList($id_jurusan){

        return self::find() -> select(['id_prodi as id','nama_prodi as name']) -> where(['id_jurusan' => $id_jurusan])
        ->asArray()->all();
    }
}
