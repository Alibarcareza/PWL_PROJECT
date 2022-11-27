<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<
    </head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h2 class="text-center">Struk Peminjaman</h3>
	</center>
    @foreach ($dataStruk as $dataStruk)
    <div>
        <p class="text-center">-----------------------------------------------</p>
        <p class="text-center">ID: {{ $dataStruk->id}}</p>
        <p class="text-center">Nama: {{ $dataStruk->nama}}</p>
        <p class="text-center">Alamat: {{ $dataStruk->alamat}}</p>
        <p class="text-center">No. HP: {{ $dataStruk->no_hp}}</p>
        @foreach ($dataAlat as $dataAlat)
        <p class="text-center">Nama Alat: {{ $dataAlat->nama}}</p>
        @endforeach
        <p class="text-center">Jumlah: {{ $dataStruk->jumlah}}</p>
        <p class="text-center">Tanggal Peminjaman: {{ $dataStruk->tanggal_peminjaman}}</p>
        <p class="text-center">Tanggal Pengembalian: {{ $dataStruk->tanggal_pengembalian}}</p>
        <p class="text-center">-----------------------------------------------</p>
    </div>
    @endforeach
	{{-- <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>KTP</th>
                <th>Nama</th>						
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Alat</th>
                <th>Jumlah</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Surat Peminjaman</th>
            </tr>
        </thead>
        @foreach ($dataStruk as $dataStruk)
        <tbody>
            <tr>
                <td>{{ $dataStruk->id}}</td>
                <td><img src="{{ asset( 'storage/'.$dataStruk->ktp) }}" width="100px" height="100px"></td>
                <td>{{ $dataStruk->nama}}</td>
                <td>{{ $dataStruk->alamat}}</td>
                <td>{{ $dataStruk->no_hp}}</td>
                <td>{{ $dataStruk->nama_alat}}</td>
                <td>{{ $dataStruk->jumlah}}</td>
                <td>{{ $dataStruk->tanggal_peminjaman}}</td>
                <td>{{ $dataStruk->tanggal_pengembalian}}</td>
                <td><img src="{{ asset( 'storage/'.$dataStruk->surat) }}" width="100px" height="100px"></td>
            </tr>
        </tbody>
        @endforeach
    </table> --}}
</body>
</html>