<?php 
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Data Barang</h1>
<p style="margin-top:30px">
<?= Html::a('Tambah Barang',['create'],['class' => 'btn btn-success']) ?>
</p>
<table class="table table-hover">
    <tr>
    <th>ID</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Satuan</th>
    <th>id_jenis</th>
    <th>id_supplier</th>
    <th>harga</th>
    <th>stok</th>
    </tr>
    <?php foreach($data_barang as $barang): ?>
    <tr>
    <td><?= Html::encode($barang->id) ?></td>
    <td><?= Html::encode($barang->kode_barang) ?></td>
    <td><?= Html::encode($barang->nama_barang) ?></td>
    <td><?= Html::encode($barang->satuan) ?></td>
    <td><?= Html::encode($barang->id_jenis) ?></td>
    <td><?= Html::encode($barang->id_supplier) ?></td>
    <td><?= Html::encode($barang->harga) ?></td>  
    <td><?= Html::encode($barang->stok) ?></td> 
    <td>
    <?= Html::a('Edit',['barang/update','id'=>$barang->id]) ?>
    |
    <?= Html::a('Hapus',['barang/delete','id'=>$barang->id],
                ['onclick'=> 'return(confirm("Yakin Menghapus Data Barang ?"))'])
    ?>
    </td>
    </tr>
    <?php endforeach; ?>
</table>
<?= LinkPager::widget(['pagination'=> $pagination]) ?>