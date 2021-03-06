<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>
    
    <?php foreach($barang as $brg) : ?>

        <form method="post" action="<?php echo base_url(). 'admin/data_barang/update' ?>">

        <div class="for-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control"
            value="<?php echo $brg->nama_barang ?>">
        </div>

        <div class="for-group">
            <label>Kategori</label>
            <input type="hidden" name="kode_barang" class="form-control"
            value="<?php echo $brg->kode_barang ?>">

            <input type="text" name="kategori" class="form-control"
            value="<?php echo $brg->kategori ?>">
        </div>

        <div class="for-group">
            <label>Detail Barang</label>
            <input type="text" name="detail_barang" class="form-control"
            value="<?php echo $brg->detail_barang ?>">
        </div>

        <div class="for-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control"
            value="<?php echo $brg->harga ?>">
        </div>

        <div class="for-group">
            <label>Stok</label>
            <input type="text" name="stok" class="form-control"
            value="<?php echo $brg->stok ?>">
        </div>

        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>

        </form>

    <?php endforeach; ?>

</div>