@extends('userPage.layout')
@section('content')

<meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    
    <!-- Categories Section End -->

      <!-- Featured Section Begin -->
    <!-- Featured Section End -->
    <div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>List Alat<b></b></h2>
                    </div>
                    <div class="col-sm-7">
                    
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>						
                        <th>Kategori</th>
                        <th>Merk</th>
                        <th>Jumlah</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($dataAlat as $da)
                <tbody>
                    <tr>
                        <td>{{ $da->id}}</td>
                        <td>{{ $da->nama}}</td>
                        <td>{{ $da->kategori}}</td>
                        <td>{{ $da->merk}}</td>
                        <td>{{ $da->jumlah}}</td>
                        <td><img src="{{ asset( 'storage/'.$da->gambar) }}" width="100px" height="100px"></td>
                        <td><span class="status text-success">&bull;</span> Tersedia</td>
                        <td>
                        <a href="{{ route('PinjamAlat', $da->id) }}" class="btn btn-md btn-warning">Pinjam Alat</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <br>
            {{ $dataAlat->links() }}
            Jumlah data Product : {{ $dataAlat->total() }} <br>
            Data per Halaman : {{ $dataAlat->perPage() }} </br>
            </br>

        </div>
    </div>
</div> 
    
    <section>
    <div class="card card-primary card-outline">
    <div class="card-body text-white bg-info">
    <h3 class="section-title-2 text-uppercase font-weight-300 text-center" ><b>Our</b> <span class="blue-text">Information</span></h3>
    <br></br>
            <div class="row">
                  <p class="justify-text">Peminjaman Alat yang ada di dalam inventaris Organisasi Pencinta Alam Ganendra Giri adalah gratis namun akan dikenakan sanksi jika terdapat kerusakan atau kehilangan barang</p>
                
                </div>
            </div>
        </div>
    </section>

@endsection