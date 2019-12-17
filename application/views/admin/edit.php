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
            <!-- card -->
            <div class="card grid-margin stretch-card">
              <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group mt-4">
                    <label for="nama" class="font-weight-bold">Nama Barang</label>
                    <input type="text" class="form-control" name="nama" value="<?= $edit['nama_barang']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="type" class="font-weight-bold">Type</label>
                    <select class="form-control" name="type">
                      <option value="Akustik">Akustik</option>
                      <option value="Elektrik">Elektrik</option>
                      <option value="Akustik Elektrik">Akustik Elektrik</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="nama" class="font-weight-bold">Harga</label>
                    <input type="text" class="form-control" name="harga" value="<?= $edit['harga']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="gambar" class="font-weight-bold">Gambar</label><br>
                    <div class="row">
                      <div class="col-2">
                        <img src="<?= base_url('assets/image/barang/') . $edit['gambar']; ?>" class="rounded" width="100">
                      </div>
                      <div class="col">
                        <input type="file" name="gambar" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Gambar">
                          <span class="input-group-append">
                            <button class="file-upload-browse mdi mdi-upload btn-icon-prepend btn btn-gradient-primary" type="button"> Upload</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-block btn-gradient-success mt-4"><i class="mdi mdi-tooltip-edit"></i> Edit Barang</button>
                </form>
              </div>
            </div>
            <!-- end card -->

          </div>
          <!-- content-wrapper ends -->