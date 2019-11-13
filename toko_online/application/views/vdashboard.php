<div class="container-fluid">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url().'upload/slide/slide1.jpg'; ?>" class="d-block w-100 h-50" alt="...">
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


  <div class="row text-center mt-3">
  <?php foreach ($barang as $brg) : ?>
    <div class="card ml-3 mt-3" style="width: 16rem;">
      <img src="<?php echo base_url().'upload/barang/'.$brg->gambar; ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title mb-1"><?php echo $brg->nama_brg; ?></h5>
        <small><?php echo $brg->keterangan; ?></small>
        <span class="badge badge-primary mb-3">Rp. <?php echo number_format($brg->harga,0,',','.'); ?></span><br>
        <?php echo anchor('cdashboard/tambah_keranjang/'.$brg->id_barang, '<div class="btn btn-sm btn-primary"><i class="fa fa-cart-plus"></i></div>'); ?>
        <button type="button" data-toggle="modal" data-target="#detail<?php echo $brg->id_barang; ?>" class="btn btn-sm btn-success">Detail</button>
  </div>
</div>
  <?php endforeach; ?>
  </div>
</div>

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
                    <td>Rp. <?php echo number_format($i->harga,0,',','.') ?></td>
                  </tr>
                  <tr>
                    <td><?php echo anchor('cdashboard/tambah_keranjang/'.$brg->id_barang, '<div class="btn btn-sm btn-primary"><i class="fa fa-cart-plus"></i></div>'); ?>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                    </td>
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