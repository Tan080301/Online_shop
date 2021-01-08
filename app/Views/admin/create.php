<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="mt-5 pt-5 my-5">Form Tambah Barang</h2>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <form action="/pages/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama_barang')) ? 'is-invalid' : ''; ?>" id="nama_barang" name="nama_barang" autofocus value="<?= old('nama_barang'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama_barang'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('kode_barang')) ? 'is-invalid' : ''; ?>" id="kode_barang" name="kode_barang" value="<?= old('kode_barang'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('kode_barang'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('tipe')) ? 'is-invalid' : ''; ?>" id="tipe" name="tipe" value="<?= old('tipe'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('tipe'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('deskripsi')) ? 'is-invalid' : ''; ?>" id="deskripsi" name="deskripsi" value="<?= old('deskripsi'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('deskripsi'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="stock" class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('stock')) ? 'is-invalid' : ''; ?>" id="stock" name="stock" value="<?= old('stock'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('stock'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('harga')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" value="<?= old('harga'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('harga'); ?>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Foto Produk</label>
                    <div class="col-sm-4">
                        <img src="/img/default.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-6">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" id="sampul" name="sampul" onchange="previewImg()">
                            <div class="form-group row">
                                <div class="col-sm-10 my-4">
                                    <button type="submit" class="btn btn-success buttonmove">Tambah Data</button>
                                </div>
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('sampul'); ?>
                            </div>
                            <label class="custom-file-label" for="sampul">Pilih gambar..</label>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>