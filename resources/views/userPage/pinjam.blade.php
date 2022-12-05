@extends('userPage.layout')
@section('content')
<div class="container mt-4">
    <div class="container" style="text-transform: capitalize">
        <div class="row">
            <div class="col-md-12 mt-3">
                <h3>Form Tambah Pinjam Alat</h3>

            <div class="card-body" style="margin-bottom: 145px;">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif

            <form method="post" action="{{ route('PostPinjamAlat') }}" enctype="multipart/form-data" id="myForm">
        @csrf
            <div class="form-group">
                <div class="d-flex flex-column align-items-center" style="text-transform: none">
                    <img id="preview-image-before-upload" class="mt-5" width="150px">
                </div>
                <label for="ktp">Foto KTP</label>
                
                <input type="file" id="image" class="form-control @error('ktp') is-invalid @enderror" name="ktp" accept="image/*" value="">
                @error('ktp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="surat">Surat Peminjaman</label>
                <input type="file" id="image" class="form-control @error('surat') is-invalid @enderror" name="surat" accept="image/*">
                @error('surat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" required value="{{ auth()->user()->name }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="alamat" required value="{{ auth()->user()->alamat }}">
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor Handphone</label>
                <input type="text" name="no_hp" class="form-control @error('no_hp') is-invalid @enderror" placeholder="no_hp" required value="{{ auth()->user()->notelp }}">
                @error('no_hp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama_alat">Jenis</label>
                <select class="custom-select mr-sm-2  @error('nama_alat') is-invalid @enderror" name="nama_alat">
                    <option value="Gunung Rimba">Gunung rimba</option>
                    <option value="Rock Climbing">Rock Climbing</option>
                    <option value="Orad">Orad</option>
                </select>
            </div>
            @foreach ($dataAlat as $da)
            <div class="form-group">
                <label for="fk_id_alat">Nama Alat</label>
                <select class="custom-select mr-sm-2  @error('fk_id_alat') is-invalid @enderror" name="fk_id_alat">
                    <option value="{{ $da->id }}">{{ $da->nama }}</option>
                </select>
            </div>  
            @endforeach
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="jumlah">Jumlah</label>
                <input type="jumlah" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" placeholder="jumlah" required >
                @error('jumlah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                <input type="date" name="tanggal_peminjaman" class="form-control @error('tanggal_peminjaman') is-invalid @enderror" placeholder="tanggal_peminjaman" required >
                @error('tanggal_peminjaman')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                    <input type="date" name="tanggal_pengembalian" class="form-control @error('tanggal_pengembalian') is-invalid @enderror" placeholder="tanggal_pengembalian" required >
                    @error('tanggal_pengembalian')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    </div>
                </div>
            <div class="form-group float-right">
                <button class="btn btn-lg btn-primary" type="submit">Submit</button>
            </div>
        </form>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    
$(document).ready(function (e) {

$('#image').change(function(){
            
    let reader = new FileReader();

    reader.onload = (e) => { 

    $('#preview-image-before-upload').attr('src', e.target.result); 
    }

    reader.readAsDataURL(this.files[0]); 

});

});

</script>
@endsection