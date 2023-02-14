@extends('navbar')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa Baru</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>NISN</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Sekolah Asal</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($students as $student)
                <tr>
                  <td>{{ $student->nisn }}</td>
                  <td>{{ $student->nama }}</td>
                  <td>{{ $student->alamat }}</td>
                  <td>{{ $student->smp }}</td>
                  <td>
                     <a class="btn btn-primary"
                      href="{{ route('student.edit',$student->id) }}">Edit</a>
                      <a class="btn btn-danger" href="#" data-id="{{ $student->id }}">Hapus</a>
                  </td>                 
                </tr>
                     @endforeach  
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
 </div>
  <!-- /.content-wrapper -->
  @endsection
