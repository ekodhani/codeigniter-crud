        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-guitar-electric"></i>
                </span> Produk </h3>
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
                <h4 class="card-title"><?= $title; ?></h4>
                <div class="row">
                  <div class="col-md">
                    <img src="<?= base_url('assets/image/barang/') . $detail['gambar']; ?>">
                  </div>
                  <div class="col-md">
                    <h4 class="card-title">Nama Barang</h4>
                    <p class="card-text"><?= $detail['nama_barang']; ?></p>
                    <h4 class="card-title">Type</h4>
                    <p class="card-text"><?= $detail['type']; ?></p>
                    <h4 class="card-title">Harga</h4>
                    <p class="card-text"><?= $detail['harga']; ?></p>
                  </div>
                </div>
              </div>
              <!-- end card -->

            </div>
            <!-- content-wrapper ends -->