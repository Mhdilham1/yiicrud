<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Supplier;

class SupplierController extends Controller{
    public function actionIndex()
    {
        $query = supplier::find();
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);
        $data_supplier = $query -> orderBy('id')
        -> offset($pagination->offset)
        -> limit($pagination->limit)
        -> all();
        return $this->render('index',[
            'data_supplier'=> $data_supplier,
            'pagination'=> $pagination,
        ]);
    }
    public function actionCreate()
    {
        $model = new Supplier;
        if($model->load(Yii::$app->request->post() ) && $model-> save()){
            Yii::$app->session->setFlash('success','Data Supplier Berhasil di Simpan');
            return $this->refresh();
        }
        return $this->render('create',['model'=>$model,]);
    }
    public function actionUpdate($id)
    {
        $model = Supplier::findOne($id);

        if($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success','Data Supplier Berhasil di Ubah');
            return $this->refresh();
        }
        return $this->render('update',['model'=>$model,]);
    }
    public function actionDelete($id){
        $model = Supplier::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success','Data Supplier Berhasil di Hapus');
        return $this->redirect(['index']);
    }
}
?>