<div class="container-fluid">
<?php foreach($barang as $brg): ?>
<div class="card">
  <h5 class="card-header"><strong>DETAIL PRODUK
  <div class="btn btn-sm btn-success">Nomor Id Produk <?php echo $brg->kode_barang ?>
    
  </strong></h5>
  <div class="card-body">
      
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>"alt="Image" height="400" width="300">
        </div>
        <div class="col-md-4">
          <table class="table">

            <tr>
              <td>NAMA PRODUK</td>
              <td><strong><?php echo $brg->nama_barang ?></strong></td>
            </tr>

            <tr>
              <td>KETERANGAN</td>
              <td><strong><?php echo $brg->detail_barang ?></strong></td>
            </tr>

            <tr>
              <td>KATEGORI</td>
              <td><strong><?php echo $brg->kategori ?></strong></td>
            </tr>

            <tr>
              <td>HARGA</td>
              <td><strong><div class="btn btn-sm btn-info">Rp. <?php echo number_format($brg->harga),0,',','.' ?></div></strong></td>
            </tr>

            <tr>
              <td>JUMLAH STOK</td>
              <td><strong><?php echo $brg->stok ?></strong></td>
            </tr>

          </table>

          <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->kode_barang,
    '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>

<?php echo anchor('welcome/index/',
    '<div class="btn btn-sm btn-danger">Kembali</div>') ?>

        </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

</div>