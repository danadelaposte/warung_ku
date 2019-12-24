<?php 
include ('layout.php')
?>
<div class="content-wrapper">
        <!-- Main content -->
        <section class="content ml-2">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Rp. 150.000</h3>
                <p>Omset Hari Ini</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Rp. 2.500.000</h3>
                <p>Total Omset</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>Rp. 50.000</h3>

                <p>Keuntungan Hari Ini</p>
              </div>
              <div class="icon">
                <i  class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Rp. 300.000</h3>

                <p>Total Keuntungan</p>
              </div>
              <div class="icon">
                <i  class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

</div>
<div class="row">
          <!-- Left col -->
          <section class="col-md-6 col-sm-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header bg-warning">
                <h3 class="card-title">Stok Hampir Habis!</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Nama Barang</th>
                      <th>Stok Tersisa</th>
                      <th>Order</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Kopi Kapal Api Sachet</td>
                      <td>2</td>
                      <td><button class="btn btn-sm btn-success">Re-stok</button></td>
                    </tr>
                    <tr>
                      <td>Indomie Soto</td>
                      <td>3</td>
                      <td><button class="btn btn-sm btn-success">Re-stok</button></td>
                    </tr>
                    <tr>
                      <td>Indomie Soto</td>
                      <td>3</td>
                      <td><button class="btn btn-sm btn-success">Re-stok</button></td>
                    </tr>
                    <tr>
                      <td>Indomie Soto</td>
                      <td>3</td>
                      <td><button class="btn btn-sm btn-success">Re-stok</button></td>
                    </tr>
                    <tr>
                      <td>Indomie Soto</td>
                      <td>3</td>
                      <td><button class="btn btn-sm btn-success">Re-stok</button></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
        </section>

        <div class="col-md-6 col-sm-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Diagram Penjualan</h3>
                  <a href=#>Lihat Laporan</a>
                </div>
              </div>
        <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">Rp. 2.500.000</span>
                    <span>Total Omset</span>
                  </p>
                </div>
                <!-- /.d-flex -->

                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-success"></i> Omset
                  </span>

                  <span>
                    <i class="fas fa-square text-danger"></i> Keuntungan
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->
       
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->