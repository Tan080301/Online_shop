<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 detail-page ">
            <div class="container">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="/img/<?= $db_barang['sampul']; ?>" alt="Card image cap">
                    </div>
                    <div class="card-body pt-5">
                        <table class="table">
                            <tr>
                                <th>Nama Barang</th>
                                <td><?= $db_barang['nama_barang']; ?></td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td><?= $db_barang['deskripsi']; ?></td>
                            </tr>
                            <tr>
                                <th>Tipe</th>
                                <td><?= $db_barang['tipe']; ?></td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td><?= $db_barang['stock']; ?></td>
                            </tr>
                            <tr>
                                <th>Harga</th>
                                <td>Rp. <?= $db_barang['harga']; ?></td>
                            </tr>
                        </table>
                        <div class="pt-2">
                            <a href="#" class="btn btn-success">Pesan Sekarang</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>