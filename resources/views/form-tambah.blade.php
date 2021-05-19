<html>
	<head>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		<div class="container">
			<div class="jumbotron mt-3">
				<h1>Tambah Data</h1>
			</div>

		<form action="/tambah" method="POST">
			<div class="form-group">
				<label for="nim">NIM</label>
				<input type="text" id="nim" name="nim" class="form-control"><br>
			
				<label for="nama">NAMA</label>
				<input type="text" id="nama" name="nama" class="form-control"><br>
			
				<label for="kelas">KELAS</label>
				<input type="text" id="kelas" name="kelas" class="form-control"><br>
			</div>

			<input type="submit" value="Simpan" class="btn btn-primary">
		</form>
	</div>
	</body>
</html>