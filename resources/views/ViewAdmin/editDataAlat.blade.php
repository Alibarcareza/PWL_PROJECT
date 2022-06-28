@extends('ViewAdmin.layout')
@section('content')
    <div class="container mt-4">
        <div class="container" style="text-transform: capitalize">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <h3>Form Edit Data Alat</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Inputan Kamu Ada Yang Salah<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                <form method="post" enctype="multipart/form-data" action="{{ route('UpdateAlat', [$alat->id]) }}" id="myForm" >
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old( 'nama', $alat->nama) }}" required autofocus>
                        @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="merk">Merk</label>
                        <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror" value="{{ old( 'merk', $alat->merk) }}" required autofocus>
                            @error('merk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="jumlah">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old( 'jumlah', $alat->jumlah) }}" required autofocus>
                        @error('jumlah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" class="form-control" name="kategori">
                        <option value = "Gunung Rimba">Gunung Rimba</option>
                        <option value = "Rock Climbing">Rock Climbing</option>
                        <option value = "Orad">Orad</option>
                    </select>
                    </div>
                    
                   
                </div>
                </div>

                <div class="form-group">
                    <div class="d-flex flex-column align-items-center" style="text-transform: none">
                        <img id="preview-image-before-upload" class="rounded-left mt-5" width="150px" src="/storage/{{ $alat->gambar }} ">
                    </div>
                    <label for="gambar">Gambar</label>
                    <input type="file" id="image" class="form-control @error('gambar') is-invalid @enderror" name="gambar" value="/storage/{{ $alat->gambar }}" accept="image/*">
                    @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Save</button>
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