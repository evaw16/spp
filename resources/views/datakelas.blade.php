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
              <h3 class="box-title">Data Kelas</h3><br>
              <a href="{{ route('classes.create') }}" class="btn btn-primary float-right">Tambah Kelas</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nama Kelas</th>
                  <th>Kompetensi Keahlian</th>
                </tr>
                </thead>
                <tbody>
                 @foreach($classes as $classes)
                <tr>
                  <td>{{ $classes->nama_kelas }}</td>
                  <td>{{ $classes->kompetensi_keahlian }}</td>
                  <td>
                     <a class="btn btn-primary"
                      href="{{ route('classes.edit',$classes->id) }}">Edit</a>
                      <a class="btn btn-danger" href="#" data-id="{{ $classes->id }}">Hapus</a>
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
    <form id="delete-form" action="" method="POST" style="display: none;">
        @csrf
        @method('DELETE')
    </form>
 </div>
  <!-- /.content-wrapper -->
  @endsection
@section('script')
    <script>
        $('.btn-danger').click(function (e) {
            e.preventDefault()
            var id = $(this).data('id')
            $('#delete-form').attr('action', '{{ route('classes.destroy') }}/' + id)
            $('#delete-form').submit();
        })
    </script>
@endsection