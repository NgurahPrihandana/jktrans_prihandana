  <!-- Header -->
  <div class="header pb-6">
      <div class="container-fluid">
          <div class="header-body">
              <div class="row align-items-center py-4">
                  <div class="col-lg-6 col-7">
                      <h6 class="h2 d-inline-block mb-0">Alternative</h6>
                      <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                          <ol class="breadcrumb breadcrumb-links">
                              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                              <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
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
                  <div class="card-header">
                      <h3 class="mb-0">Edit Pengiriman</h3>
                  </div>
                  <!-- Card body -->
                  <div class="card-body">
                      <form action="<?= BASEURL ?>/home/update" method="POST">
                          <div class="row">
                          <input type="hidden" value="<?=$data['getSpcPengiriman']['id_pengiriman']?>" name="id_pengiriman">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="form-control-label" for="exampleFormControlInput1">Kode Pengiriman</label>
                                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input kode pengiriman..." value="<?=$data['getSpcPengiriman']['kode_pengiriman']?>" name="kode_pengiriman">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="form-control-label" for="exampleFormControlInput1">Jumlah Pengiriman</label>
                                      <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input kode pengiriman..." value="<?=$data['getSpcPengiriman']['jumlah_pengiriman']?>" name="jumlah_pengiriman">
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="form-control-label" for="exampleFormControlInput1">Berat Pengiriman</label>
                                      <input type="number" class="form-control" value="<?=$data['getSpcPengiriman']['berat']?>" id="exampleFormControlInput1" placeholder="Input kode pengiriman..." name="berat">
                                  </div>
                              </div>
                              <div class="col-lg-6">
                                  <div class="form-group">
                                      <label class="form-control-label" for="exampleFormControlInput1">Franco</label>
                                      <select class="form-control" id="exampleFormControlSelect1" name="franco">
                                          <option disabled hidden selected>Pilih Status</option>
                                          <option class="text-success" <?=$data['getSpcPengiriman']['franco'] == "true" ? "selected" : "" ?> value="true">Sudah Dibayar</option>
                                          <option class="text-danger" <?=$data['getSpcPengiriman']['franco'] == "false" ? "selected" : "" ?> value="false">Belum Dibayar</option>
                                      </select>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="form-control-label" for="exampleFormControlInput1">Confrankert</label>
                              <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input confrankert..." value="<?=$data['getSpcPengiriman']['confrankert']?>" name="confrankert">
                          </div>
                          <div class="form-group">
                              <label class="form-control-label" for="exampleFormControlInput1">Penerima Barang</label>
                              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input penerima barang..." value="<?=$data['getSpcPengiriman']['penerima_barang']?>" name="penerima_barang">
                          </div>
                          <div class="form-group">
                              <label class="form-control-label" for="exampleFormControlInput1">Keterangan</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"><?=$data['getSpcPengiriman']['keterangan']?></textarea>
                          </div>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Add Data</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>