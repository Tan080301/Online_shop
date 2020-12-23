<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<ul class="list-group">
    <li class="promocolor pt-5 mt-4 text-light text-center">
        <marquee direction="left" scrollamount="8">New Year Sale, Discount up to 50% !</marquee>
    </li>
</ul>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

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

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="text-center pt-4">
    <h5>Produk Unggulan</h5>
</div>

<!-- Preview Produk -->

<div class="container">
    <div class="p-4">
        <div class="row">
            <?php foreach ($db_barang as $db) : ?>
                <div class="confcard card mt-4 ml-4 bcolor" style="width: 15rem;">
                    <img class="card-img-top" src="img/<?= $db['sampul']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $db['nama_barang']; ?></h5>
                        <p class="card-text"><?= $db['deskripsi']; ?></p>
                        <a href="/detail/<?= $db['slug']; ?>" class="btn btn-primary">Detail Produk</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>