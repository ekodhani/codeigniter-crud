        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-guitar-electric"></i>
                </span> <?= $title; ?> </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                  </li>
                </ul>
              </nav>
            </div>
            <!-- form -->
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="<?= base_url('admin/tambahact'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="nama_barang">Nama Barang</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Masukkan Nama Barang" name="nama">
                    </div>
                    <div class="form-group">
                      <label for="type">Type</label>
                      <select class="form-control" id="exampleSelectGender" name="type">
                        <option value="Akustik">Akustik</option>
                        <option value="Elektrik">Elektrik</option>
                        <option value="Akustik Elektrik">Akustik Elektrik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="harga">Harga</label>
                      <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Masukkan Harga" name="harga">
                    </div>
                    <div class="form-group">
                      <label>File Upload Gambar</label>
                      <input type="file" name="gambar" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Gambar">
                        <span class="input-group-append">
                          <button class="file-upload-browse mdi mdi-upload btn-icon-prepend btn btn-gradient-primary" type="button"> Upload</button>
                        </span>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-gradient-warning btn-icon-text">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- end form -->
          </div>
          <!-- content-wrapper ends -->