<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                    $grand_total = 0;
                    if($keranjang = $this->cart->contents()){
                        foreach($keranjang as $item){
                            $grand_total = $grand_total + $item['subtotal'];
                        }
                        echo "<h5>Total Belanja Anda : Rp. " .number_format($grand_total,0,',','.');
                ?>
            </div><br><br>
            <h3>Isi Alamat Pembayaran dan Pengiriman</h3>
            <form method="post" action="<?php echo base_url(), 'cdashboard/proses_pesanan' ?>">
                    <div class="form-group">
                       <label>Nama Lengkap</label> 
                       <input type="text" name="nama" placeholder="Nama lengkap" class="form-control">
                    </div>
                    <div class="form-group">
                       <label>Alamat</label> 
                       <input type="text" name="alamat" placeholder="Alamat" class="form-control">
                    </div>
                    <div class="form-group">
                       <label>Nomor telepon</label> 
                       <input type="text" name="no_telp" placeholder="Nomor Telepon" class="form-control">
                    </div>
                    <div class="form-group">
                       <label>Jasa pengiriman</label> 
                       <select name="jasa" class="form-control">
                           <option value="JNE">JNE</option>
                           <option value="TIKI">TIKI</option>
                       </select>
                    </div>
                    <div class="form-group">
                       <label>Pilih Bank</label> 
                       <select name="bank" class="form-control">
                           <option value="BRI">BRI - 0000000000</option>
                           <option value="BNI">BNI - 0000000000</option>
                       </select>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>
            <?php 
                    }else{
                        echo "<h3>Keranjang Belanja Kosong</h3>";
                    }
            ?>
        </div>
       
        <div class="col-md-2"></div>
    </div>
</div>