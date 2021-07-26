<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mahasiswa;

/**
 * MahasiswaSearch represents the model behind the search form of `app\models\Mahasiswa`.
 */
class MahasiswaSearch extends Mahasiswa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'id_provinsi', 'id_kota', 'id_jurusan', 'id_prodi'], 'integer'],
            [['nama_mahasiswa', 'jenis_kelamin', 'tanggal_lahir','file_foto'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Mahasiswa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_mahasiswa' => $this->id_mahasiswa,
            'tanggal_lahir' => $this->tanggal_lahir,
            'id_provinsi' => $this->id_provinsi,
            'id_kota' => $this->id_kota,
            'id_jurusan' => $this->id_jurusan,
            'id_prodi' => $this->id_prodi,
        ]);

        $query->andFilterWhere(['like', 'nama_mahasiswa', $this->nama_mahasiswa])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin]);

        return $dataProvider;
    }
}
