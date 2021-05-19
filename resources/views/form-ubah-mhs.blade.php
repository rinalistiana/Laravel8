<html>
	<head>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		<div class="container">
			<div class="jumbotron mt-3">
				<h1>Ubah Data</h1>
			</div>

		<form action="/ubah-mhs" method="POST">
			<div class="form-group">
				<label for="nim">NIM</label>
				<input type="text" id="nim" name="nim" class="form-control" value="{{ $data->nim }}"><br>
			
				<label for="nama">NAMA</label>
				<input type="text" id="nama" name="nama" class="form-control" value="{{ $data->nama }}"><br>
			
				<label for="kelas">KELAS</label>
				<input type="text" id="kelas" name="kelas" class="form-control" value="{{ $data->kelas }}"><br>
			</div>

			<input type="hidden" value="{{ $data->id }}" id="id" name="id">
			<input type="submit" value="Simpan" class="btn btn-primary">
		</form>
	</div>
	</body>
</html>