@extends('navbar')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('student.update',$students) }}" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NISN</label>
                  <input type="text" class="form-control" name="nisn" value="{{ $students->nisn }}"id="exampleInputEmail1" placeholder="Masukkan NISN">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" name="nama" value="{{ $students->nama }}" id="exampleInputPassword1" placeholder="Masukkan Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" name="alamat" value="{{ $students->alamat }}" id="exampleInputEmail1" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Sekolah Asal</label>
                  <input type="text" class="form-control" name="smp" value="{{ $students->smp }}" id="exampleInputEmail1" placeholder="Masukkan Sekolah Asal">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->

              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
