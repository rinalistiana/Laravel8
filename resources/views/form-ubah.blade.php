<h1 style="color: blueviolet">Ubah Data Stok</h1>

<form action="/simpan-stok" method="POST" >
    <label for="merk">MERK : </label><br>
    <input type="text" name="merk" id="merk"
    	value="{{ $data[0]->merk }}"><br><br>
    
    <label for="tipe">TIPE : </label><br>
    <input type="text" name="tipe" id="tipe"
    	value="{{ $data[0]->tipe}}"><br><br>

    <label for="harga">HARGA : </label><br>
    <input type="number" name="harga" id="harga"
    	value="{{ $data[0]->harga }}"><br><br>

    <input type="hidden" value="{{ $data[0]->id }}"
    	id="id" name="id">
    <input type="submit" value="Simpan"><br>
</form>