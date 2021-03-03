<?php Flasher::flash()?>  <!-- Header -->
  <div class="header pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 d-inline-block mb-0">Alternative</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links">
                <li class="breadcrumb-item"><a href="<?=BASEURL?>/admin/index"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="<?=BASEURL?>/admin/pengiriman">Pengiriman</a></li>
                <!-- <li class="breadcrumb-item active" aria-current="page">Alternative</li> -->
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page content -->
  <div class="container-fluid mt--6">
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Pengiriman</h3>
            <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#exampleModalCenter">Tambah Pengiriman</button>
          </div>
          <div class="table-responsive py-4">
            <table class="table table-flush" id="datatable-basic">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>S. P.</th>
                  <th>Colli</th>
                  <th>Berat Pengiriman</th>
                  <th>Franco</th>
                  <th>Confrankert</th>
                  <th>Penerima Barang</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>S. P.</th>
                  <th>Colli</th>
                  <th>Berat Pengiriman</th>
                  <th>Franco</th>
                  <th>Confrankert</th>
                  <th>Penerima Barang</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach ($data['pengiriman'] as $index => $value) : ?>
                  <?php $i = 1 ?>
                  <tr>
                    <td><?= $i ?></td>
                    <td><?= $value['kode_pengiriman'] ?></td>
                    <td><?= $value['jumlah_pengiriman'] ?></td>
                    <td><?= $value['berat'] ?></td>
                    <td><?= $value['franco'] == "true" ? "Sudah lunas" : "Belum lunas" ?></td>
                    <td><?= $value['confrankert'] ?></td>
                    <td><?= $value['penerima_barang'] ?></td>
                    <td><?= $value['keterangan'] ?></td>
                    <td><a href="<?= BASEURL ?>/home/edit_pengiriman/<?= $value['id_pengiriman'] ?>" class="btn btn-facebook text-white btn-icon-only btn-sm">
                        <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                      </a>
                      <a href="<?= BASEURL ?>/home/hapus_pengiriman/<?= $value['id_pengiriman'] ?>" class="btn btn-pinterest text-white btn-icon-only btn-sm">
                        <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                      </a>
                    </td>
                  </tr>
                  <?php $i++ ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <form action="<?= BASEURL ?>/home/tambah_pengiriman" method="POST">
        <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pengiriman</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card">
                <!-- Card body -->
                <div class="card-body">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Kode Pengiriman</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input kode pengiriman..." name="kode_pengiriman">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Jumlah Pengiriman</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input kode pengiriman..." name="jumlah_pengiriman">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Berat Pengiriman</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input kode pengiriman..." name="berat">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Franco</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="franco">
                      <option disabled hidden selected>Pilih Status</option>
                      <option class="text-success" value="true">Sudah Dibayar</option>
                      <option class="text-danger" value="false">Belum Dibayar</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Confrankert</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input confrankert..." name="confrankert">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Penerima Barang</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input penerima barang..." name="penerima_barang">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Keterangan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Data</button>
            </div>
          </div>
        </div>
      </form>
    </div>