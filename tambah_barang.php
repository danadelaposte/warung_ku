<?php 
include ('layout.php')
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Tambah Barang</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Tambah Barang</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content ml-2">
          <div class="row">
            <div class="col-md-8">
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Input Barang</h3>
    
                  <!-- <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div> -->
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">Nama Barang</label>
                    <input type="text" id="inputName" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputName">Harga Modal</label>
                    <input type="number" id="inputName" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputName">Harga Jual</label>
                    <input type="number" id="inputName" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="inputName">Jumlah Stok</label>
                    <input type="number" id="inputName" class="form-control">
                  </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          <div class="row">
            <div class="col-12 ">
              <input type="submit" value="Tambah Barang" class="btn btn-info float-right">
              <!-- <a href="#" class="btn btn-danger float-right">Cancel</a> -->
            </div>
          </div>
          
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->