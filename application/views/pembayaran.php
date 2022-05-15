<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $grand_total = 0 ;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    
                    echo "Total Belanja Anda: Rp. " . number_format($grand_total,0,',','.');
                 ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?> ">

                <div class="from-group mb-3">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="from-group mb-3">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="from-group mb-3">
                    <label>Nomor Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>

                <div class="from-group mb-3">
                    <label>Jasa Pengiriman</label>
                    <select>
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>Pos Indonesia</option>
                        <option>GOJEK</option>
                    </select>
                </div>

                <div class="from-group mb-3">
                    <label>Pilih BANK</label>
                    <select>
                        <option>BCA - 123 45678 9</option>
                        <option>BNI - 234 56789 0</option>
                        <option>BRI - 345 67890 1</option>
                        <option>MANDIRI - 456 78901 2</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>

            </form>
            <?php
            }else{
                echo "Keranjang Belanja Anda Masih Kosong !!";
            }?>
        </div>

        <div class="col-md-2"></div>
    </div>
</div>