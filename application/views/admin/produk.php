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
            <?= $this->session->flashdata('message'); ?>
            <!-- tabel produk -->
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <a href="<?= base_url('admin/tambahProduk'); ?>" class="btn btn-primary">
                    <i class="mdi mdi-database-plus mdi"></i>
                    Tambah Data
                  </a>
                  </p>
                  <table class="table table-striped text-center">
                    <thead>
                      <tr>
                        <th> Gambar </th>
                        <th> Nama Barang </th>
                        <th> Action </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($produk as $p) { ?>
                        <tr>
                          <td class="py-1">
                            <img src="<?= base_url('assets/image/barang/') . $p['gambar']; ?>" alt="image" />
                          </td>
                          <td><?= $p['nama_barang']; ?></td>
                          <td>
                            <a href="<?= base_url('admin/detail/') ?><?= $p['id_barang']; ?>" class="btn btn-gradient-primary mdi mdi-eye"> Detail</a>
                            <a href="<?= base_url('admin/edit/') ?><?= $p['id_barang']; ?>" class="btn btn-gradient-primary 
                            mdi mdi-tooltip-edit"> Edit</a>
                            <a href="<?= base_url('admin/delete/') ?><?= $p['id_barang']; ?>" class="btn btn-danger mdi mdi-delete-forever" onclick="return confirm('Yakin ?');"> Delete</a>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- end tabel -->
          </div>
          <!-- content-wrapper ends -->