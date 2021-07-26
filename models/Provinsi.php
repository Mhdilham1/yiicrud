<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "provinsi".
 *
 * @property int $id_provinsi
 * @property string $nama_provinsi
 */
class Provinsi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'provinsi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_provinsi'], 'required'],
            [['nama_provinsi'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_provinsi' => 'Id Provinsi',
            'nama_provinsi' => 'Nama Provinsi',
        ];
    }

    public static function getProvinsiList(){
        return Self::find()->select(['nama_provinsi'])->indexBy('id_provinsi')->column();
    }
}
