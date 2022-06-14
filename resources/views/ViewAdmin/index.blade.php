@extends('ViewAadmin.layout')
@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Data Penguna</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Pengguna</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-12">
            <a href="{{ route('CreateUser') }}" class="btn btn-outline-success" style="margin: 10px"><i class="fas fa-edit"> Input User</i></a>
            <a href="{{ route('CetakDataUser') }}" class="btn btn-outline-danger"><i class="fas fa-edit"> Export To PDF</i></a>
          </div>
        </div>
        <br>
    
      
      <!-- /.card-header -->
    
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
  </div>



@endsection