<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="mt-5 pt-1">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="carousel/slide1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="carousel/slide2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="carousel/slide3.jpg" alt="Third slide">
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="text-center pt-3">
    <h5>Produk Unggulan</h5>
</div>

<!-- Preview Produk -->

<?php $i = 0 ?>
<?php foreach ($db_barang as $db) : ?>
    <div class="container">
        <div class="p-4">
            <?php if ($i = 0) : ?>
                <div class="stylo">
                <?php endif; ?>
                <div class="card" style="width: 15rem;">
                    <img class="card-img-top" src="img/<?= $db['sampul']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $db['nama_barang']; ?></h5>
                        <p class="card-text"><?= $db['deskripsi']; ?></p>
                        <a href="#" class="btn btn-primary">Detail Produk</a>
                    </div>
                </div>
                </div>
        </div>
    </div>
<?php endforeach ?>

<?= $this->endSection(); ?>




<div class="container">
    <div class="p-4">
        <div class="">
            <div class="card" style="width: 15rem;">
                <img class="card-img-top" src="img/headphone.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">asdasd</h5>
                    <p class="card-text">asd</p>
                    <a href="#" class="btn btn-primary">Detail Produk</a>
                </div>
            </div>

            <div class="card" style="width: 15rem;">
                <img class="card-img-top" src="img/headphone.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">asdasd</h5>
                    <p class="card-text">asd</p>
                    <a href="#" class="btn btn-primary">Detail Produk</a>
                </div>
            </div>
        </div>
    </div>
</div>