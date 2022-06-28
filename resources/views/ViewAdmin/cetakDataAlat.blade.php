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
		<h2 class="text-center text-primary">Data Alat</h3>
	</center>

	<table class="table table-bordered table-striped">
		<thead>

            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Merk</th>
                <th>Jumlah</th>
                <th>Terakhir diubah tanggal</th>
             
            </tr>
		</thead>
		<tbody>
            @foreach ($dataAlat as $dataAlat)
            <tr>
                <td>{{ $dataAlat->id}}</td>
                <td>{{ $dataAlat->nama}}</td>
                <td>{{ $dataAlat->kategori}}</td>
                <td>{{ $dataAlat->merk}}</td>
                <td>{{ $dataAlat->jumlah}}</td>
                <td>{{ $dataAlat->updated_at}}</td>
               
            </tr>
            @endforeach
		</tbody>
	</table>
</body>
</html>