<div class="container-fluid">
        <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>Tambah Data</button>
        <table class="table table-hover mt-1">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>kategori</th>
                <th>harga</th>
                <th>Stok</th>
                <th colspan="3">Aksi</th>
            </tr>
            </thead>
            <?php 
                $no = 1;
                foreach($barang as $brg) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $brg->nama_brg; ?></td>
                <td><?php echo substr($brg->keterangan,0,10); ?></td>
                <td><?php echo $brg->kategori; ?></td>
                <td><?php echo $brg->harga; ?></td>
                <td><?php echo $brg->stok; ?></td>
                <td>
                <div class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detail<?php echo $brg->id_barang; ?>"><i class="fa fa-search"></i></div>
                  <div class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $brg->id_barang; ?>"><i class="fa fa-edit"></i></div>
                <?php echo anchor('admin/databarang/hapus/'.$brg->id_barang, '<div class="btn btn-sm btn-danger" onclick=""><i class="fa fa-trash"></i></div>') ?></td>
            </tr>
                <?php endforeach; ?>
        </table>
</div>

<!---Modal add--->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tamba">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/databarang/tambah'?>" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-group has-feedback">
                <label>Nama barang</label>
                <input type="text" class="form-control textbox" id="nama" name="nama_brg" required>
                <div class="invalid-feedback">nama barang masih kosong</div>
            </div>
            <div class="form-group has-feedback">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan" required>
                <div class="invalid-feedback">Kategori masih kosong</div>
            </div>
            <div class="form-group has-feedback">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    <option value="Pakaian">Pakaian</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Elektronik">Olahraga</option>
                </select>
            </div>
            <div class="form-group has-feedback">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" required>
                <div class="invalid-feedback">Harga barang masih kosong</div>
            </div>
            <div class="form-group has-feedback">
                <label>Stok</label>
                <input type="number" class="form-control" name="stok" required>
                <div class="invalid-feedback">Stok barang masih kosong</div>
            </div>
            <div class="form-group has-feedback">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar">
                <div class="invalid-feedback">Belum upload gambar</div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!---Modal edit--->
<?php 
  foreach($barang as $i) : 
?>
<div class="modal fade" id="edit<?php echo $i->id_barang; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tamba">Edit Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/databarang/edit_data'?>" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-group has-feedback">
                <label>Nama barang</label>
                <input type="hidden" name="id_barang" value="<?php echo $i->id_barang; ?>">
                <input type="text" class="form-control textbox" value="<?php echo $i->nama_brg; ?>" name="nama_brg" required>
                <div class="invalid-feedback">nama barang masih kosong</div>
            </div>
            <div class="form-group has-feedback">
                <label>Keterangan</label>
                <input type="text" class="form-control" name="keterangan" value="<?php echo $i->keterangan; ?>" required>
                <div class="invalid-feedback">keterangan masih kosong</div>
            </div>
            <div class="form-group has-feedback">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    <option value="Pakaian">Pakaian</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Elektronik">Olahraga</option>
                </select>
            </div>
            <div class="form-group has-feedback">
                <label>Harga</label>
                <input type="number" class="form-control" value="<?php echo $i->harga; ?>" name="harga" required>
                <div class="invalid-feedback">Harga barang masih kosong</div>
            </div>
            <div class="form-group has-feedback">
                <label>Stok</label>
                <input type="number" class="form-control" value="<?php echo $i->stok; ?>" name="stok" required>
                <div class="invalid-feedback">Stok barang masih kosong</div>
            </div>
            <div class="form-group has-feedback">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar" required>
                <div class="invalid-feedback">Belum upload gambar</div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="btn btn-primary">Edit</button>
      </div>
      </form>
    </div>
  </div>
</div>
  <?php endforeach; ?>
  <!---Modal Detail--->
<?php 
foreach($barang as $i) : ?>
<div class="modal fade detail" id="detail<?php echo $i->id_barang; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card">
          <h5 class="card-header">Datail Barang</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <img src="<?php echo base_url().'upload/barang/'.$i->gambar; ?>" class="card-img-top">
              </div>
              <div class="col-md-8">
                <table class="table">
                  <tr>
                    <td>Nama Barang</td>
                    <td><?php echo $i->nama_brg ?></td>
                  </tr>
                  <tr>
                    <td>Keterangan</td>
                    <td><?php echo $i->nama_brg ?></td>
                  </tr>
                  <tr>
                    <td>Kategori</td>
                    <td><?php echo $i->kategori ?></td>
                  </tr>
                  <tr>
                    <td>Nama Barang</td>
                    <td>Rp. <?php echo number_format($i->harga,0,',','.'); ?></td>
                  </tr>
                  <tr>
                    <td>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    </td>
                    <td></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<?php endforeach; ?>

