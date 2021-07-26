<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kota".
 *
 * @property int $id_kota
 * @property string $nama_kota
 * @property int $id_provinsi
 */
class Kota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_kota', 'id_provinsi'], 'required'],
            [['id_provinsi'], 'integer'],
            [['nama_kota'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kota' => 'Id Kota',
            'nama_kota' => 'Nama Kota',
            'id_provinsi' => 'Id Provinsi',
        ];
    }

    public static function getKotaList($id_provinsi){

        return self::find() -> select(['id_kota as id','nama_kota as name']) -> where(['id_provinsi' => $id_provinsi])
        ->asArray()->all();
    }
}