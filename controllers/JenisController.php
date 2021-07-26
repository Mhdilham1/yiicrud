<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Jenis;

class JenisController extends Controller{
    public function actionIndex()
    {
        $query = jenis::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $data_jenis = $query -> orderBy('id')
        -> offset($pagination->offset)
        -> limit($pagination->limit)
        -> all();
        return $this->render('index',[
            'data_jenis'=> $data_jenis,
            'pagination'=> $pagination,
        ]);
    }
    public function actionCreate()
    {
        $model = new Jenis;
        if($model->load(Yii::$app->request->post() ) && $model-> save()){
            Yii::$app->session->setFlash('success','Data Jenis Berhasil di Simpan');
            return $this->refresh();
        }
        return $this->render('create',['model'=>$model,]);
    }
    public function actionUpdate($id)
    {
        $model = Jenis::findOne($id);

        if($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success','Data Jenis Berhasil di Ubah');
            return $this->refresh();
        }
        return $this->render('update',['model'=>$model,]);
    }
    public function actionDelete($id){
        $model = Jenis::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success','Data Jenis Berhasil di Hapus');
        return $this->redirect(['index']);
    }
}
?>