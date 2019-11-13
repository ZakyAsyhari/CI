<div class="container-fluid">
        <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus"></i>Tambah Data</button>
        <table class="table table-hover mt-1">
            <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th colspan="3">Aksi</th>
            </tr>
            </thead>
            <?php 
                $no = 1;
                foreach($kategori as $ktg) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $ktg->kategori; ?></td>
                <td><div class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $ktg->id_kategori; ?>"><i class="fa fa-edit"></i></div>
                <?php echo anchor('admin/datakategori/hapus/'.$ktg->id_kategori, '<div class="btn btn-sm btn-danger" onclick=""><i class="fa fa-trash"></i></div>') ?></td>
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
        <form action="<?php echo base_url(). 'admin/datakategori/tambah'?>" class="needs-validation" method="post" novalidate>
            <div class="form-group has-feedback">
                <label>Nama Kategori</label>
                <input type="text" class="form-control textbox" id="nama" name="kategori" required>
                <div class="invalid-feedback">nama Kategori masih kosong</div>
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
  foreach($kategori as $i) :
?>
<div class="modal fade" id="edit<?php echo $i->id_kategori; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tamba">Tambah Data Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/datakategori/edit'?>" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
            <div class="form-group has-feedback">
                <label>ID</label>
                <input type="text" class="form-control textbox" value="<?php echo $i->id_kategori; ?>" name="id" readonly>
            </div>
            <div class="form-group has-feedback">
                <label>Nama Kategori</label>
                <input type="text" class="form-control textbox" id="nama" value="<?php echo $i->kategori; ?>" name="kategori" required>
                <div class="invalid-feedback">nama Kategori masih kosong</div>
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
  <?php endforeach; ?>