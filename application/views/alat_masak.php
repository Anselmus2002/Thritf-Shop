<duv class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
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

<div class="row text-center mt-4">
    <?php foreach ($alat_masak as $brg) : ?>

        <div class="card ml-3 mb-3" style="width: 18rem;">
  <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" class="card-img-top" alt="Image" height="300" width="40">
  <div class="card-body">
    <h5 class="card-title mb-1"><?php echo $brg->nama_barang?></h5>
    <p class="card-text"><?php echo $brg->detail_barang?></p>
    <span class="badge badge-pill bg-success mb-3">Rp. <?php 
    echo number_format($brg->harga), 0,',','.' ?></span><br>
    <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->kode_barang,
    '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
    <?php echo anchor('dashboard/detail/'.$brg->kode_barang,
    '<div class="btn btn-sm btn-success">Detail</div>') ?>
  </div>
</div>

    <?php endforeach ?>
</div>
</duv>