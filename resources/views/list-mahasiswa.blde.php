<html>
	<head>
		<link rel="stylesheet" href="/css/app.css"
	</head>
	<body>
		<div class="container">
			<div class="jumbotron mt-3">
				<h1>Daftar Data Mahasiswa</h1>
			</div>

		<a href="/form-tambah" class="btn btn-primary">Tambah</a>

		<table class="table table-dark mt-3">
			<thead>
				<tr>
					<th scope="col">NIM</th>
					<th scope="col">NAMA</th>
					<th scope="col">KELAS</th>
					<th scope="col">DIBUAT</th>
					<th scope="col">DIUBAH</th>
					<th scope="col">PILIHAN</th>
				</tr>
			</thead>
			<tbody>
		@forelse ($data as $mhs)
				<tr>
					<td>{{ $mhs->nim }}</td>
					<td>{{ $mhs->nama }}</td>
					<td>{{ $mhs->kelas }}</td>
					<td>{{ $mhs->created_at }}</td>
					<td>{{ $mhs->updated_at }}</td>
					<td>
						<a href="/ubah-mhs/{{ $mhs->id }}" class="btn btn-warning">Ubah</a>
						<a href="/hapus-mhs/{{ $mhs->id }}" class="btn btn-danger">Hapus</a>
					</td>
    		</tr>
		@empty
			<tr>
    		<td colspan="3">Tidak Ada Data</td>
    	</tr>
		@endforelse
			
			</tbody>
		</table>
		</div>
	</body>
</html>